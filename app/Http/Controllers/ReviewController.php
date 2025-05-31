<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        try {
            Log::info('Review submission received', ['data' => $request->all()]);

            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'nullable|email|max:255',
                'comment' => 'required',
                'rating' => 'required|integer|min:1|max:5',
            ]);

            // Set default values
            $validated['is_approved'] = false;
            $validated['show_in_homepage'] = false;

            $review = Review::create($validated);

            Log::info('Review created successfully', ['review_id' => $review->id]);

            return redirect()->back()
                ->with('success', '🎉 Thank you for your review! We will review it shortly.');
        } catch (\Exception $e) {
            Log::error('Error creating review', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);

            return redirect()->back()
                ->with('error', 'Sorry, there was a problem submitting your review. Please try again.')
                ->withInput();
        }
    }
}
