@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[300px]">
        @if($menu->image)
            <img src="{{ asset($menu->image) }}" 
                alt="{{ $menu->name }}" 
                class="absolute inset-0 w-full h-full object-cover"
            />
        @else
            <img src="{{ asset('images/menu/default.jpg') }}" 
                alt="{{ $menu->name }}" 
                class="absolute inset-0 w-full h-full object-cover"
            />
        @endif
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-4xl font-medium text-white mb-4">{{ $menu->name }}</h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span>
                <a href="{{ route('menu') }}" class="hover:text-blue-400 transition-colors">Menu</a>
                <span class="mx-2">/</span>
                <span class="text-blue-400">{{ $menu->name }}</span>
            </div>
        </div>
    </section>

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
                            <div class="mb-4">
                                <span class="inline-block bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm">
                                    {{ $menu->category }}
                                </span>
                            </div>
                            <h2 class="text-3xl font-bold mb-4">{{ $menu->name }}</h2>
                            <p class="text-gray-600 mb-6">{{ $menu->description }}</p>
                            <div class="text-2xl font-bold text-blue-600 mb-6">
                                Rp. {{ number_format($menu->price, 0, ',', '.') }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Related Items -->
                @if($relatedMenus->count() > 0)
                    <div class="mt-16">
                        <h3 class="text-2xl font-bold mb-8">Related Items</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            @foreach($relatedMenus as $relatedMenu)
                                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                    <a href="{{ route('menu.detail', ['id' => $relatedMenu->id]) }}" class="block">
                                        <div class="aspect-w-4 aspect-h-3">
                                            @if($relatedMenu->image)
                                                <img src="{{ asset($relatedMenu->image) }}" 
                                                    alt="{{ $relatedMenu->name }}" 
                                                    class="w-full h-full object-cover"
                                                />
                                            @else
                                                <img src="{{ asset('images/menu/default.jpg') }}" 
                                                    alt="{{ $relatedMenu->name }}" 
                                                    class="w-full h-full object-cover"
                                                />
                                            @endif
                                        </div>
                                        <div class="p-6">
                                            <h3 class="text-xl font-bold mb-2">{{ $relatedMenu->name }}</h3>
                                            <p class="text-gray-600 mb-4">{{ Str::limit($relatedMenu->description, 100) }}</p>
                                            <div class="text-blue-600 font-medium">
                                                Rp. {{ number_format($relatedMenu->price, 0, ',', '.') }}
                                            </div>
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