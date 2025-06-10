<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Get one featured blog
        $featuredBlog = Blog::where('is_featured', true)
            ->where('is_active', true)
            ->latest()
            ->first();

        // Get regular blogs excluding the featured one
        $regularBlogs = Blog::where('is_active', true)
            ->when($featuredBlog, function($query) use ($featuredBlog) {
                return $query->where('id', '!=', $featuredBlog->id);
            })
            ->latest()
            ->paginate(9);

        return view('Blog', compact('featuredBlog', 'regularBlogs'));
    }

    public function show(Blog $blog)
    {
        $relatedBlogs = Blog::published()
            ->where('id', '!=', $blog->id)
            ->latest()
            ->take(3)
            ->get();

        return view('blog_detail', compact('blog', 'relatedBlogs'));
    }
}
