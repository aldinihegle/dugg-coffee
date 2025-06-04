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

    <!-- Swiper.js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Debug Script untuk Gallery -->
    <script>
        function debugGallery() {
            console.log('Checking gallery initialization...');
            const galleryElement = document.querySelector('.gallery-swiper');
            if (galleryElement) {
                console.log('Gallery element found');
                console.log('Gallery classes:', galleryElement.className);
                console.log('Number of slides:', galleryElement.querySelectorAll('.swiper-slide').length);
            } else {
                console.log('Gallery element not found');
            }
        }
    </script>
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
                <div class="hidden md:flex items-center space-x-8 font-bold">
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
                <div class="flex flex-col items-center space-y-4">
                    <img src="{{ asset('images/logo/logofooter.png') }}" alt="Dugg Coffee" class="w-[200px] h-[150px]">
                    <div class="flex justify-center space-x-6">
                        <a href="#" class="text-blue-400 hover:text-blue-500 text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-500 text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-500 text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-blue-400 hover:text-blue-500 text-xl"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links Column 1 -->
                <div class="flex flex-col items-center space-y-4">
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('about') }}" class="hover:text-blue-400 flex items-center">
                            About Us
                        </a></li>
                        <li><a href="{{ route('blog') }}" class="hover:text-blue-400 flex items-center">
                            Blog
                        </a></li>
                        <li><a href="{{ route('menu') }}" class="hover:text-blue-400 flex items-center">
                            Menu
                        </a></li>
                        <li><a href="{{ route('faq') }}" class="hover:text-blue-400 flex items-center">
                            Ulasan
                        </a></li>
                    </ul>
                </div>

                <!-- Quick Links Column 2 -->
                <div class="flex flex-col items-left space-y-4">
                    <h3 class="text-lg font-bold mb-11"></h3>
                    <ul class="space-y-3">
                        <li><a href="mailto:hello@duggcoffee.com" class="hover:text-blue-400 flex items-center">
                            Contact Us
                        </a></li>
                        <li><a href="#gallery" class="hover:text-blue-400 flex items-center">
                            Gallery
                        </a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="flex flex-col items-left space-y-4">
                    <h3 class="text-lg font-bold mb-4 ">Contact</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="hover:text-blue-400 flex items-center">
                            <i class="fas fa-phone-square text-blue-400 mr-2 text-lg"></i>
                            +62 123 456 789
                        </a></li>
                        <li><a href="#" class="hover:text-blue-400 flex items-center">
                            <i class="fas fa-map-marker-alt text-blue-400 mr-2 text-lg"></i>
                            Jl. Gegerkalong, Bandung, Jawa Barat
                        </a></li>
                        <li><a href="mailto:hello@duggcoffee.com" class="hover:text-blue-400 flex items-center">
                            <i class="far fa-envelope-open text-blue-400 mr-2 text-lg"></i>
                            hello@duggcoffee.com
                        </a></li>
                    </ul>
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

        // Inisialisasi Gallery Swiper
        document.addEventListener('DOMContentLoaded', function() {
            if (document.querySelector('.gallery-swiper')) {
                const gallerySwiper = new Swiper('.gallery-swiper', {
                    slidesPerView: 3,
                    centeredSlides: true,
                    loop: true,
                    loopedSlides: 6,
                    speed: 800,
                    spaceBetween: 30,
                    allowTouchMove: false,
                    simulateTouch: false,
                    direction: 'horizontal',
                    effect: 'slide',
                    navigation: {
                        nextEl: '.gallery-next',
                        prevEl: '.gallery-prev',
                    }
                });
            }

            // Inisialisasi Instagram Swiper
            if (document.querySelector('.instagram-swiper')) {
                const instagramSwiper = new Swiper('.instagram-swiper', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    loop: true,
                    speed: 3000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false
                    },
                    breakpoints: {
                        320: {
                            slidesPerView: 1,
                        },
                        640: {
                            slidesPerView: 2,
                        },
                        768: {
                            slidesPerView: 3,
                        },
                        1024: {
                            slidesPerView: 4,
                        }
                    }
                });
            }
        });
    </script>

    @stack('scripts')
</body>
</html> 