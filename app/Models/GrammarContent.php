<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class GrammarContent extends Model
{
    protected $fillable = [
        'grammar_category_id',
        'grammar_subcategory_id',
        'title',
        'content',
        'slug',
        'thumbnail_image',
        'teaching_material_pdf',
        'meta_description',
        'is_active',
        'is_featured',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($content) {
            if (empty($content->slug)) {
                $content->slug = Str::slug($content->title);
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(GrammarCategory::class, 'grammar_category_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(GrammarSubcategory::class, 'grammar_subcategory_id');
    }
}
