@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px]">
        <x-image 
            src="{{ asset('images/menu-hero.jpg') }}"
            alt="Menu Hero"
            width="1920"
            height="400"
            class="absolute inset-0 w-full h-full object-cover"
        />
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-blue-400">Menu</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">Menu</span>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <!-- Menu Categories -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-lg border border-gray-200 p-1">
                    <a href="{{ route('menu', ['category' => 'all']) }}" 
                        class="px-6 py-2 rounded-lg {{ !$category || $category === 'all' ? 'bg-blue-600 text-white' : 'text-gray-600 hover:text-blue-600' }}">
                        All
                    </a>
                    @foreach($categories as $cat)
                        <a href="{{ route('menu', ['category' => $cat]) }}" 
                            class="px-6 py-2 {{ $category === $cat ? 'bg-blue-600 text-white rounded-lg' : 'text-gray-600 hover:text-blue-600' }}">
                            {{ $cat }}
                        </a>
                    @endforeach
                </div>
            </div>

            <!-- Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($menuItems as $item)
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <a href="{{ route('menu.detail', ['id' => $item->id]) }}" class="block">
                            <div class="aspect-w-4 aspect-h-3">
                                @if($item->image)
                                    <img src="{{ asset($item->image) }}" 
                                        alt="{{ $item->name }}" 
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <img src="{{ asset('images/menu/default.jpg') }}" 
                                        alt="{{ $item->name }}" 
                                        class="w-full h-full object-cover"
                                    />
                                @endif
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-600 mb-4">{{ $item->description }}</p>
                                <div class="text-blue-600 font-medium">Rp. {{ number_format($item->price, 0, ',', '.') }}</div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500 text-lg">No menu items found in this category.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection 