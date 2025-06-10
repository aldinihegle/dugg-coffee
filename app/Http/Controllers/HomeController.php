<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        try {
            $reviews = Review::where('is_approved', true)
                ->where('show_in_homepage', true)
                ->latest()
                ->get();

            $averageRating = Review::where('is_approved', true)
                ->avg('rating') ?? 0;

            return view('home', compact('reviews', 'averageRating'));
        } catch (\Exception $e) {
            return view('home', [
                'reviews' => collect(),
                'averageRating' => 0
            ]);
        }
    }
}