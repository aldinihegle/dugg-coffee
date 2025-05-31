<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category',
        'image',
        'is_active'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_active' => 'boolean'
    ];

    // Category constants
    const CATEGORY_HOT_COFFEE = 'Hot Coffee';
    const CATEGORY_COLD_COFFEE = 'Cold Coffee';
    const CATEGORY_NON_COFFEE = 'Non-Coffee';

    public static function categories()
    {
        return [
            self::CATEGORY_HOT_COFFEE,
            self::CATEGORY_COLD_COFFEE,
            self::CATEGORY_NON_COFFEE
        ];
    }
}
