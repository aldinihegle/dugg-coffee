@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('images/hero.png') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.3);"></div>
        <div class="relative container mx-auto px-4 h-full flex items-center justify-center">
            <div class="text-center text-light max-w-2xl">
                <h1 class="text-2xl md:text-3xl font-semibold mb-4 text-[#FEE8AE]">MADE WITH LOVE IN BANDUNG</h1>
                <h2 class="text-5xl md:text-6xl font-normal mb-8 text-white">FRESHLY ROASTED,</h2>
                <h2 class="text-5xl md:text-6xl font-normal mb-8 text-white">HONESTLY CRAFTED</h2>
                <a href="/menu" class="inline-block px-8 py-4 bg-[#009EF5] hover:bg-blue-600 rounded-lg text-lg font-medium transition-colors text-white">
                    View Our Menu
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Produk Berkualitas -->
                <div class="flex gap-3">
                    <x-image 
                        src="{{ asset('images/icons/product.png') }}"
                        alt="Product Icon"
                        width="24"
                        height="24"
                        class="flex-shrink-0 mt-0.5"
                    />
                    <div>
                        <h3 class="text-xl font-bold mb-2">
                            <span class="text-gray-800">Produk </span>
                            <span class="text-[#009EF5]">Berkualitas</span>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Kami Hanya Pakai Bahan Berkualitas,<br>
                            Tinggi No Gimmick, Just Great Coffee.
                        </p>
                </div>
                </div>

                <!-- Rasa Khas -->
                <div class="flex gap-3">
                    <x-image 
                        src="{{ asset('images/icons/product.png') }}"
                        alt="Product Icon"
                        width="24"
                        height="24"
                        class="flex-shrink-0 mt-0.5"
                    />
                    <div>
                        <h3 class="text-xl font-bold mb-2">
                            <span class="text-gray-800">Rasa </span>
                            <span class="text-[#009EF5]">Khas</span>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Nikmati Karakter Rasa Yang Otentik,<br>
                            Tanpa Kompromi.
                        </p>
                    </div>
                </div>

                <!-- Menu Bervariasi -->
                <div class="flex gap-3">
                    <x-image 
                        src="{{ asset('images/icons/product.png') }}"
                        alt="Product Icon"
                        width="24"
                        height="24"
                        class="flex-shrink-0 mt-0.5"
                    />
                    <div>
                        <h3 class="text-xl font-bold mb-2">
                            <span class="text-gray-800">Menu </span>
                            <span class="text-[#009EF5]">Bervariasi</span>
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Kopi Dingin Atau Panas, Manis Atau<br>
                            Strong — Kamu Pilih, Kami Racik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-lg overflow-hidden">
                    <x-image 
                        src="{{ asset('images/out_story.png') }}"
                        alt="Coffee Beans"
                        width="580"
                        height="430"
                        rounded="true"
                    />
                </div>
                <div>
                    <h2 class="text-5xl font-bold mb-3">Our <span class="text-[#009EF5]">Story</span></h2>
                    <p class="text-gray-600 mb-3">
                    Di Dugg Coffee, kami percaya kopi bukan sekadar minuman — tapi pengalaman. Setiap gelas diracik dari biji pilihan dan diseduh dengan penuh perhatian, agar menghadirkan rasa yang berkarakter dan konsisten. Kami memegang filosofi: kopi yang baik dimulai dari kualitas dan rasa yang jujur. Dari aroma pertama hingga tegukan terakhir, kamu akan merasakan bedanya.
                    </p>
                    </p>
                    <a href="#" class="mt-8 inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        Know us better
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- Menu Section -->
<section class="relative py-16 bg-[#2E2E2E]">
    <div class="container mx-auto px-4 relative z-10">
        <div class="mb-4">
            <div class="flex items-center mb-1">
                <i class="fas fa-book-reader text-blue text-sm mr-2"></i>
                <span class="text-blue text-sm  tracking-widest font-bold">MENU</span>
            </div>
            <div class="h-[1px] w-[120px] bg-blue"></div>
        </div>
        <div class="flex justify-between items-center mb-2">
            <h2 class="text-4xl font-bold text-white">Our <span class="text-blue">Menu</span></h2>
            <a href="/menu" class="bg-blue text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors">See more</a>
        </div>

        <p class="text-white/80 max-w-2xl mb-6">Varian menu dengan kekuatan bahan-bahan pilihan yang dapat meningkatkan pengalaman ngopi harianmu</p>

        <div class="flex gap-8">
            <!-- Left Side: 2x2 Grid -->
            <div class="grid grid-cols-2 gap-6 flex-[2]">
                <!-- Menu Item 1 -->
                <a href="/menu" class="bg-white p-4 rounded-lg hover:-translate-y-1 transition-transform group shadow-lg block">
                    <div class="relative mb-3">
                        <img src="{{ asset('images/menu/baby-on-black.png') }}" alt="Baby on Black" class="w-full h-40 object-cover rounded-lg">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-semibold mb-1">Baby on Black</h3>
                            <p class="text-gray-600 text-sm leading-snug">Chocolate roasted dengan segelas kopi hitam yang pekat</p>
                        </div>
                        <span class="text-blue font-bold text-lg">27K</span>
                    </div>
                </a>

                <!-- Menu Item 2 -->
                <a href="/menu" class="bg-white p-4 rounded-lg hover:-translate-y-1 transition-transform group shadow-lg block">
                    <div class="relative mb-3">
                        <img src="{{ asset('images/menu/es-kopi-susu.png') }}" alt="Es Kopi Susu" class="w-full h-40 object-cover rounded-lg">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-semibold mb-1">Es Kopi Susu</h3>
                            <p class="text-gray-600 text-sm leading-snug">Kopi susu klasik dengan es batu, segar dan nikmat</p>
                        </div>
                        <span class="text-blue font-bold text-lg">23K</span>
                    </div>
                </a>

                <!-- Menu Item 3 -->
                <a href="/menu" class="bg-white p-4 rounded-lg hover:-translate-y-1 transition-transform group shadow-lg block">
                    <div class="relative mb-3">
                        <img src="{{ asset('images/menu/hot-latte.png') }}" alt="Hot Latte" class="w-full h-40 object-cover rounded-lg">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-semibold mb-1">Hot Latte</h3>
                            <p class="text-gray-600 text-sm leading-snug">Espresso dan susu panas dengan busa lembut</p>
                        </div>
                        <span class="text-blue font-bold text-lg">25K</span>
                    </div>
                </a>

                <!-- Menu Item 4 -->
                <a href="/menu" class="bg-white p-4 rounded-lg hover:-translate-y-1 transition-transform group shadow-lg block">
                    <div class="relative mb-3">
                        <img src="{{ asset('images/menu/chocolate.png') }}" alt="Chocolate" class="w-full h-40 object-cover rounded-lg">
                    </div>
                    <div class="flex justify-between items-start">
                        <div>
                            <h3 class="text-gray-900 font-semibold mb-1">Chocolate</h3>
                            <p class="text-gray-600 text-sm leading-snug">Coklat panas dengan sentuhan manis dan lembut</p>
                        </div>
                        <span class="text-blue font-bold text-lg">20K</span>
                    </div>
                </a>
            </div>

            <!-- Right Side: Featured Item -->
            <a href="/menu" class="flex-1 block">
                <div class="bg-white rounded-lg h-full relative overflow-hidden group shadow-lg">
                    <img src="{{ asset('images/menu/matcha-feature.png') }}" alt="Matcha" class="w-full h-full object-cover transition-transform group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 right-6">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-sm font-medium text-white bg-blue/20 px-3 py-1 rounded-full">Best Seller</span>
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-2">Matcha</h3>
                        <p class="text-gray-200 text-sm mb-3">Green tea dengan tekstur yang lembut</p>
                        <span class="text-blue font-semibold text-xl">30K</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

    <!-- Testimonials Section -->

    <section class="py-16 bg-cream-100 max-w-5xl mx-auto relative"> <!-- Added relative -->
    <div class="container mx-auto px-4 relative z-10">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">REVIEWS</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">
                    Our <span class="text-[#009EF5]">Customer</span>
                </h2>
                <div class="flex justify-center items-center mb-4">
                    <span class="text-2xl font-bold">{{ number_format($averageRating, 1) }}</span>
                    <div class="flex text-yellow-400 ml-2">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Success Alert -->
            @if(session('success'))
                <div id="successAlert" class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-lg z-50">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span>{{ session('success') }}</span>
                    </div>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('successAlert').style.display = 'none';
                    }, 5000);
                </script>
            @endif

            <!-- Error Alert -->
            @if(session('error'))
                <div id="errorAlert" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg shadow-lg z-50">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('errorAlert').style.display = 'none';
                    }, 5000);
                </script>
            @endif

            <!-- Customer Reviews with Navigation Buttons -->
            <div class="relative overflow-hidden w-full">
                <div class="reviews-container" id="reviewsContainer">
                    <div class="flex transition-transform duration-300">
                        @forelse($reviews as $review)
                            <div class="flex-shrink-0 w-full md:w-1/3 px-4">
                                <div class="bg-white p-6 rounded-lg shadow-lg h-[200px] flex flex-col justify-between items-center">
                                    <!-- Review Content -->
                                    <div>
                                        <h4 class="font-semibold text-lg mb-2">{{ $review->name }}</h4>
                                        <div class="flex text-yellow-400 mb-3 items-center justify-center">
                                            @for($i = 0; $i < 5; $i++)
                                                @if($i < $review->rating)
                                                    <i class="fas fa-star"></i>
                                                @else
                                                    <i class="far fa-star"></i>
                                                @endif
                                            @endfor
                                        </div>
                                        <p class="text-gray-600 line-clamp-3">{{ $review->comment }}</p>
                                    </div>
                                    
                                    <!-- Review Date -->
                                    <div class="text-sm text-gray-400 mt-4">
                                        {{ $review->created_at->format('d/m/Y') }}
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="flex-shrink-0 w-full px-4">
                                <div class="bg-white p-6 rounded-lg shadow-lg text-center">
                                    <p class="text-gray-500">No reviews available yet.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <button id="prevButton" 
                        class="absolute left-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all"
                        disabled>
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <button id="nextButton"
                        class="absolute right-0 top-1/2 -translate-y-1/2 bg-white/80 hover:bg-white text-gray-800 p-2 rounded-full shadow-lg transition-all">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Review Button -->
        <div class="text-center mt-8">
            <button onclick="openReviewModal()" class="border border-[#009EF5] text-[#009EF5] font-bold py-2 px-8 rounded-full transition-colors hover:bg-[#009EF5] hover:text-white tracking-widest text-base" style="letter-spacing: 2px;">
            MAKE A REVIEW
            </button>
        </div>
        </div>

    <!-- Review Modal - Modified for better stacking -->
    <div id="reviewModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-[9999]" onclick="closeReviewModal()">
        <div class="bg-white rounded-lg p-8 max-w-md w-full mx-4 relative" onclick="event.stopPropagation();">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">Make A Review</h2>
                <button type="button" onclick="closeReviewModal()" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <form method="POST" action="{{ route('reviews.store') }}" id="reviewForm">
                @csrf
                <div class="space-y-6">
                    <div>
                        <label class="block text-gray-700 text-lg mb-2" for="name">Name</label>
                        <input type="text" 
                               name="name" 
                               id="name" 
                               required
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>

                    <div>
                        <label class="block text-gray-700 text-lg mb-2">Rating</label>
                        <div class="flex gap-2">
                            @for($i = 1; $i <= 5; $i++)
                                <button type="button" 
                                        class="text-2xl text-gray-300 hover:text-yellow-400 cursor-pointer star-rating"
                                        onclick="setRating({{ $i }})">★</button>
                            @endfor
                        </div>
                        <input type="hidden" name="rating" id="ratingInput" required>
                    </div>

                    <div>
                        <label class="block text-gray-700 text-lg mb-2" for="comment">Review</label>
                        <textarea name="comment" 
                                  id="comment" 
                                  rows="4" 
                                  required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500"></textarea>
                    </div>

                    <button type="submit" 
                            class="w-full bg-[#009EF5] hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition-colors">
                        Submit Review
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get required elements
    const container = document.querySelector('#reviewsContainer .flex');
    const slides = container.children;
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');
    
    // Slider variables
    let currentIndex = 0;
    const slideWidth = slides[0].offsetWidth;
    const totalSlides = slides.length;
    const slidesPerView = window.innerWidth >= 768 ? 3 : 1;
    const maxIndex = Math.max(0, totalSlides - slidesPerView);

    // Function to update button states
    function updateButtonState() {
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= maxIndex;
        
        // Update button appearance
        prevButton.style.opacity = currentIndex === 0 ? '0.5' : '1';
        nextButton.style.opacity = currentIndex >= maxIndex ? '0.5' : '1';
    }

    // Function to slide reviews
    function slideReviews(direction) {
        if (direction === 'prev' && currentIndex > 0) {
            currentIndex--;
        } else if (direction === 'next' && currentIndex < maxIndex) {
            currentIndex++;
        }

        // Transform container
        container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        updateButtonState();
    }

    // Add event listeners for buttons
    prevButton.addEventListener('click', () => slideReviews('prev'));
    nextButton.addEventListener('click', () => slideReviews('next'));

    // Handle window resize
    window.addEventListener('resize', () => {
        const newSlidesPerView = window.innerWidth >= 768 ? 3 : 1;
        const newMaxIndex = Math.max(0, totalSlides - newSlidesPerView);
        
        // Reset position if needed
        if (currentIndex > newMaxIndex) {
            currentIndex = newMaxIndex;
            container.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        }
        
        updateButtonState();
    });

    // Initialize button states
    updateButtonState();
});

// Modal open/close functions
function openReviewModal() {
    document.getElementById('reviewModal').classList.remove('hidden');
    document.getElementById('reviewModal').classList.add('flex');
}
function closeReviewModal() {
    document.getElementById('reviewModal').classList.add('hidden');
    document.getElementById('reviewModal').classList.remove('flex');
}

// Rating functionality
function setRating(rating) {
    const stars = document.querySelectorAll('.star-rating');
    const ratingInput = document.getElementById('ratingInput');
    const ratingError = document.getElementById('ratingError');
    
    // Set rating value
    ratingInput.value = rating;
    
    // Update stars appearance
    stars.forEach((star, index) => {
        if (index < rating) {
            star.classList.remove('text-gray-300');
            star.classList.add('text-yellow-400');
        } else {
            star.classList.remove('text-yellow-400');
            star.classList.add('text-gray-300');
        }
    });
    
    // Hide error message if rating is selected
    ratingError.classList.add('hidden');
}

// Form validation
document.getElementById('reviewForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const ratingInput = document.getElementById('ratingInput');
    const ratingError = document.getElementById('ratingError');
    
    // Validasi rating
    if (!ratingInput.value) {
        ratingError.classList.remove('hidden');
        return;
    }
    
    // Submit form jika validasi berhasil
    this.submit();
});

// Reset form when modal is closed
function closeReviewModal() {
    const modal = document.getElementById('reviewModal');
    const form = document.getElementById('reviewForm');
    const stars = document.querySelectorAll('.star-rating');
    
    modal.classList.remove('flex');
    modal.classList.add('hidden');
    
    // Reset form
    form.reset();
    document.getElementById('ratingInput').value = '';
    
    // Reset stars
    stars.forEach(star => {
        star.classList.remove('text-yellow-400');
        star.classList.add('text-gray-300');
    });
    
    // Hide error message
    document.getElementById('ratingError').classList.add('hidden');
}
</script>
@endpush
    </section>

    <!-- Recent News Section -->
    <section class="py-16 bg-blue-50">
    <div class="container mx-auto px-4 relative z-10">
        <div class="text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">BLOGS</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-2">Recent News</h2>
                <h3 class="text-2xl font-bold mb-4">Latest <span class="text-[#009EF5]">Updates</span></h3>
                <p class="text-gray-600">Stay updated with our latest news and coffee stories</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @php
                    $recentBlogs = App\Models\Blog::where('is_published', true)
                        ->latest()
                        ->take(3)
                        ->get();
                @endphp

                @forelse($recentBlogs as $blog)
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg transform transition duration-300 hover:scale-105">
                        <a href="{{ route('blog.show', $blog) }}" class="block">
                            <div class="relative h-48">
                                @if($blog->image)
                                    <img 
                                        src="{{ asset('storage/' . $blog->image) }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @else
                                    <img 
                                        src="{{ asset('images/blog-default.jpg') }}"
                                        alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover"
                                    />
                                @endif
                                <div class="absolute bottom-0 left-0 bg-[#009EF5] text-white px-4 py-1 text-sm">
                                    {{ $blog->created_at->format('M d, Y') }}
                                </div>
                            </div>
                        <div class="p-6">
                                <h3 class="text-xl font-bold mb-3 text-gray-900 hover:text-[#009EF5] transition-colors">{{ $blog->title }}</h3>
                                <p class="text-gray-600 mb-4 line-clamp-2">{{ strip_tags($blog->content) }}</p>
                                <span class="text-[#009EF5] hover:text-blue-700 transition-colors">Read More</span>
                            </div>
                        </a>
                        </div>
                @empty
                    <div class="col-span-3 text-center py-12">
                        <p class="text-gray-500">No blog posts available at the moment.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-8">
                <a href="{{ route('blog') }}" class="inline-block px-6 py-3 bg-[#009EF5] hover:bg-blue-600 text-white rounded-lg transition-colors">
                    View All Posts
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20">
    <div class="container mx-auto px-4 relative z-10">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">GALLERY</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
    <div class="container mx-auto px-4">
        <div class="text-center mb-4">
                <h2 class="text-4xl font-bold">Our <span class="text-blue">Place</span></h2>
        </div>
        
            <!-- Swiper Gallery -->
            <div class="gallery-swiper">
                <div class="swiper-wrapper">
                    <!-- Original slides -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-1.png') }}"
                             alt="Coffee Shop Interior View 1"
                             class="w-full object-cover rounded-xl">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-2.png') }}"
                             alt="Coffee Shop Interior View 2"
                             class="w-full object-cover rounded-xl">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-3.png') }}"
                             alt="Coffee Shop Interior View 3"
                             class="w-full object-cover rounded-xl">
                    </div>

                    <!-- Duplicate slides for smooth loop -->
                    <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-1.png') }}"
                             alt="Coffee Shop Interior View 1"
                             class="w-full object-cover rounded-xl">
                    </div>
                    
                    <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-2.png') }}"
                             alt="Coffee Shop Interior View 2"
                             class="w-full object-cover rounded-xl">
                    </div>
                    
                        <div class="swiper-slide">
                        <img src="{{ asset('images/gallery/gallery-3.png') }}"
                             alt="Coffee Shop Interior View 3"
                             class="w-full object-cover rounded-xl">
                    </div>
                </div>
                
                <!-- Navigation Buttons -->
                <div class="gallery-prev">
                    <i class="fas fa-chevron-left"></i>
                        </div>
                <div class="gallery-next">
                    <i class="fas fa-chevron-right"></i>
                </div>
        </div>
    </div>
</section>
 <!-- Location Section -->
    <section class="relative h-[300px] bg-cover bg-center" style="background-image: url('{{ asset('images/FeedsDuggDetails1.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center text-center">
            <p class="text-white text-3xl mb-8">Jl. Gegerkalong Girang No.66, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</p>
            <a href="https://maps.google.com" target="_blank" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                Locate Us On Maps
            </a>
            <h2 class="text-sm font-medium text-white mb-6">We're Located On Gegerkalong Girang Street, In Sukasari, Bandung.</h2>
        </div>
    </section>
    <!-- Instagram Feed Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Follow us on Instagram</h2>
            <div class="instagram-swiper">
                <div class="swiper-wrapper">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="swiper-slide">
                            <a href="https://www.instagram.com/duggcoffee.66/" class="block relative group">
                                <x-image 
                                    src="{{ asset('images/instagram/instagram-' . $i . '.png') }}"
                                    alt="Instagram"
                                    width="300"
                                    height="300"
                                    class="group-hover:scale-105 transition-transform duration-300"
                                />
                                <div class="absolute inset-0 bg-dark/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                    <i class="fab fa-instagram text-white text-3xl"></i>
                                </div>
                            </a>
                        </div>
                    @endfor

                    <!-- Duplicate slides for smooth loop -->
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="swiper-slide">
                            <a href="https://www.instagram.com/duggcoffee.66/" class="block relative group">
                                <x-image 
                                    src="{{ asset('images/instagram/instagram-' . $i . '.png') }}"
                                    alt="Instagram"
                                    width="300"
                                    height="300"
                                    class="group-hover:scale-105 transition-transform duration-300"
                                />
                                <div class="absolute inset-0 bg-dark/50 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                    <i class="fab fa-instagram text-white text-3xl"></i>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="text-center mt-8">
                <a href="https://www.instagram.com/duggcoffee.66/" target="_blank" class="inline-flex items-center text-gray-600 hover:text-blue-600 transition-colors">
                    <span class="mr-2">See more on Instagram</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>
@endsection