@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center pt-24" style="background-image: url('{{ asset('images/blog-hero.jpg') }}');">
    <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
    <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
        <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-blue-400">Blog</span></h1>
        <div class="text-white text-lg">
            <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
            <span class="mx-2">/</span> 
            <span class="text-blue-400">Our Blog</span>
        </div>
    </div>
</section>

    <!-- Menu Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">BLOG</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
                <h2 class="text-3xl font-bold mt-2">All <span class="text-[#009EF5]">Blog</span></h2>
                <p class="text-gray-600 mt-2">Silahkan ini berbagai blog yang ada di Dugg Coffee yang sudah kami sediakan untuk anda.</p>
            </div>


            <!-- Featured Blog -->
            @if($blogs->where('is_featured', true)->first())
                @php
                    $featuredBlog = $blogs->where('is_featured', true)->first();
                @endphp
                <div class="mb-16">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden align-right">
                        <div class="md:flex">
                            <div class="md:w-1/2">
                                @if($featuredBlog->image)
                                    <img 
                                        src="{{ asset('storage/' . $featuredBlog->image) }}"
                                        alt="{{ $featuredBlog->title }}"
                                        class="w-full h-[400px] object-cover"
                                    />
                                @else
                                    <img 
                                        src="{{ asset('images/blog-default.jpg') }}"
                                        alt="{{ $featuredBlog->title }}"
                                        class="w-full h-[400px] object-cover"
                                    />
                                @endif
                            </div>
                            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                                <div class="mb-4">
                                </div>
                                <h3 class="text-2xl font-bold mb-4 hover:text-[#009EF5] transition-colors">{{ $featuredBlog->title }}</h3>
                                <p class="text-gray-600 mb-6 line-clamp-3">{{ strip_tags($featuredBlog->content) }}</p>
                                <a href="{{ route('blog.show', $featuredBlog->id) }}" class="inline-block bg-white text-blue px-6 py-2 rounded-full hover:bg-blue-600 transition-colors text-white">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($blogs->where('is_featured', false) as $blog)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                        <a href="{{ route('blog.show', $blog->id) }}" class="block">
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
                <div class="mt-12">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection
