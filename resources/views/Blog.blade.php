@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/blog-hero.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-blue-400">Blog</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">Blog</span>
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span class="text-sm text-gray-500 uppercase">BLOGS</span>
                <h2 class="text-3xl font-bold mt-2">All News</h2>
                <p class="text-gray-600 mt-2">Silahkan ini berbagai berita dan update dari Dugg Coffee</p>
            </div>

            <!-- Featured Blog -->
            @if($featuredBlog)
                <div class="mb-16">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="md:flex flex-row-reverse"> <!-- Tambahkan flex-row-reverse -->
                            <div class="md:w-1/2">
                                @if($featuredBlog->image)
                                    <img 
                                        src="{{ asset('storage/' . $featuredBlog->image) }}"
                                        alt="{{ $featuredBlog->title }}"
                                        class="w-full h-[400px] object-cover"
                                    />
                                @else
                                    <img 
                                        src="{{ asset('images/blog-default.png') }}"
                                        alt="{{ $featuredBlog->title }}"
                                        class="w-full h-[400px] object-cover"
                                    />
                                @endif
                            </div>
                            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                                <h3 class="text-2xl font-bold mb-4 hover:text-[#009EF5] transition-colors">{{ $featuredBlog->title }}</h3>
                                <p class="text-gray-600 mb-6 line-clamp-3">{{ strip_tags($featuredBlog->content) }}</p>
                                <a href="{{ route('blog.show', $featuredBlog->id) }}" class="inline-flex items-center text-[#009EF5] hover:text-blue-600 transition-colors">
                                    See More 
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($regularBlogs as $blog)
                    <div class="bg-[#FFF8E6] rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                        <a href="{{ route('blog.show', $blog->id) }}" class="block">
                            <div class="relative h-48 p-1">
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
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-[#009EF5] transition-colors">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ strip_tags($blog->content) }}</p>
                                <div class="flex justify-end my-10">
                                    <span class="inline-flex items-center text-[#009EF5] font-semibold hover:text-blue-600 transition-colors">
                                        See More 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
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
            @if($regularBlogs->hasPages())
                <div class="mt-12 flex justify-center">
                    <nav class="inline-flex items-center gap-1">
                        {{-- Previous Page Link --}}
                        @if ($regularBlogs->onFirstPage())
                            <span class="px-3 py-1 rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        @else
                            <a href="{{ $regularBlogs->previousPageUrl() }}" class="px-3 py-1 rounded-lg bg-[#009EF5] text-white hover:bg-blue-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        @endif

                        {{-- Page Numbers --}}
                        @foreach ($regularBlogs->getUrlRange(1, $regularBlogs->lastPage()) as $page => $url)
                            @if ($page == $regularBlogs->currentPage())
                                <span class="px-3 py-1 rounded-lg bg-[#009EF5] text-white">{{ $page }}</span>
                            @else
                                <a href="{{ $url }}" class="px-3 py-1 rounded-lg hover:bg-gray-100 transition-colors">{{ $page }}</a>
                            @endif
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($regularBlogs->hasMorePages())
                            <a href="{{ $regularBlogs->nextPageUrl() }}" class="px-3 py-1 rounded-lg bg-[#009EF5] text-white hover:bg-blue-600 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        @else
                            <span class="px-3 py-1 rounded-lg bg-gray-100 text-gray-400 cursor-not-allowed">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        @endif
                    </nav>
                </div>
            @endif
        </div>
    </section>
@endsection
