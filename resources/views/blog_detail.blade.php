@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[300px]">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" 
                alt="{{ $blog->title }}" 
                class="absolute inset-0 w-full h-full object-cover"
            />
        @else
            <img src="{{ asset('images/blog-default.jpg') }}" 
                alt="{{ $blog->title }}" 
                class="absolute inset-0 w-full h-full object-cover"
            />
        @endif
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-4xl font-medium text-white mb-4 text-center">{{ $blog->title }}</h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-[#009EF5] transition-colors">Home</a> 
                <span class="mx-2">/</span>
                <a href="{{ route('blog') }}" class="hover:text-[#009EF5] transition-colors">Blog</a>
                <span class="mx-2">/</span>
                <span class="text-[#009EF5]">{{ Str::limit($blog->title, 30) }}</span>
            </div>
        </div>
    </section>

    <!-- Blog Content Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" 
                            alt="{{ $blog->title }}" 
                            class="w-full h-[400px] object-cover"
                        />
                    @endif
                    <div class="p-8">
                        <div class="flex items-center gap-4 mb-6">
                            <span class="text-gray-500">
                                <i class="far fa-calendar-alt mr-2"></i>
                                {{ $blog->created_at->format('F d, Y') }}
                            </span>
                            @if($blog->is_published)
                                <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                                    <i class="fas fa-check-circle mr-1"></i>
                                    Published
                                </span>
                            @endif
                        </div>
                        <h2 class="text-3xl font-bold mb-6">{{ $blog->title }}</h2>
                        <div class="prose max-w-none">
                            {!! $blog->content !!}
                        </div>
                    </div>
                </div>

                <!-- Related Posts -->
                @if($relatedBlogs->count() > 0)
                    <div class="mt-16">
                        <h3 class="text-2xl font-bold mb-8">Related Posts</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            @foreach($relatedBlogs as $relatedBlog)
                                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                    <a href="{{ route('blog.show', $relatedBlog->slug) }}" class="block">
                                        <div class="relative h-48">
                                            @if($relatedBlog->image)
                                                <img src="{{ asset('storage/' . $relatedBlog->image) }}" 
                                                    alt="{{ $relatedBlog->title }}" 
                                                    class="w-full h-full object-cover"
                                                />
                                            @else
                                                <img src="{{ asset('images/blog-default.jpg') }}" 
                                                    alt="{{ $relatedBlog->title }}" 
                                                    class="w-full h-full object-cover"
                                                />
                                            @endif
                                            <div class="absolute bottom-0 left-0 bg-[#009EF5] text-white px-4 py-1 text-sm">
                                                {{ $relatedBlog->created_at->format('M d, Y') }}
                                            </div>
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-[#009EF5] transition-colors">{{ $relatedBlog->title }}</h3>
                                            <p class="text-gray-600 mb-4 line-clamp-3">{{ strip_tags($relatedBlog->content) }}</p>
                                            <span class="text-[#009EF5] hover:text-blue-700 transition-colors">Read More</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection 