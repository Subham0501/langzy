<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'country',
        'description',
        'photo_url',
        'is_active',
        'priority',
        'language',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'priority' => 'integer',
    ];

    /**
     * Get the ratings for the teacher.
     */
    public function ratings()
    {
        return $this->hasMany(TeacherRating::class);
    }

    /**
     * Get the average rating for the teacher.
     */
    public function getAverageRatingAttribute()
    {
        return $this->ratings()->avg('rating') ?? 0;
    }

    /**
     * Get the total number of ratings for the teacher.
     */
    public function getTotalRatingsAttribute()
    {
        return $this->ratings()->count();
    }

    /**
     * Scope a query to only include active teachers.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order teachers by priority.
     */
    public function scopeOrderedByPriority($query)
    {
        return $query->orderBy('priority', 'desc')->orderBy('name');
    }

    /**
     * Scope a query to filter teachers by language.
     */
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }
}
