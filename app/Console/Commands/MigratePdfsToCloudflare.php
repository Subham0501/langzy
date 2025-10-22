<?php

namespace App\Console\Commands;

use App\Models\GrammarContent;
use App\Services\PdfUploadService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class MigratePdfsToCloudflare extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:pdfs-to-cloudflare';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate existing PDFs from local storage to Cloudflare R2';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting PDF migration to Cloudflare R2...');

        $pdfUploadService = new PdfUploadService();
        $contents = GrammarContent::whereNotNull('teaching_material_pdf')->get();

        if ($contents->isEmpty()) {
            $this->info('No PDFs found to migrate.');
            return;
        }

        $this->info("Found {$contents->count()} PDFs to migrate.");

        $successCount = 0;
        $errorCount = 0;

        foreach ($contents as $content) {
            $this->info("Processing: {$content->title}");

            try {
                // Check if the file exists in local storage
                if (!Storage::disk('public')->exists($content->teaching_material_pdf)) {
                    $this->warn("PDF file not found: {$content->teaching_material_pdf}");
                    $errorCount++;
                    continue;
                }

                // Get the file content
                $fileContent = Storage::disk('public')->get($content->teaching_material_pdf);
                
                // Create a temporary file to upload
                $tempPath = tempnam(sys_get_temp_dir(), 'pdf_migration_');
                file_put_contents($tempPath, $fileContent);

                // Create a fake UploadedFile object
                $uploadedFile = new \Illuminate\Http\UploadedFile(
                    $tempPath,
                    basename($content->teaching_material_pdf),
                    'application/pdf',
                    null,
                    true
                );

                // Upload to Cloudflare R2
                $cloudflareUrl = $pdfUploadService->uploadPdf($uploadedFile, 'course-materials/pdfs');

                if ($cloudflareUrl) {
                    // Update the database record
                    $content->update(['teaching_material_pdf' => $cloudflareUrl]);
                    
                    // Delete the local file
                    Storage::disk('public')->delete($content->teaching_material_pdf);
                    
                    $this->info("✓ Migrated: {$content->title}");
                    $this->info("  Old path: {$content->teaching_material_pdf}");
                    $this->info("  New URL: {$cloudflareUrl}");
                    
                    $successCount++;
                } else {
                    $this->error("✗ Failed to upload: {$content->title}");
                    $errorCount++;
                }

                // Clean up temp file
                unlink($tempPath);

            } catch (\Exception $e) {
                $this->error("✗ Error migrating {$content->title}: " . $e->getMessage());
                $errorCount++;
            }
        }

        $this->info("\nMigration completed!");
        $this->info("Successfully migrated: {$successCount} PDFs");
        $this->info("Failed to migrate: {$errorCount} PDFs");
    }
}