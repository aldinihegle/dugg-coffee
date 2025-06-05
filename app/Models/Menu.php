<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_title',
        'description',
        'sub_description',
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
    const CATEGORY_SEASONAL = 'Seasonal';
    const CATEGORY_SIGNATURE = 'Signature';
    const CATEGORY_SNACK = 'Snack';
    const CATEGORY_MAIN_COURSE = 'Main Course';
    const CATEGORY_BEVERAGES = 'Beverages';

    public static function categories()
    {
        return [
            self::CATEGORY_BEVERAGES,
            self::CATEGORY_SEASONAL,
            self::CATEGORY_SIGNATURE,
            self::CATEGORY_SNACK,
            self::CATEGORY_MAIN_COURSE
        ];
    }

    public static function beverageCategories()
    {
        return [
            self::CATEGORY_SEASONAL,
            self::CATEGORY_SIGNATURE,
            self::CATEGORY_BEVERAGES
        ];
    }
}
