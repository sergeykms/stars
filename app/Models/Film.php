<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'director',
        'music',
        'producer',
        'release_date',
        'script',
        'budget',
        'timing',
        'avatar',
        'avatar_min',
        'episode',
        'cycle',
        'about',
        'content',
    ];
}
