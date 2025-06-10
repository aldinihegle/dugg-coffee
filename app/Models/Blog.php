<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'is_featured',
        'is_active',
        'is_published'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'is_published' => 'boolean'
    ];

    // Add the published scope
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Keep existing active scope
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}