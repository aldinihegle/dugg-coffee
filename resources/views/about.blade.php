@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.png') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">About <span class="text-blue-400">Us</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">About Us</span>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="rounded-lg overflow-hidden">
                <img src="{{ asset('images/hero-bg.png') }}" alt="Coffee Beans" class="w-1/2 h-1/2   object-cover">
                </div>
                <div>
                    <h2 class="text-3xl font-bold mb-6">Our <span class="text-blue-400">Story</span></h2>
                    <div class="space-y-4 text-gray-600">
                        <p>Dugg Coffee, singkatan dari "Drink Under Good Garden," adalah kedai kopi asal Bandung yang didirikan pada tahun 2024 dengan semangat menghadirkan pengalaman minum kopi yang hangat, ramah, dan penuh inspirasi. Kami menyajikan kopi dari biji blend arabika pilihan yang diracik untuk memenuhi selera mahasiswa dan penikmat kopi muda yang mencari kualitas sekaligus kemurahan.</p>
                        <p>Berlokasi strategis di dekat kampus, Dugg Coffee hadir sebagai tempat yang cocok untuk belajar, berdiskusi, atau sekadar nongkrong—cocok untuk belajar, berdiskusi, atau sekadar bersantai. Dengan fasilitas seperti ruang main-main, meeting kedap suara, dan koneksi internet yang stabil, kami bukan sekadar tempat ngopi, tapi juga ruang tumbuh komunitas.</p>
                        <p>Kami percaya bahwa setiap tegukan kopi punya cerita. Di Dugg, kami ingin cerita itu terasa baik—dari cangkir menuju harga, semua kami rangkai menggapai satu tujuan: tentang di Dugg Coffee. Let's drink under good garden. 🌿☕</p>
                    </div>
                    <a href="#contact" class="inline-block mt-8 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/FeedsDuggDetails1.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center text-center">
            <h2 class="text-4xl font-medium text-white mb-6">We're Located On Gegerkalong Girang Street, In Sukasari, Bandung.</h2>
            <p class="text-white text-lg mb-8">Jl. Gegerkalong Girang No.66, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</p>
            <a href="https://maps.google.com" target="_blank" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                View on Maps
            </a>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="border-2 border-[#FFF8AE] rounded-lg overflow-hidden">
                <div class="flex">
                    <div class="flex-1 bg-[#FFF8AE] p-8" style="background: rgba(255,248,174,0.5);">
                        <h3 class="text-2xl font-bold mb-4">Meet Mr. Tralalelo Tralala</h3>
                        <p class="text-gray-600">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In ut massa mi. Donec sit amet nulla lacus. Aliquam erat volutpat. In id fermentum augue, ut pellentesque leo.
                        </p>
                    </div>
                    <div class="w-1/2">
                    <img src="{{ asset('images/hero-bg.png') }}" alt="Coffee Beans" class="w-1/2 h-1/2   object-cover"> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection