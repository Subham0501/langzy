<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageUploadService
{
    protected $disk;

    public function __construct()
    {
        $this->disk = Storage::disk('cloudflare');
    }

    /**
     * Upload an image to Cloudflare R2
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string|null
     */
    public function uploadImage(UploadedFile $file, string $folder = 'counsellors'): ?string
    {
        try {
            // Validate file type
            if (!$this->isValidImage($file)) {
                throw new \InvalidArgumentException('Invalid image file type');
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
            \Log::error('Image upload failed: ' . $e->getMessage());
            return null;
        }
    }

    /**
     * Delete an image from Cloudflare R2
     *
     * @param string $url
     * @return bool
     */
    public function deleteImage(string $url): bool
    {
        try {
            // Extract path from URL
            $path = $this->extractPathFromUrl($url);
            
            if ($path && $this->disk->exists($path)) {
                return $this->disk->delete($path);
            }

            return true; // Consider it deleted if it doesn't exist
        } catch (\Exception $e) {
            \Log::error('Image deletion failed: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Validate if the uploaded file is a valid image
     *
     * @param UploadedFile $file
     * @return bool
     */
    protected function isValidImage(UploadedFile $file): bool
    {
        $allowedMimes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        $maxSize = 5 * 1024 * 1024; // 5MB

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
        
        return "{$timestamp}_{$random}.{$extension}";
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
}
