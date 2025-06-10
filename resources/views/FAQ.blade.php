@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
        <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/faq-hero.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-semibold text-white mb-4">FAQ</h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                 <span class="text-[#FEE8AE]">FAQ</span>
            </div>
        </div>
    </section>
    
<section class="py-16">
        <div class="container mx-auto px-4">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2 undelined"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">FAQS</span>
            </div>
                <h2 class="text-3xl font-bold mb-2">Popular <span class="text-[#009EF5]">Questions</span></h2>
                <p class="text-gray-600">Silahkan ini berbagai pertanyaan yang sering kali ditanyakan oleh user atau customer Dugg Coffee.</p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-3 max-w-3xl mx-auto">
                <!-- FAQ Item 1 -->
                <div class="border rounded-xl shadow-sm">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="text-lg font-regular ">Apa itu Dugg Coffee?</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-6 py-4 bg-gray-50 border-t">
                        <p class="text-[#202020]">Dugg Coffee adalah sebuah Coffee Shop yang berlokasi di daerah Geger Kalong dan menjual berbagai macam minuman mulai dari coffee dan non-coffee yang sangat sangat enaaak</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border rounded-xl shadow-sm">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="text-lg">Dimana lokasi Dugg Coffee?</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-6 py-4 bg-gray-50 border-t">
                        <p class="text-[#202020]">Dugg Coffee berlokasi di Jl. Gegerkalong Hilir, Kota Bandung.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border rounded-xl shadow-sm">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="text-lg">Bagaimana cara reservasi di Dugg Coffee?</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-6 py-4 bg-gray-50 border-t">
                        <p class="text-[#202020]">Untuk reservasi, Anda dapat menghubungi kami melalui WhatsApp atau mengunjungi langsung cafe kami.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border rounded-xl shadow-sm">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="text-lg">Metode pembayaran apa saja yang tersedia?</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-6 py-4 bg-gray-50 border-t">
                        <p class="text-[#202020]">Kami menerima pembayaran tunai, kartu debit/kredit, dan e-wallet (GoPay, OVO, DANA).</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border rounded-xl shadow-sm">
                    <button class="w-full px-6 py-5 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                        <span class="text-lg">Apa resep rahasia crabby patty?</span>
                        <svg class="w-5 h-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="hidden px-6 py-4 bg-gray-50 border-t">
                        <p class="text-[#202020]">Maaf, ini adalah rahasia perusahaan yang tidak bisa kami bagikan 😊</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="text-center mt-12">
                <p class="text-gray-600 mb-4">Do you have any more question? Contact us below</p>
                <a href="#contact" class="inline-flex items-center text-[#009EF5] hover:text-blue-600">
                    CONTACT US 
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.querySelectorAll('.border.rounded-xl button').forEach(button => {
            button.addEventListener('click', () => {
                // Close all other items
                document.querySelectorAll('.border.rounded-xl button').forEach(otherButton => {
                    if (otherButton !== button) {
                        otherButton.nextElementSibling.classList.add('hidden');
                        otherButton.querySelector('svg').classList.remove('rotate-180');
                    }
                });

                // Toggle current item
                const content = button.nextElementSibling;
                content.classList.toggle('hidden');
                button.querySelector('svg').classList.toggle('rotate-180');
            });
        });
    </script>
    @endpush
@endsection