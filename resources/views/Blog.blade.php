@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/FeedsDuggDetails1.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-[#009EF5]">Blog</span></h1>
            <div class="text-white text-lg">
                Home <span class="mx-2">>></span> Blog
            </div>
        </div>
    </section>

    <!-- Blog Posts Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">BLOGS</h2>
                <h3 class="text-2xl font-bold mb-4">All <span class="text-[#009EF5]">News</span></h3>
                <p class="text-gray-600">Dibawah ini beberapa berita yang ada terkait dengan dunia kopi dan update terkait di Dugg Coffee</p>
            </div>

            <!-- Blog Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 9; $i++)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                        <img src="{{ asset('images/hero-bg.png') }}" alt="Coffee News" class="w-full h-23 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Seorang mahasiswa kopi setelah mencicipi Dugg Coffee menjadi kecanduan kopi</h3>
                            <p class="text-gray-600 mb-4">Alhamdulillah, Seorang mahasiswa setelah mencicipi Dugg Coffee menjadi kecanduan kopi dan pada akhirnya menjadi pelanggan tetap di Dugg Coffee.</p>
                            <a href="#" class="inline-block bg-[#009EF5] text-white px-6 py-2 rounded-full hover:bg-blue-600 transition-colors">SEE MORE</a>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-12 gap-2">
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-[#009EF5] text-white">1</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-[#009EF5] hover:text-white transition-colors">2</a>
                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full border border-gray-300 text-gray-600 hover:bg-[#009EF5] hover:text-white transition-colors">3</a>
            </div>
        </div>
    </section>
@endsection
