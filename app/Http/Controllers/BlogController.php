<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_published', true)
            ->latest()
            ->paginate(9);
            
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
            
        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->where('is_published', true)
            ->latest()
            ->take(3)
            ->get();
            
        return view('blog_detail', compact('blog', 'relatedBlogs'));
    }
}
