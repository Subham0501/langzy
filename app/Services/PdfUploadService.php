<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PdfUploadService
{
    protected $disk;

    public function __construct()
    {
        $this->disk = Storage::disk('cloudflare');
    }

    /**
     * Upload a PDF to Cloudflare R2
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string|null
     */
    public function uploadPdf(UploadedFile $file, string $folder = 'course-materials'): ?string
    {
        try {
            // Validate file type
            if (!$this->isValidPdf($file)) {
                throw new \InvalidArgumentException('Invalid PDF file type');
            }

            // Generate unique filename
            $filename = $this->generateFilename($file);
            $path = $folder . '/' . $filename;

            // Upload to Cloudflare R2
            $uploaded = $this->disk->put($path, file_get_contents($file->getRealPath()), 'public');

            if ($uploaded) {
                return $this->disk->url($path);
            }

            return null;
        } catch (\Exception $e) {
            \Log::error('PDF upload failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Delete a PDF from Cloudflare R2
     *
     * @param string $url
     * @return bool
     */
    public function deletePdf(string $url): bool
    {
        try {
            // Extract path from URL
            $path = $this->extractPathFromUrl($url);
            
            if ($path && $this->disk->exists($path)) {
                return $this->disk->delete($path);
            }

            return true; // Consider it deleted if it doesn't exist
        } catch (\Exception $e) {
            \Log::error('PDF deletion failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Validate if the uploaded file is a valid PDF
     *
     * @param UploadedFile $file
     * @return bool
     */
    protected function isValidPdf(UploadedFile $file): bool
    {
        $allowedMimes = ['application/pdf'];
        $maxSize = 20 * 1024 * 1024; // 20MB

        return in_array($file->getMimeType(), $allowedMimes) && 
               $file->getSize() <= $maxSize;
    }

    /**
     * Generate a unique filename
     *
     * @param UploadedFile $file
     * @return string
     */
    protected function generateFilename(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $timestamp = now()->format('Y-m-d_H-i-s');
        $random = Str::random(8);
        $originalName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        
        return "{$timestamp}_{$originalName}_{$random}.{$extension}";
    }

    /**
     * Extract file path from Cloudflare R2 URL
     *
     * @param string $url
     * @return string|null
     */
    protected function extractPathFromUrl(string $url): ?string
    {
        $parsedUrl = parse_url($url);
        
        if (!isset($parsedUrl['path'])) {
            return null;
        }

        // Remove leading slash
        return ltrim($parsedUrl['path'], '/');
    }

    /**
     * Get the public URL for a file path
     *
     * @param string $path
     * @return string
     */
    public function getUrl(string $path): string
    {
        return $this->disk->url($path);
    }

    /**
     * Check if a file exists in Cloudflare R2
     *
     * @param string $path
     * @return bool
     */
    public function exists(string $path): bool
    {
        return $this->disk->exists($path);
    }
}
