@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px]">
        <x-image 
            src="{{ asset('images/faq.jpg') }}"
            alt="FAQ Hero"
            aspect="16/9"
            size="xl"
            class="absolute inset-0 w-full h-full"
        />
        <div class="absolute inset-0" style="background: rgba(0,158,245,0.5);"></div>
        <div class="relative container mx-auto px-4 h-full flex flex-col items-center justify-center">
            <h1 class="text-5xl font-medium text-white mb-4">FAQ</h1>
            <div class="text-white text-lg">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition-colors">Home</a> 
                <span class="mx-2">/</span> 
                <span class="text-blue-400">FAQ</span>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="space-y-6">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-3">What are your opening hours?</h3>
                    <p class="text-gray-600">We are open daily from 8:00 AM to 10:00 PM. On weekends (Saturday and Sunday) we open from 9:00 AM to 11:00 PM.</p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-3">Do you offer WiFi?</h3>
                    <p class="text-gray-600">Yes, we provide free high-speed WiFi for all our customers. Just ask our staff for the password when you make a purchase.</p>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-3">Can I book a space for meetings?</h3>
                    <p class="text-gray-600">Yes, we have a dedicated meeting room that can be booked in advance. Please contact us at least 24 hours before your intended meeting time.</p>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-3">What types of coffee beans do you use?</h3>
                    <p class="text-gray-600">We use premium Arabica beans sourced from various regions in Indonesia, particularly from Java and Sumatra. Our beans are carefully selected and roasted to perfection.</p>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-bold mb-3">Do you offer non-coffee beverages?</h3>
                    <p class="text-gray-600">Yes, we have a variety of non-coffee beverages including teas, chocolate drinks, and fresh juices. We also offer several milk alternatives for our beverages.</p>
                </div>

                <!-- Contact Section -->
                <div class="mt-12 text-center">
                    <p class="text-gray-600 mb-4">Still have questions? Feel free to contact us!</p>
                    <a href="mailto:hello@duggcoffee.com" class="inline-block px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
