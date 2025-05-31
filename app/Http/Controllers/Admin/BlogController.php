<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        try {
            Log::info('Starting blog creation process');
            
            $validated = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);

            Log::info('Validation passed', ['data' => $validated]);

            // Generate slug from title
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);
            Log::info('Generated slug', ['slug' => $validated['slug']]);

            // Handle image upload
            if ($request->hasFile('image')) {
                try {
                    $imagePath = $request->file('image')->store('blogs', 'public');
                    $validated['image'] = $imagePath;
                    Log::info('Image uploaded successfully', ['path' => $imagePath]);
                } catch (\Exception $e) {
                    Log::error('Image upload failed', ['error' => $e->getMessage()]);
                    throw $e;
                }
            }

            // Always set is_published to true
            $validated['is_published'] = true;

            // Create the blog post
            Log::info('Attempting to create blog post', ['data' => $validated]);
            $blog = Blog::create($validated);

            if (!$blog) {
                throw new \Exception('Failed to create blog post - returned null');
            }

            Log::info('Blog post created successfully', ['blog_id' => $blog->id]);

            // Redirect back to admin blogs index
            return redirect()->route('admin.blogs.index')
                ->with('success', 'Blog post created successfully.');

        } catch (\Illuminate\Validation\ValidationException $e) {
            Log::warning('Validation failed', ['errors' => $e->errors()]);
            return redirect()->back()
                ->withErrors($e->errors())
                ->withInput();
        } catch (\Exception $e) {
            Log::error('Blog creation failed', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()
                ->with('error', 'Failed to create blog post. Please try again.')
                ->withInput();
        }
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_published' => 'boolean'
        ]);

        // Generate slug from title
        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            $imagePath = $request->file('image')->store('blogs', 'public');
            $validated['image'] = $imagePath;
        }

        // Set is_published
        $validated['is_published'] = $request->has('is_published');

        $blog->update($validated);

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        // Delete image if exists
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')
            ->with('success', 'Blog post deleted successfully.');
    }
}
