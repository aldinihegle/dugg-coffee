@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/menu-hero.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-blue-400">Menu</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">Our Menu</span>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">MENUS</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
                <h2 class="text-3xl font-bold mt-2">All <span class="text-[#009EF5]">Menus</span></h2>
                <p class="text-gray-600 mt-2">Silahkan ini berbagai menu yang ada di Dugg Coffee yang sudah kami sediakan untuk anda.</p>
            </div>

            <!-- Menu Categories -->
            <div class="flex justify-center mb-12 flex-wrap gap-2">
                <button class="px-6 py-2 rounded-full {{ !$category ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}"
                        onclick="window.location.href='{{ route('menu') }}'">
                    Beverages
                </button>
                @foreach(['Seasonal', 'Signature', 'Snack', 'Main Course'] as $cat)
                    <button class="px-6 py-2 rounded-full {{ $category === $cat ? 'bg-blue-600 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}"
                            onclick="window.location.href='{{ route('menu', ['category' => $cat]) }}'">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>

            <!-- Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @forelse($menuItems as $item)
                    <div class="text-center">
                        <a href="{{ route('menu.detail', $item->id) }}" class="block">
                            <div class="relative mb-4">
                                @if($item->image)
                                    <img src="{{ asset($item->image) }}" 
                                         alt="{{ $item->name }}" 
                                         class="w-full h-64 object-cover rounded-lg"
                                    />
                                @else
                                    <img src="{{ asset('images/menu/default.jpg') }}" 
                                         alt="{{ $item->name }}" 
                                         class="w-full h-64 object-cover rounded-lg"
                                    />
                                @endif
                            </div>
                            <h3 class="text-xl font-semibold mb-2">{{ $item->name }}</h3>
                            @if($item->sub_title)
                                <h4 class="text-lg text-gray-700 mb-3">{{ $item->sub_title }}</h4>
                            @endif
                            <span class="text-blue-600 font-bold">{{ number_format($item->price, 0, ',', '.') }}K</span>
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