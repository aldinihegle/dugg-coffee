@extends('layouts.app')

@section('content')
        <div class="relative container mx-auto px-4 h-full flex flex-col items-left">
            <div class="text-gray-600 text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span>
                <a href="{{ route('menu') }}" class="hover:text-blue-400 transition-colors">Menu</a>
                <span class="mx-2">/</span>
                <span class="text-blue-400">{{ $menu->name }}</span>
            </div>
        </div>
    <!-- Menu Detail Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            @if($menu->image)
                                <img src="{{ asset($menu->image) }}" 
                                    alt="{{ $menu->name }}" 
                                    class="w-full h-full object-cover"
                                />
                            @else
                                <img src="{{ asset('images/menu/default.jpg') }}" 
                                    alt="{{ $menu->name }}" 
                                    class="w-full h-full object-cover"
                                />
                            @endif
                        </div>
                        <div class="md:w-1/2 p-8">
                            <h2 class="text-3xl font-bold mb-4">{{ $menu->name }}</h2>
                            <p class="text-gray-600 mb-4">{{ $menu->description }}</p>
                            @if($menu->sub_description)
                                <p class="text-gray-500 mb-6">{{ $menu->sub_description }}</p>
                            @endif
                            <div class="text-2xl font-bold text-blue-600 mb-6">
                                Rp. {{ number_format($menu->price, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="space-y-8 max-w-4xl mx-auto">
                @php
                    $recentBlogs = App\Models\Blog::where('is_published', true)
                        ->latest()
                        ->take(2)
                        ->get();
                @endphp

                @foreach($recentBlogs->reverse() as $blog)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="md:flex">
                            @if(!$loop->first)
                            <div class="md:w-1/2">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <img src="{{ asset('images/blog-default.jpg') }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @endif
                            </div>
                            <div class="md:w-1/2 p-6">
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold mb-3 text-gray-900">{{ $blog->title }}</h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">{{ strip_tags($blog->content) }}</p>
                                </div>
                            </div>
                            @else
                            <div class="md:w-1/2 p-6">
                                <div class="mb-6">
                                    <h3 class="text-xl font-bold mb-3 text-gray-900">{{ $blog->title }}</h3>
                                    <p class="text-gray-600 mb-4 line-clamp-3">{{ strip_tags($blog->content) }}</p>
                                </div>
                            </div>
                            <div class="md:w-1/2">
                                @if($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <img src="{{ asset('images/blog-default.jpg') }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other Menu Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-xl font-bold text-black mb-8">Other <span class="text-blue-400">Menu </span><span class="text-black">></span></h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $otherMenus = App\Models\Menu::where('id', '!=', $menu->id)
                        ->inRandomOrder()
                        ->take(3)
                        ->get();
                @endphp

                @foreach($otherMenus as $otherMenu)
                    <a href="{{ route('menu.detail', $otherMenu->id) }}" class="block">
                        <div class="bg-white rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300">
                            <div class="relative">
                                <div class="absolute top-4 left-4 bg-white px-3 py-1 rounded-full text-blue-400 font-bold">
                                    {{ number_format($otherMenu->price/1000, 0) }}K
                                </div>
                                @if($otherMenu->image)
                                    <img src="{{ asset($otherMenu->image) }}" 
                                        alt="{{ $otherMenu->name }}" 
                                        class="w-full h-64 object-cover"
                                    />
                                @else
                                    <img src="{{ asset('images/menu/default.jpg') }}" 
                                        alt="{{ $otherMenu->name }}" 
                                        class="w-full h-64 object-cover"
                                    />
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold mb-2">{{ $otherMenu->name }}</h3>
                                @if($otherMenu->sub_title)
                                    <p class="text-gray-600 text-sm leading-relaxed">{{ $otherMenu->sub_title }}</p>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection 