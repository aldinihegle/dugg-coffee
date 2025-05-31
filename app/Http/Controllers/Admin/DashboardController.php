<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Blog;
use App\Models\Review;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        try {
            // Get counts
            $menuCount = Menu::count();
            $blogCount = Blog::count();
            $reviewCount = Review::count();

            // Get recent activities
            $recentActivities = collect();

            // Get recent menu activities if table exists
            if (Schema::hasTable('menus')) {
                $recentMenus = Menu::latest()
                    ->take(5)
                    ->get()
                    ->map(function ($menu) {
                        return [
                            'action' => 'Added new menu item',
                            'item' => $menu->name,
                            'date' => $menu->created_at
                        ];
                    });
                $recentActivities = $recentActivities->concat($recentMenus);
            }

            // Get recent blog activities if table exists
            if (Schema::hasTable('blogs')) {
                $recentBlogs = Blog::latest()
                    ->take(5)
                    ->get()
                    ->map(function ($blog) {
                        return [
                            'action' => 'Added new blog post',
                            'item' => $blog->title,
                            'date' => $blog->created_at
                        ];
                    });
                $recentActivities = $recentActivities->concat($recentBlogs);
            }

            // Get recent review activities if table exists
            if (Schema::hasTable('reviews')) {
                $recentReviews = Review::latest()
                    ->take(5)
                    ->get()
                    ->map(function ($review) {
                        return [
                            'action' => 'New review received',
                            'item' => "Rating: {$review->rating} stars",
                            'date' => $review->created_at
                        ];
                    });
                $recentActivities = $recentActivities->concat($recentReviews);
            }

            // Sort all activities by date
            $recentActivities = $recentActivities->sortByDesc('date')->take(10);

            return view('admin.dashboard', compact('menuCount', 'blogCount', 'reviewCount', 'recentActivities'));
        } catch (\Exception $e) {
            // If any error occurs, return view with zero counts
            $menuCount = 0;
            $blogCount = 0;
            $reviewCount = 0;
            $recentActivities = collect();

            return view('admin.dashboard', compact('menuCount', 'blogCount', 'reviewCount', 'recentActivities'))
                ->with('error', 'Some data could not be loaded. Please ensure all migrations have been run.');
        }
    }
}
