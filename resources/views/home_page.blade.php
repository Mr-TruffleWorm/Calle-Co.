<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script src="https://cdn.tailwindcss.com"></script>
    <title>CALLE Co.</title>
</head>
<body>
@extends('layouts.default')
@section('maincontent')
        <main class="relative h-screen overflow-hidden">
        <!-- Slide 1 -->
        <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-500"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white z-10 px-4">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-pulse">Welcome to CALLE Co.</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Premium Milk Tea Franchise Opportunities</p>
                    <button class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Start Your Journey
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-orange-500 to-red-500"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white z-10 px-4">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Franchise Now</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Discover the Sweet Success of Milk Tea Business</p>
                    <button class="bg-white text-orange-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Explore Franchise
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600 to-teal-500"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white z-10 px-4">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Quality & Excellence</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Crafted with Love, Served with Pride</p>
                    <button class="bg-white text-blue-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Learn More
                    </button>
                </div>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
            <div class="absolute inset-0 bg-gradient-to-r from-green-600 to-emerald-500"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <div class="text-center text-white z-10 px-4">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">Success Awaits</h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Build Your Empire with CALLE Co. Franchise</p>
                    <button class="bg-white text-green-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Get Started Today
                    </button>
                </div>
            </div>
        </div>

        <!-- Navigation Dots -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20">
            <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300 hover:bg-opacity-100" data-slide="0"></button>
            <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300 hover:bg-opacity-100" data-slide="1"></button>
            <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300 hover:bg-opacity-100" data-slide="2"></button>
            <button class="dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300 hover:bg-opacity-100" data-slide="3"></button>
        </div>

        <!-- Navigation Arrows -->
        <button class="absolute left-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-20" id="prevBtn">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-white hover:text-gray-300 transition-colors z-20" id="nextBtn">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <div class="franchises">

        </div>
        <div class="products">
            <details>
                <section>
                    <span>
                        <p>Product 1</p>
                    </span>
                    <span>
                        <p>Product 2</p>
                    </span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </section>
            </details>
        </div>
    </main>
    <script src="{{ asset('js/home_image_slider.js') }}"></script>
    @endsection
</body>
</html>