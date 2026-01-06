<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';

    protected $fillable = [
        'title',
        'description',
        'file_path',
        'file_name',
        'file_type',
        'language',
        'priority',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'priority' => 'integer',
    ];

    /**
     * Scope a query to only include active information.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to filter by language.
     */
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }

    /**
     * Scope a query to order by priority.
     */
    public function scopeOrderedByPriority($query)
    {
        return $query->orderBy('priority', 'desc')->orderBy('created_at', 'desc');
    }

    /**
     * Get the file URL.
     */
    public function getFileUrlAttribute()
    {
        if ($this->file_path) {
            // Use 'uploads' for shared hosting where storage symlink doesn't work
            $folder = config('app.storage_url', 'storage');
            return asset($folder . '/' . $this->file_path);
        }
        return null;
    }

    /**
     * Check if the information has a file.
     */
    public function hasFile()
    {
        return !empty($this->file_path);
    }

    /**
     * Get file extension.
     */
    public function getFileExtensionAttribute()
    {
        if ($this->file_name) {
            return pathinfo($this->file_name, PATHINFO_EXTENSION);
        }
        return null;
    }
}
