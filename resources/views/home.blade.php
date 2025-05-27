@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center text-light max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-medium mb-4 text-white">MADE WITH LOVE IN BANDUNG</h1>
                <h2 class="text-3xl md:text-5xl font-normal mb-8 text-white">FRESHLY ROASTED,<br>HONESTLY CRAFTED</h2>
                <a href="/menu" class="inline-block px-8 py-4 bg-[#009EF5] hover:bg-blue-600 rounded-lg text-lg font-semibold transition-colors text-white">
                    Explore Our Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-cream-100">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <img src="{{ asset('images/icons/coffee-machine.png') }}" alt="Best Quality" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-xl mb-2">Best Quality</h3>
                    <p class="text-gray-600">Premium selected coffee beans</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/icons/coffee-machine.png') }}" alt="Best Service" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-xl mb-2">Best Service</h3>
                    <p class="text-gray-600">Dedicated barista service</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/icons/coffee-machine.png') }}" alt="Best Equipment" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-xl mb-2">Best Equipment</h3>
                    <p class="text-gray-600">Modern coffee equipment</p>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/icons/coffee-machine.png') }}" alt="Best Place" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-xl mb-2">Best Place</h3>
                    <p class="text-gray-600">Cozy atmosphere</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-lg overflow-hidden">
                    <img src="{{ asset('images/hero-bg.png') }}" alt="Coffee Beans" class="w-full h-full object-cover">
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-6">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="mr-4">📍</div>
                            <div>
                                <h4 class="font-semibold">Our Location</h4>
                                <p class="text-gray-600">Jl. Example No. 123, Bandung</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="mr-4">📞</div>
                            <div>
                                <h4 class="font-semibold">Get Contact</h4>
                                <p class="text-gray-600">+62 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <button class="mt-8 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        See More
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section class="py-16 bg-dark text-light">
        <div class="container mx-auto px-4">
            <div class="flex items-center gap-2 mb-8">
                <h2 class="text-2xl font-bold text-white">Our Menu</h2>
                <a href="/menu" class="ml-auto text-sm text-blue-400">SEE MORE</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="flex">
                        <div class="w-3/5">
                            <img src="{{ asset('images/menu/hero-bg.png') }}" alt="Coffee" class="w-full h-48 object-cover">
                        </div>
                        <div class="w-2/5 bg-white p-4">
                            <h3 class="font-bold text-dark">Kopi Tubruk</h3>
                            <p class="text-gray-600 text-sm">Kopi yang terbuat dari biji kopi lalu ditubruk</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-cream-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Our Customer</h2>
                <div class="flex justify-center items-center">
                    <span class="text-2xl font-bold">5.0</span>
                    <div class="flex text-yellow-400 ml-2">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <div class="flex items-center mb-4">
                            <img src="{{ asset('images/avatars/avatar-' . $i . '.jpg') }}" alt="Customer" class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold">John Doe</h4>
                                <div class="flex text-yellow-400">
                                    @for ($star = 0; $star < 5; $star++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <p class="text-gray-600">
                            "This is the best coffee shop in town! The atmosphere is cozy and the coffee is amazing."
                        </p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- Recent News Section -->
    <section class="py-16 bg-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Recent News</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('images/news/news-' . $i . '.jpg') }}" alt="News" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <h3 class="font-bold text-xl mb-2">News Title Goes Here</h3>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore.
                            </p>
                            <a href="#" class="text-blue-600 hover:text-blue-700 transition-colors">Read More</a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center mt-8">
                <a href="/blog" class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                    See More
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16 bg-cream-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 mb-4">
                    <i class="fas fa-images text-blue-400 text-xl"></i>
                    <span class="uppercase text-sm tracking-wider">GALLERY</span>
                </div>
                <h2 class="text-3xl font-bold">Our <span class="text-blue-400">Place</span></h2>
            </div>
            
            <div class="relative px-12">
                <!-- Carousel container -->
                <div class="swiper gallery-swiper">
                    <div class="swiper-wrapper">
                        <!-- Dummy slides -->
                        <div class="swiper-slide">
                            <div class="bg-red-500 rounded-xl h-[400px] overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center text-white text-2xl">
                                    Gallery Image 1
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-blue-500 rounded-xl h-[400px] overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center text-white text-2xl">
                                    Gallery Image 2
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-gray-500 rounded-xl h-[400px] overflow-hidden">
                                <div class="w-full h-full flex items-center justify-center text-white text-2xl">
                                    Gallery Image 3
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Navigation buttons with larger, more visible design -->
                <button class="absolute left-0 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white hover:bg-blue-400 hover:text-white rounded-full shadow-lg transition-all z-10 gallery-prev border-2 border-blue-400">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button class="absolute right-0 top-1/2 -translate-y-1/2 w-12 h-12 flex items-center justify-center bg-white hover:bg-blue-400 hover:text-white rounded-full shadow-lg transition-all z-10 gallery-next border-2 border-blue-400">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Instagram Feed Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Follow us on Instagram</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for ($i = 1; $i <= 4; $i++)
                    <a href="#" class="block relative group">
                        <img src="{{ asset('images/instagram/instagram-' . $i . '.jpg') }}" alt="Instagram" class="w-full aspect-square object-cover">
                        <div class="absolute inset-0 bg-dark/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                            <i class="fab fa-instagram text-white text-3xl"></i>
                        </div>
                    </a>
                @endfor
            </div>
            <div class="text-center mt-8">
                <a href="https://instagram.com/duggcoffee" target="_blank" class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors">
                    <span class="mr-2">See more on Instagram</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection 