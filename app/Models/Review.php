<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rating',
        'comment',
        'is_approved',
        'show_in_homepage'
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_approved' => 'boolean',
        'show_in_homepage' => 'boolean'
    ];
}
