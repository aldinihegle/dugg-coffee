@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/blog.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-[#009EF5]">Blog</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-[#009EF5] transition-colors">Home</a>
                <span class="mx-2">/</span>
                <span class="text-[#009EF5]">Blog</span>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">BLOG</h2>
                <h3 class="text-2xl font-bold mb-4">Latest <span class="text-[#009EF5]">News</span></h3>
                <p class="text-gray-600">Stay updated with the latest news about coffee and Dugg Coffee updates</p>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($blogs as $blog)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                        <a href="{{ route('blog.show', $blog->slug) }}" class="block">
                            <div class="relative h-48">
                                @if($blog->image)
                                    <img 
                                        src="{{ asset('storage/' . $blog->image) }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <img 
                                        src="{{ asset('images/blog-default.jpg') }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @endif
                                <div class="absolute bottom-0 left-0 bg-[#009EF5] text-white px-4 py-1 text-sm">
                                    {{ $blog->created_at->format('M d, Y') }}
                                </div>
                            </div>
                        <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-[#009EF5] transition-colors">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ strip_tags($blog->content) }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="inline-block bg-[#009EF5] text-white px-6 py-2 rounded-full hover:bg-blue-600 transition-colors text-sm">
                                        Read More
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <div class="max-w-md mx-auto">
                            <p class="text-gray-500 text-lg mb-4">No blog posts found.</p>
                            <p class="text-gray-400">Check back later for new updates and articles.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($blogs->hasPages())
                <div class="flex justify-center mt-12">
                    {{ $blogs->links() }}
            </div>
            @endif
        </div>
    </section>
@endsection
