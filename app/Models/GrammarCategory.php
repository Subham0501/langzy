<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GrammarCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'slug',
        'is_active',
        'sort_order',
        'language'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }

    public function subcategories()
    {
        return $this->hasMany(GrammarSubcategory::class);
    }

    public function contents()
    {
        return $this->hasMany(GrammarContent::class);
    }

    /**
     * Scope a query to filter categories by language.
     */
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }
}
