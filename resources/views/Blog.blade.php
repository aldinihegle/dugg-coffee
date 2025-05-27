@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
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
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/blog-1.jpg') }}" alt="Coffee Blog" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">January 15, 2024</div>
                        <h3 class="text-xl font-bold mb-2">The Art of Coffee Brewing</h3>
                        <p class="text-gray-600 mb-4">Discover the secrets behind brewing the perfect cup of coffee, from bean selection to water temperature.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/blog-2.jpg') }}" alt="Coffee Culture" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">January 20, 2024</div>
                        <h3 class="text-xl font-bold mb-2">Coffee Culture in Indonesia</h3>
                        <p class="text-gray-600 mb-4">Explore the rich history and evolving culture of coffee in Indonesia, from traditional to modern brewing methods.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/blog-3.jpg') }}" alt="Coffee Tips" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="text-sm text-gray-500 mb-2">January 25, 2024</div>
                        <h3 class="text-xl font-bold mb-2">5 Tips for Better Coffee at Home</h3>
                        <p class="text-gray-600 mb-4">Learn how to make cafe-quality coffee in your own kitchen with these expert tips and tricks.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
