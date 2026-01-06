<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherRating extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'user_id',
        'rating',
        'comment',
        'language',
    ];

    protected $casts = [
        'rating' => 'integer',
    ];

    /**
     * Get the teacher that owns the rating.
     */
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    /**
     * Get the user that made the rating.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include ratings with comments.
     */
    public function scopeWithComments($query)
    {
        return $query->whereNotNull('comment');
    }

    /**
     * Scope a query to filter ratings by language.
     */
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }
}
