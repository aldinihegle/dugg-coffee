@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/aboutus.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-semibold text-white mb-4">About <span class="text-blue-400">Us</span></h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">About Us</span>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="mb-4 text-center">
                <div class="flex items-center mb-1 justify-center space-x-2">
                    <i class="fas fa-info-circle text-black text-sm"></i>
                    <span class="text-black text-sm tracking-widest font-bold">ABOUT</span>
                </div>
                <div class="h-[1px] w-[120px] bg-black mx-auto mt-2"></div>
            </div>

            <div class="max-w-4xl mx-auto mt-8 text-center">
                <h2 class="text-4xl font-bold mb-8">Our <span class="text-blue-400">Story</span></h2>
                
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <div class="md:flex">
                        <div class="md:w-1/2">
                            <img src="{{ asset('images/about-story.png') }}" 
                                alt="Our Story" 
                                class="w-full h-full object-cover"
                            />
                        </div>
                        <div class="md:w-1/2 p-8">
                            <div class="prose prose-lg text-justify">
                                <h1 class="text-2xl font-bold mb-4">Dugg <span class="text-blue-400">Coffee</span></h1> 
                                <p>Dugg Coffee, singkatan dari "Drink Under Good Garden," adalah kedai kopi asal Bandung yang didirikan pada tahun 2024 dengan semangat menghadirkan pengalaman minum kopi yang hangat, ramah, dan penuh inspirasi. Kami menyajikan kopi dari biji blend arabika pilihan yang diracik untuk memenuhi selera mahasiswa dan penikmat kopi muda yang mencari kualitas sekaligus kemurahan.</p>
                                <p>Berlokasi strategis di dekat kampus, Dugg Coffee hadir sebagai tempat yang cocok untuk belajar, berdiskusi, atau sekadar nongkrong—cocok untuk belajar, berdiskusi, atau sekadar bersantai. Dengan fasilitas seperti ruang main-main, meeting kedap suara, dan koneksi internet yang stabil, kami bukan sekadar tempat ngopi, tapi juga ruang tumbuh komunitas.</p>
                                <p>Kami percaya bahwa setiap tegukan kopi punya cerita. Di Dugg, kami ingin cerita itu terasa baik—dari cangkir menuju harga, semua kami rangkai menggapai satu tujuan: tentang di Dugg Coffee. Let's drink under good garden. 🌿☕</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section -->
    <section class="mb-16 relative h-[400px] bg-cover bg-center" style="background-image: url('{{ asset('images/FeedsDuggDetails1.jpg') }}');">
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.2);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center text-center">
            <div class="mb-4 text-center">
                <div class="flex items-center mb-1 justify-center space-x-2"> 
                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                    <span class="text-white text-sm tracking-widest font-bold">LOCATION</span>
                </div>
                <div class="h-[1px] w-[120px] bg-white mx-auto mt-2"></div>
            </div>
            <h2 class="text-4xl font-bold text-white mb-8">We're Located On Gegerkalong Girang Street, In Sukasari, Bandung.</h2>
            <a href="https://maps.app.goo.gl/SYkCkrLgKuPnxPJt8" target="_blank" class="inline-flex items-center px-3 py-2 bg-blue-600 text-sm hover:bg-blue-700 text-white rounded-lg transition-colors">
                Locate Us On Maps
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
            <p class="text-sm font-bold text-[#FEE8AE] mt-8 underline">Jl. Gegerkalong Girang No.66, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40153</p>
        </div>
    </section>
@endsection