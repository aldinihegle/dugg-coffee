<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dugg Coffee') }}</title>

    @vite('resources/js/app.js')

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>
<body class="font-primary">
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo/LOGO2.png') }}" alt="Dugg Coffee" class="h-12">
                </a>

                <!-- Navigation Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-dark hover:text-blue-600 transition-colors">Home</a>
                    <a href="{{ route('menu') }}" class="text-dark hover:text-blue-600 transition-colors">Menu</a>
                    <a href="{{ route('about') }}" class="text-dark hover:text-blue-600 transition-colors">About Us</a>
                    <a href="{{ route('blog') }}" class="text-dark hover:text-blue-600 transition-colors">Blog</a>
                    <a href="{{ route('faq') }}" class="text-dark hover:text-blue-600 transition-colors">FAQ</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button type="button" class="text-dark hover:text-blue-600" id="mobile-menu-button">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="{{ route('home') }}" class="block px-3 py-2 text-dark hover:text-blue-600">Home</a>
                    <a href="{{ route('menu') }}" class="block px-3 py-2 text-dark hover:text-blue-600">Menu</a>
                    <a href="{{ route('about') }}" class="block px-3 py-2 text-dark hover:text-blue-600">About Us</a>
                    <a href="{{ route('blog') }}" class="block px-3 py-2 text-dark hover:text-blue-600">Blog</a>
                    <a href="{{ route('faq') }}" class="block px-3 py-2 text-dark hover:text-blue-600">FAQ</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and Social Links -->
                <div class="space-y-4">
                    <img src="{{ asset('images/logo/logofooter.png') }}" alt="Dugg Coffee" class="h-11">
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-blue-400"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-blue-400"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-blue-400"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('menu') }}" class="hover:text-blue-400">Menu</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-400">About Us</a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-blue-400">Blog</a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-blue-400">FAQ</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Contact</h3>
                    <ul class="space-y-2">
                        <li>📍 Bandung, Indonesia</li>
                        <li>📞 +62 123 456 789</li>
                        <li>✉️ hello@duggcoffee.com</li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <form class="space-y-4">
                        <input type="email" placeholder="Your email address" 
                               class="w-full px-4 py-2 rounded bg-gray-800 border border-gray-700 focus:outline-none focus:border-blue-500">
                        <button type="submit" 
                                class="w-full px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded transition-colors">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <!-- Copyright -->
            <div class="mt-8 pt-8 border-t border-gray-800 text-center">
                <p>&copy; {{ date('Y') }} Dugg Coffee. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Script -->
    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Initialize Gallery Swiper
        document.addEventListener('DOMContentLoaded', function() {
            const gallerySwiper = new Swiper('.gallery-swiper', {
                slidesPerView: 1.5,
                centeredSlides: true,
                spaceBetween: 30,
                loop: true,
                speed: 500,
                navigation: {
                    nextEl: '.gallery-next',
                    prevEl: '.gallery-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 1.8,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 2.2,
                        spaceBetween: 50,
                    }
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html> 