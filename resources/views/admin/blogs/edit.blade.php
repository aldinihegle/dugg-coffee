@extends('layouts.admin')

@section('title', 'Edit Blog Post')
@section('header', 'Edit Blog Post')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold mb-6">Edit Blog Post</h1>

            <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" 
                            name="title" 
                            id="title" 
                            value="{{ old('title', $blog->title) }}" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('title') border-red-500 @enderror">
                        @error('title')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea 
                            name="content" 
                            id="content" 
                            rows="3" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm @error('content') border-red-500 @enderror">{{ old('content', $blog->content) }}</textarea>
                        @error('content')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                        @if($blog->image)
                            <div class="mb-2">
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="Current blog image" class="w-32 h-32 object-cover rounded">
                                <p class="text-sm text-gray-600 mt-1">Current image</p>
                            </div>
                        @endif
                        <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image') border-red-500 @enderror" accept="image/*">
                        @error('image')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="is_published" class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" {{ old('is_published', $blog->is_published) ? 'checked' : '' }}>
                            <span class="ml-2 text-gray-700">Published</span>
                        </label>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Post
                    </button>
                    <a href="{{ route('admin.blogs.index') }}" class="text-gray-600 hover:text-gray-800">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 