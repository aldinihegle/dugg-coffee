<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredReviews = Review::where('is_approved', true)
            ->where('show_in_homepage', true)
            ->latest()
            ->take(3)
            ->get();

        $averageRating = Review::where('is_approved', true)->avg('rating') ?? 5.0;

        return view('home', compact('featuredReviews', 'averageRating'));
    }
} 