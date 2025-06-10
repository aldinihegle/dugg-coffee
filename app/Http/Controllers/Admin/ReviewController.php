<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->paginate(10);
        return view('admin.reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required',
        ]);

        Review::create($validated);

        return redirect()->route('admin.reviews.index')
            ->with('success', 'Review created successfully.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:8048',
            'is_approved' => 'boolean',
            'show_in_homepage' => 'boolean'
        ]);

        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($review->avatar) {
                Storage::disk('public')->delete($review->avatar);
            }
            $avatarPath = $request->file('avatar')->store('reviews', 'public');
            $validated['avatar'] = $avatarPath;
        }

        $validated['is_approved'] = $request->has('is_approved');
        $validated['show_in_homepage'] = $request->has('show_in_homepage');

        $review->update($validated);

        return redirect()->route('admin.reviews.index')
            ->with('success', 'Review updated successfully.');
    }

    public function destroy(Review $review)
    {
        if ($review->avatar) {
            Storage::disk('public')->delete($review->avatar);
        }

        $review->delete();

        return redirect()->route('admin.reviews.index')
            ->with('success', 'Review deleted successfully.');
    }

    public function toggleApproval(Review $review)
    {
        $review->update([
            'is_approved' => !$review->is_approved
        ]);

        return redirect()->back()->with('success', 'Review status updated successfully.');
    }

    public function toggleHomepage(Review $review)
    {
        $review->update([
            'show_in_homepage' => !$review->show_in_homepage
        ]);

        return redirect()->back()->with('success', 'Homepage visibility updated successfully.');
    }
} 