@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
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
                    <button class="px-6 py-2 rounded-lg bg-blue-600 text-white">All</button>
                    <button class="px-6 py-2 text-gray-600 hover:text-blue-600">Hot Coffee</button>
                    <button class="px-6 py-2 text-gray-600 hover:text-blue-600">Cold Coffee</button>
                    <button class="px-6 py-2 text-gray-600 hover:text-blue-600">Non-Coffee</button>
                </div>
            </div>

            <!-- Menu Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Menu Item 1 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 1]) }}" class="block">
                        <img src="{{ asset('images/coffee-beans.jpg') }}" alt="Kopi Tubruk" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Kopi Tubruk</h3>
                            <p class="text-gray-600 mb-4">Traditional Indonesian coffee made by boiling coarse coffee grounds with solid sugar.</p>
                            <div class="text-blue-600 font-medium">Rp. 25,000</div>
                        </div>
                    </a>
                </div>

                <!-- Menu Item 2 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 2]) }}" class="block">
                        <img src="{{ asset('images/coffee-latte.jpg') }}" alt="Cafe Latte" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Cafe Latte</h3>
                            <p class="text-gray-600 mb-4">Espresso with steamed milk and a small layer of milk foam on top.</p>
                            <div class="text-blue-600 font-medium">Rp. 30,000</div>
                        </div>
                    </a>
                </div>

                <!-- Menu Item 3 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 3]) }}" class="block">
                        <img src="{{ asset('images/cappuccino.jpg') }}" alt="Cappuccino" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Cappuccino</h3>
                            <p class="text-gray-600 mb-4">Equal parts espresso, steamed milk, and milk foam, topped with cocoa powder.</p>
                            <div class="text-blue-600 font-medium">Rp. 28,000</div>
                        </div>
                    </a>
                </div>

                <!-- Menu Item 4 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 4]) }}" class="block">
                        <img src="{{ asset('images/ice-coffee.jpg') }}" alt="Es Kopi Susu" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Es Kopi Susu</h3>
                            <p class="text-gray-600 mb-4">Indonesian iced milk coffee with palm sugar syrup.</p>
                            <div class="text-blue-600 font-medium">Rp. 27,000</div>
                        </div>
                    </a>
                </div>

                <!-- Menu Item 5 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 5]) }}" class="block">
                        <img src="{{ asset('images/americano.jpg') }}" alt="Americano" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Americano</h3>
                            <p class="text-gray-600 mb-4">Espresso diluted with hot water, similar strength to regular coffee.</p>
                            <div class="text-blue-600 font-medium">Rp. 25,000</div>
                        </div>
                    </a>
                </div>

                <!-- Menu Item 6 -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <a href="{{ route('menu.detail', ['id' => 6]) }}" class="block">
                        <img src="{{ asset('images/mocha.jpg') }}" alt="Cafe Mocha" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Cafe Mocha</h3>
                            <p class="text-gray-600 mb-4">Espresso with steamed milk and chocolate syrup, topped with whipped cream.</p>
                            <div class="text-blue-600 font-medium">Rp. 32,000</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection 