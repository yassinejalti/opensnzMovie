<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'original_title',
        'overview',
        'poster_path',
        'backdrop_path',
        'media_type',
        'adult',
        'original_language',
        'genre_ids',
        'popularity',
        'release_date',
        'video',
        'vote_average',
        'vote_count',
    ];

    protected $casts = [
        'genre_ids' => 'array',
        'release_date' => 'date',
    ];

}
