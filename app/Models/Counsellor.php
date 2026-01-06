<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsellor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'address',
        'description',
        'photo_url',
        'price_rs',
        'duration_minutes',
        'is_active',
        'priority',
        'language',
    ];

    /**
     * Scope a query to filter counsellors by language.
     */
    public function scopeByLanguage($query, $language)
    {
        return $query->where('language', $language);
    }
}


