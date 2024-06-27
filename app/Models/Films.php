<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'image_min_path',
        'budget',
        'director',
        'music',
        'name',
        'description',
        'producer',
        'release_date',
        'script',
        'timing',
    ];
}
