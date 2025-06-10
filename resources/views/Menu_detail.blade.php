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
            <div class="bg-[#FFF8E6]">
                <div class="md:flex md:gap-2"> <!-- gap kecil -->
                    <div class="md:w-1/2 p-0"> <!-- hilangkan padding -->
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
                    <div class="md:w-1/2 p-2"> <!-- padding kecil -->
                        <h2 class="text-3xl font-bold mb-2">{{ $menu->name }}</h2>
                        <span class="text-2xl text-blue-600 font-semibold mb-2">{{ round($menu->price/1000) }}K</span>
                        <p class="text-[#4B3A2F] mb-2">{{ $menu->description }}</p>
                        @if($menu->sub_description)
                            <p class="text-[#757F95] font-medium italic mb-2">{{ $menu->sub_description }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Other Menu Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold text-black mb-8">Other <span class="text-[#009EF5]">Menu </span><span class="text-black"><i class="fas fa-angle-right font-semibold"></i></span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @php
                $otherMenus = App\Models\Menu::where('id', '!=', $menu->id)
                    ->inRandomOrder()
                    ->take(3)
                    ->get();
            @endphp

            @foreach($otherMenus as $otherMenu)
            <a href="{{ route('menu.detail', $otherMenu->id) }}" class="block">
    <div class="bg-[#FFF8E6] hover:shadow-xl transition-shadow duration-300 flex flex-col rounded-lg overflow-hidden">
        <!-- Judul dan Harga di atas gambar -->
        <div class="p-6 pb-2 flex flex-col items-center">
            <h3 class="text-2xl font-medium mb-1">{{ $otherMenu->name }}</h3>
            <span class="text-xl text-[#009EF5] font-semibold mb-2">{{ round($otherMenu->price/1000) }}K</span>
        </div>
        <div>
            @if($otherMenu->image)
                <img src="{{ asset($otherMenu->image) }}" 
                    alt="{{ $otherMenu->name }}" 
                    class="w-full h-80 object-cover"
                />
            @else
                <img src="{{ asset('images/menu/default.jpg') }}" 
                    alt="{{ $otherMenu->name }}" 
                    class="w-full h-80 object-cover"
                />
            @endif
        </div>
        <div class="p-6 flex-1 flex flex-col justify-center">
            <p class="text-[#4B3A2F] mb-2">{{ $otherMenu->description }}</p>
            @if($otherMenu->sub_description)
                <p class="text-[#757F95] font-medium italic mb-2">{{ $otherMenu->sub_description }}</p>
            @endif
        </div>
    </div>
</a>
            @endforeach
        </div>
    </div>
</section>
@endsection 