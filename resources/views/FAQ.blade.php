@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center pt-24" style="background-image: url('{{ asset('images/faq-hero.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">Our <span class="text-blue-400">FAQ</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">Our FAQ</span>
            </div>
        </div>
    </section>

<!-- Menu Section -->
<section class="py-16">
        <div class="container mx-auto px-4">
        <div class="mb-4 text-center">
            <div class="flex items-center mb-1 justify-center space-x-2"> 
                <i class="fas fa-book-reader text-black text-sm"></i>
                <span class="text-black text-sm tracking-widest font-bold">FAQS</span>
            </div>
            <div class="h-[1px] w-[120px] bg-black mx-auto mt-2">
        </div>
                <h2 class="text-3xl font-bold mt-2">Popular <span class="text-[#009EF5]">Questions</span></h2>
                <p class="text-gray-600 mt-2">Silahkan ini berbagai pertanyaan yang sering kali ditanyakan oleh user atau customer Dugg Coffee.</p>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors faq-toggle">
                        <span class="font-medium text-lg">Apa itu Dugg Coffee?</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 bg-white border-t">
                        <p class="text-gray-600">Dugg Coffee adalah sebuah Coffee Shop yang berlokasi di daerah Geger Kalong dan menjual berbagai macam minuman mulai dari coffee dan non-coffee yang sangat sangat enaaak</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors faq-toggle">
                        <span class="font-medium text-lg">Dimana lokasi Dugg Coffee?</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 bg-white border-t">
                        <p class="text-gray-600">Dugg Coffee berlokasi di Jl. Gegerkalong Hilir, Kota Bandung.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors faq-toggle">
                        <span class="font-medium text-lg">Bagaimana cara reservasi di Dugg Coffee?</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 bg-white border-t">
                        <p class="text-gray-600">Untuk reservasi, Anda dapat menghubungi kami melalui WhatsApp atau mengunjungi langsung cafe kami.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors faq-toggle">
                        <span class="font-medium text-lg">Metode pembayaran apa saja yang tersedia?</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 bg-white border-t">
                        <p class="text-gray-600">Kami menerima pembayaran tunai, kartu debit/kredit, dan e-wallet (GoPay, OVO, DANA).</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="border rounded-lg overflow-hidden">
                    <button class="w-full px-6 py-4 text-left flex items-center justify-between bg-white hover:bg-gray-50 transition-colors faq-toggle">
                        <span class="font-medium text-lg">Apa resep rahasia crabby patty?</span>
                        <i class="fas fa-chevron-down transform transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 py-4 bg-white border-t">
                        <p class="text-gray-600">Maaf, ini adalah rahasia perusahaan yang tidak bisa kami bagikan 😊</p>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-4">Do you have any more question? Contact us below</p>
                <a href="mailto:dugg.coffee@gmail.com" class="inline-flex items-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                    CONTACT US
                    <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqToggles = document.querySelectorAll('.faq-toggle');
            
            faqToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('i');
                    
                    // Close all other FAQs
                    faqToggles.forEach(otherToggle => {
                        if (otherToggle !== toggle) {
                            otherToggle.nextElementSibling.classList.add('hidden');
                            otherToggle.querySelector('i').classList.remove('rotate-180');
                        }
                    });
                    
                    // Toggle current FAQ
                    content.classList.toggle('hidden');
                    icon.classList.toggle('rotate-180');
                });
            });
        });
    </script>
@endsection
