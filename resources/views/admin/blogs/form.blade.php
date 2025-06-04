@extends('layouts.admin')

@section('title', isset($blog) ? 'Edit Blog' : 'Create Blog')
@section('header', isset($blog) ? 'Edit Blog' : 'Create Blog')

@section('content')
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <form action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}" 
                  method="POST" 
                  enctype="multipart/form-data"
                  class="p-6">
                @csrf
                @if(isset($blog))
                    @method('PUT')
                @endif

                <div class="space-y-6">
                    <!-- Title -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" 
                               name="title" 
                               id="title" 
                               value="{{ old('title', $blog->title ?? '') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                               required>
                        @error('title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Slug -->
                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700">Slug</label>
                        <input type="text" 
                               name="slug" 
                               id="slug" 
                               value="{{ old('slug', $blog->slug ?? '') }}"
                               class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                               required>
                        @error('slug')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Content -->
                    <div>
                        <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                        <textarea name="content" 
                                  id="content" 
                                  rows="8"
                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                                  required>{{ old('content', $blog->content ?? '') }}</textarea>
                        @error('content')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                        <div class="mt-1 flex items-center">
                            @if(isset($blog) && $blog->image)
                                <div class="mr-4">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-32 h-32 object-cover rounded">
                                </div>
                            @endif
                            <input type="file" 
                                   name="image" 
                                   id="image"
                                   accept="image/*"
                                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                        </div>
                        @error('image')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Featured -->
                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="is_featured" 
                               id="is_featured" 
                               value="1"
                               {{ old('is_featured', $blog->is_featured ?? false) ? 'checked' : '' }}
                               class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="is_featured" class="ml-2 block text-sm text-gray-700">Featured Blog</label>
                    </div>

                    <!-- Status -->
                    <div class="flex items-center">
                        <input type="checkbox" 
                               name="is_active" 
                               id="is_active" 
                               value="1"
                               {{ old('is_active', $blog->is_active ?? true) ? 'checked' : '' }}
                               class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="is_active" class="ml-2 block text-sm text-gray-700">Active</label>
                    </div>
                </div>

                <div class="mt-6 flex items-center justify-end space-x-3">
                    <a href="{{ route('admin.blogs.index') }}" class="inline-flex justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        Cancel
                    </a>
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        {{ isset($blog) ? 'Update Blog' : 'Create Blog' }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
    <script>
        // Auto-generate slug from title
        document.getElementById('title').addEventListener('input', function() {
            let slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9-]/g, '-')
                .replace(/-+/g, '-')
                .replace(/^-|-$/g, '');
            document.getElementById('slug').value = slug;
        });
    </script>
    @endpush
@endsection 