<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/home_tailwind.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />


    <title>CALLE Co.</title>
</head>
<body>
@extends('layouts.default')
@section('maincontent')
        <main class="relative h-screen overflow-hidden">
            <!-- Background Slides -->
            <div class="slide absolute inset-0 opacity-100 transition-opacity duration-1000 ease-in-out">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=1920&h=1080&fit=crop" 
                    alt="Slide 1" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>

            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <img src="https://images.unsplash.com/photo-1556909114-b7f7f9d95d8c?w=1920&h=1080&fit=crop" 
                    alt="Slide 2" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>

            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=1920&h=1080&fit=crop" 
                    alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>

            <div class="slide absolute inset-0 opacity-0 transition-opacity duration-1000 ease-in-out">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1920&h=1080&fit=crop" 
                    alt="Slide 4" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>

            <!-- Static Content -->
            <div class="absolute inset-0 flex flex-col items-center justify-center z-10">
               <h1 class="mb-10 text-4xl font-extrabold leading-none tracking-tight text-gray-900 text-8xl dark:text-white">
                CALLE Co.
            </h1>
                <p class="text-xl md:text-1xl mb-8 max-w-2xl mx-auto text-white text-center px-4">
                        Affordable Perfection in Every Cup. Embrace our Budget-Friendly Beverages
                </p>
                <a href="#franchise">
                    <button class="bg-white text-calle-green px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                        Franchise Now
                    </button>
                </a>
                <a href="#learnmore" class="text-lg text-gray-900 dark:text-white px-8 py-9 ">Learn more</a>
            </div>
        </main>

    <!-- Why Choose CALLE Co. Section -->
    <section id="learnmore" class="py-24 relative bg-gray-50">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                    <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                        <img class="rounded-xl object-cover h-80" src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=320&fit=crop" alt="CALLE Co. Milk Tea Store" />
                    </div>
                    <img class="sm:ml-0 ml-auto rounded-xl object-cover h-80" src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=320&fit=crop" alt="Premium Milk Tea Products" />
                </div>
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                            <h2 class="text-black text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                Why Choose CALLE Co. to Franchise?</h2>
                            <p class="text-gray-600 text-base font-normal leading-relaxed lg:text-start text-center">
                                Join the fastest-growing milk tea franchise in the Philippines. With our proven business model, comprehensive support system, and premium quality products, your success is our priority. Every franchise partner becomes part of our family, receiving ongoing guidance to build a thriving business.</p>
                        </div>
                        <div class="w-full lg:justify-start justify-center items-center sm:gap-10 gap-5 inline-flex">
                            <div class="flex-col justify-start items-start inline-flex">
                                <h3 class="text-calle-green text-4xl font-bold font-manrope leading-normal">5+</h3>
                                <h6 class="text-gray-600 text-base font-normal leading-relaxed">Years of Excellence</h6>
                            </div>
                            <div class="flex-col justify-start items-start inline-flex">
                                <h4 class="text-calle-green text-4xl font-bold font-manrope leading-normal">33</h4>
                                <h6 class="text-gray-600 text-base font-normal leading-relaxed">Active Franchises</h6>
                            </div>
                            <div class="flex-col justify-start items-start inline-flex">
                                <h4 class="text-calle-green text-4xl font-bold font-manrope leading-normal">98%</h4>
                                <h6 class="text-gray-600 text-base font-normal leading-relaxed">Partner Satisfaction</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Franchise Package Section -->
    <section id="franchise" class="py-24 relative xl:mr-0 lg:mr-5 mr-0 bg-white">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center xl:gap-12 gap-10 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="flex-col justify-start lg:items-start items-center gap-4 flex">
                            <div class="w-full flex-col justify-start lg:items-start items-center gap-3 flex">
                                <h2 class="text-calle-green-dark text-4xl font-bold font-manrope leading-normal lg:text-start text-center">
                                    Complete Franchise Package for Only ₱99,999</h2>
                                <p class="text-gray-600 text-base font-normal leading-relaxed lg:text-start text-center">
                                    Get everything you need to start your milk tea business with our comprehensive franchise package. Includes equipment, initial inventory, training, and lifetime support with no hidden fees.</p>
                            </div>
                        </div>
                        <div class="w-full flex-col justify-center items-start gap-6 flex">
                            <div class="w-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div class="w-full h-full p-4 rounded-xl border-2 border-gray-300 hover:border-calle-green hover:bg-gray-50 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-calle-green text-xl font-bold font-manrope leading-7">Equipment Package</h4>
                                    <p class="text-gray-600 text-base font-normal leading-relaxed">Complete set of professional milk tea equipment and utensils</p>
                                </div>
                                <div class="w-full h-full p-4 rounded-xl border-2 border-gray-300 hover:border-calle-green hover:bg-gray-50 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-calle-green text-xl font-bold font-manrope leading-7">Initial Inventory</h4>
                                    <p class="text-gray-600 text-base font-normal leading-relaxed">Premium ingredients and supplies to get you started</p>
                                </div>
                            </div>
                            <div class="w-full h-full justify-start items-center gap-8 grid md:grid-cols-2 grid-cols-1">
                                <div class="w-full p-4 rounded-xl border-2 border-gray-300 hover:border-calle-green hover:bg-gray-50 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-calle-green text-xl font-bold font-manrope leading-7">Training & Support</h4>
                                    <p class="text-gray-600 text-base font-normal leading-relaxed">Comprehensive training program and ongoing business support</p>
                                </div>
                                <div class="w-full h-full p-4 rounded-xl border-2 border-gray-300 hover:border-calle-green hover:bg-gray-50 transition-all duration-700 ease-in-out flex-col justify-start items-start gap-2.5 inline-flex">
                                    <h4 class="text-calle-green text-xl font-bold font-manrope leading-7">Marketing Materials</h4>
                                    <p class="text-gray-600 text-base font-normal leading-relaxed">Professional signage, promotional materials, and branding support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('franchising-page') }}">
                        <button class="sm:w-fit w-full group px-8 py-4 bg-gradient-to-r from-calle-green to-black hover:from-calle-green-dark hover:to-gray-800 rounded-lg shadow-lg transition-all duration-700 ease-in-out justify-center items-center flex">
                            <span class="px-2 text-white text-lg font-bold leading-6 group-hover:-translate-x-0.5 transition-all duration-700 ease-in-out">
                                Read More
                            </span>
                            <svg class="ml-2 group-hover:translate-x-0.5 transition-all duration-700 ease-in-out" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none">
                                <path d="M6.75265 4.49658L11.2528 8.99677L6.75 13.4996" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="w-full lg:justify-start justify-center items-start flex">
                    <div class="sm:w-[564px] w-full sm:h-[646px] h-full sm:bg-gray-100 rounded-3xl sm:border-2 border-gray-300 relative">
                        <img class="sm:mt-5 sm:ml-5 w-full h-full rounded-3xl object-cover" src="https://images.unsplash.com/photo-1556909114-b7f7f9d95d8c?w=600&h=700&fit=crop" alt="CALLE Co. Franchise Store" />
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    <section>
        <h1> Total Branches</h1>
    </section>
    
    <section class="py-24 bg-gradient-to-r from-gray-50 to-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 text-black">Success Stories from Our Franchise Partners</h2>
            <p class="text-center text-gray-600 mb-16 max-w-2xl mx-auto">Hear from real franchise owners who have built successful businesses with CALLE Co.</p>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop&crop=face" alt="Maria Santos">
                        <div>
                            <h4 class="font-bold text-black">Maria Santos</h4>
                            <p class="text-calle-green">Franchise Owner, Manila</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum alias unde consequatur debitis laboriosam consequuntur minus illum a reiciendis, beatae quae assumenda error, fugit quas nesciunt recusandae. Et, quam cum.</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&crop=face" alt="John Cruz">
                        <div>
                            <h4 class="font-bold text-black">John Cruz</h4>
                            <p class="text-calle-green">Franchise Owner, Cebu</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt animi ea, veritatis eligendi, perferendis, ducimus architecto hic omnis iste eaque debitis pariatur nam minus iure deserunt sequi! Explicabo, eum soluta?</p>
                </div>
                
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-200">
                    <div class="flex items-center mb-6">
                        <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop&crop=face" alt="Anna Reyes">
                        <div>
                            <h4 class="font-bold text-black">Anna Reyes</h4>
                            <p class="text-calle-green">Franchise Owner, Davao</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia corrupti eius pariatur sed dolore magnam id ab, rerum, nulla quasi quisquam? Fuga necessitatibus blanditiis nostrum unde quaerat possimus culpa fugit!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="py-24 bg-gradient-to-r from-calle-green to-black">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-5xl font-bold text-white mb-6">Ready to Start Your Journey?</h2>
            <p class="text-xl text-white mb-8 max-w-3xl mx-auto">
                Build your dream business with Calle Co. Affordable, accessible, and ready to grow with you.
            </p>

            <!-- Contact Us button -->
            <button id="contactBtn" 
                class="bg-white text-calle-green px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-100 transition-all transform hover:scale-105 shadow-lg">
                Contact Us
            </button>

            <!-- Hidden contact info -->
            <div id="contactInfo" class="hidden mt-6 text-white opacity-90 space-y-3">
                <div class="flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">call</span>
                    <span class="text-2xl text-gray-900 dark:text-white">Call Us: 0908 471 7301</span>
                </div>
                <div class="flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">mail</span>
                    <span class="text-2xl text-gray-900 dark:text-white">Email Us: calleco.franchise@gmail.com</span>
                </div>
            </div>
        </div>
    </section>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.377870387231!2d121.0556150838265!3d14.569906114183688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c842a3b9fb87%3A0x3bad46d000a65156!2s105%20W%20Capitol%20Dr%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1757591500700!5m2!1sen!2sph" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    


    <script src="{{ asset('js/home_image_slider.js') }}"></script>
    @endsection
</body>
</html>