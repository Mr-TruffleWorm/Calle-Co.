@extends('layouts.default')
@section('maincontent')
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Locations - Calle Co.</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Page Header -->
    <div class="bg-gradient-to-r from-purple-600 to-pink-500 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Branch Locations</h1>
            <p class="text-xl md:text-2xl opacity-90">Find a Calle Co. store near you</p>
        </div>
    </div>

    <!-- Search and Filter Section -->
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="bg-white rounded-xl shadow-md p-6 mb-8">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <div class="flex-1">
                    <input type="text" id="searchInput" placeholder="Search by location, city, or province..." 
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                </div>
                <button onclick="searchBranches()" class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-colors">
                    Search Locations
                </button>
            </div>
        </div>
    </div>

    <!-- Branch Grid -->
    <div class="max-w-7xl mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="branchGrid">
            
            <!-- Branch Card Template - You'll repeat this pattern -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Calle Co. LRT Central</h3>
                    <div class="mb-4">
                        <iframe src="" width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Metro Manila</span>
                    </div>
                </div>
            </div>

            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Calle Co. Xentro Mall, Tumauini, Isabela</h3>
                    <div class="mb-4">
                        <iframe src="" width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Isabela</span>
                    </div>
                </div>
            </div>

            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Calle Co. BF Resort Village, Las Pinas City</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d287.1849446989762!2d120.98451583514522!3d14.433810620746893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3436f274ceb%3A0x9057960937324875!2sCalle%20Co.%20BFRV%2C%20Las%20Pi%C3%B1as%20City!5e0!3m2!1sen!2sph!4v1757487917376!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Las Pinas City</span>
                    </div>
                </div>
            </div>

            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Calle Co. Pandi Bulacan</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.3356867188863!2d120.93471207578462!3d14.862496170609742!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ad628828977d%3A0x10d46d769f72be0c!2sCALLE%20Co.%20Pandi%2CBulacan!5e0!3m2!1sen!2sph!4v1757488080361!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Bulacan</span>
                    </div>
                </div>
            </div>

            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Pampang, Angeles City Pampanga</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1619.2294927598011!2d120.57384085295644!3d15.147441351850407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f327ba5db427%3A0x859f570b43a84f1f!2sCalle%20Co.%20-%20Pampang%2C%20A.C.!5e0!3m2!1sen!2sph!4v1757488134875!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Pampanga</span>
                    </div>
                </div>
            </div>

            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Shopwise San Fernando, Pampanga</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1362.131896440447!2d120.65431137068701!3d15.065208885344049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396f700345c1d8d%3A0xa87b5f89f413bbed!2sCALLE%20Co.%20Shopwise%20SACOP!5e0!3m2!1sen!2sph!4v1757488213978!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Pampanga</span>
                    </div>
                </div>
            </div>
            <!-- Rizal Ave. Extension, Olongapo City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Rizal Ave. Extension</h3>
                    <div class="mb-4">
                        <div class="w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Olongapo City</span>
                    </div>
                </div>
            </div>

            <!-- Estanislao St. Lakeview homes Putatan, Muntinlupa -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Estanislao St. Lakeview homes Putatan</h3>
                    <div class="mb-4">
                        <div class="w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Muntinlupa</span>
                    </div>
                </div>
            </div>

            <!-- Paliparan Dasmarinas Cavite -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Paliparan Dasmarinas</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9194.563168485789!2d120.97932255737872!3d14.320863936541466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d5d173cd7243%3A0x5a0ab84de6142b07!2sCalle%20Co.%20Paliparan%20Cavite!5e0!3m2!1sen!2sph!4v1757493084732!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Cavite</span>
                    </div>
                </div>
            </div>

            <!-- C Santos St. Brgy. Ugong Pasig -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">C Santos St. Brgy. Ugong</h3>
                    <div class="mb-4">
                        <div class="w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Pasig</span>
                    </div>
                </div>
            </div>

            <!-- Brgy. San Jose Rodriguez Rizal -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Brgy. San Jose Rodriguez</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1622.3509701782386!2d121.12911399049723!3d14.733914678654791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397bb002670f8c3%3A0xa3adaca02256ab1d!2sCalle%20Co.%20San%20Jose%2C%20Rodriguez%20Rizal!5e0!3m2!1sen!2sph!4v1757493388515!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Rizal</span>
                    </div>
                </div>
            </div>

            <!-- Barangka Drive, Boni Ave. Mandaluyong City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Barangka Drive, Boni Ave.</h3>
                    <div class="mb-4">
                        <div class="w-full h-48 bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Mandaluyong City</span>
                    </div>
                </div>
            </div>

            <!-- Villasis Bacag Pangasinan -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Villasis Bacag</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d959.1506058346516!2d120.58032976961468!3d15.929886388649846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913f0057a39bbf%3A0x72928f02871cbd17!2sCalle.%20Co%20Coffee%20Shop!5e0!3m2!1sen!2sph!4v1757493870042!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Pangasinan</span>
                    </div>
                </div>
            </div>

            <!-- Bagumbong Rd. Caloocan City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Bagumbong Rd.</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d405.56051948119045!2d121.00425107232375!3d14.748531234282346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b10058e1fbc5%3A0x7a82736caafb5890!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757493903105!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Caloocan City</span>
                    </div>
                </div>
            </div>

            <!-- Carmona Rizal -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Carmona</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1625.4420731339399!2d121.05665883297992!3d14.312910716629839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70f65f6370f%3A0xa796397c105a188e!2sCalle%20Co%20Carmona!5e0!3m2!1sen!2sph!4v1757493932608!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Rizal</span>
                    </div>
                </div>
            </div>

            <!-- Kinnari Phase 2 Carmona Estate Carmona Cavite -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Kinnari Phase 2 Carmona Estate</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d341.7074853924256!2d121.05730896808221!3d14.31265948963444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70f65f6370f%3A0xa796397c105a188e!2sCalle%20Co%20Carmona!5e0!3m2!1sen!2sph!4v1757493975414!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Cavite</span>
                    </div>
                </div>
            </div>

            <!-- Wayne Mart Mamatid, Mabuhay Cabuyao Laguna -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Wayne Mart Mamatid, Mabuhay</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1367.2752120383054!2d121.14621183722639!3d14.239316623109195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd633d7f982d77%3A0xd75ae406b4494d17!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757494024846!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Laguna</span>
                    </div>
                </div>
            </div>

            <!-- Xentro Mall, Cabagan, Isabela -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Xentro Mall, Cabagan</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4526.930715140434!2d121.77111744300174!3d17.42714709668389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338579a484557e13%3A0x408309885636af84!2sXentroMall%20Cabagan!5e0!3m2!1sen!2sph!4v1757494064540!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Isabela</span>
                    </div>
                </div>
            </div>

            <!-- Aringay La Union -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Aringay</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.45268685112376!2d120.36236168781298!3d16.39323274159634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33919d003ddc9725%3A0xcb20187759ba5fb5!2sCalle%20Co.!5e0!3m2!1sen!2sph!4v1757494109218!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>La Union</span>
                    </div>
                </div>
            </div>
<!-- Fourth Estate Paranaque City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Fourth Estate</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1148.5917210907733!2d121.03046605810069!3d14.462473916988518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cf8eec3904b9%3A0x3c392fc8e926d185!2sCalle%20Co%20Fourth%20Estate!5e0!3m2!1sen!2sph!4v1757494130009!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Paranaque City</span>
                    </div>
                </div>
            </div>

            <!-- Galeria Victoria Mall Balanga Bataan -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Galeria Victoria Mall</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.5925595585977!2d120.5414409778193!3d14.679048936435796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33964008c4fd605d%3A0x75fdca29c0da6eea!2sGaleria%20Victoria!5e0!3m2!1sen!2sph!4v1757494175337!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Balanga, Bataan</span>
                    </div>
                </div>
            </div>

            <!-- Veterans Medical Centre Quezon City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Veterans Medical Centre</h3>
                    <div class="mb-4">
                        <div class="w-full h-[200px] bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Quezon City</span>
                    </div>
                </div>
            </div>

            <!-- A Bonifacio Mandaluyong City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">A. Bonifacio</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.18925592576!2d121.0326841028332!3d14.58828919240247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9465b1797d1%3A0x851ec4da57e3c446!2sCalle%20Co.%20A.%20Bonifacio!5e0!3m2!1sen!2sph!4v1757493516958!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Mandaluyong City</span>
                    </div>
                </div>
            </div>

            <!-- Badoc Ilocos Norte -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Badoc</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1898.0666691571912!2d120.47483120040825!3d17.925933792282322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x338e93e31a2709cb%3A0xd901f6ef8d2cff69!2sCALLE%20Co.%20BADOC%20I.N!5e0!3m2!1sen!2sph!4v1757494246999!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Ilocos Norte</span>
                    </div>
                </div>
            </div>

            <!-- San Francisco Binan Laguna -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">San Francisco</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1932.8120252191745!2d121.05485539540413!3d14.333256964166996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d70077a4615b%3A0xb18d9fa7e6a0e033!2sCalle%20Co.%20-%20San%20Francisco%20Bi%C3%B1an%20Branch!5e0!3m2!1sen!2sph!4v1757494278875!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Binan, Laguna</span>
                    </div>
                </div>
            </div>

            <!-- Loma de Gato Marilao Bulacan -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Loma de Gato</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d964.402333291711!2d121.00622857784755!3d14.791021397444455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397af4062eab033%3A0xd101c1391ca3df34!2sCalle%20co%20Loma%20de%20gato!5e0!3m2!1sen!2sph!4v1757494314820!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Marilao, Bulacan</span>
                    </div>
                </div>
            </div>

            <!-- Olalia Cogeo Antipolo Rizal -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Olalia Cogeo</h3>
                    <div class="mb-4">
                        <div class="w-full h-[200px] bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Antipolo, Rizal</span>
                    </div>
                </div>
            </div>

            <!-- Quirino Highway Tandang Sora -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Parthenon Square</h3>
                    <div class="mb-4">
                        <div class="w-full h-[200px] bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Tandang Sora, QC</span>
                    </div>
                </div>
            </div>

            <!-- Salawag Dasmarinas Cavite -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Salawag</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2298.3283289714764!2d120.9737940804491!3d14.351341022113857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d59c0aed8d41%3A0xb162c61df3110550!2sCalle%20Co.%20-%20Salawag%20Branch!5e0!3m2!1sen!2sph!4v1757494474079!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Dasmarinas, Cavite</span>
                    </div>
                </div>
            </div>

            <!-- Commonwealth QC -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Commonwealth</h3>
                    <div class="mb-4">
                        <div class="w-full h-[200px] bg-gray-200 rounded-lg flex items-center justify-center">
                            <span class="text-gray-500">Map not available</span>
                        </div>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Quezon City</span>
                    </div>
                </div>
            </div>

            <!-- San Vicente Urdaneta Pangasinan -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">San Vicente</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51611.06930692653!2d120.52724972551019!3d15.96055770566781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33913f0057a39bbf%3A0x72928f02871cbd17!2sCalle.%20Co%20Coffee%20Shop!5e0!3m2!1sen!2sph!4v1757494701488!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Urdaneta, Pangasinan</span>
                    </div>
                </div>
            </div>

            <!-- Tarlac City -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Tarlac City</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7690.067540497241!2d120.5805361935791!3d15.4826156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396c712d5f99655%3A0x32ed0cf802b1d166!2sCalle%20co.!5e0!3m2!1sen!2sph!4v1757494846582!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Tarlac</span>
                    </div>
                </div>
            </div>

            <!-- Santa Ana Pampanga -->
            <div class="branch-card bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Santa Ana</h3>
                    <div class="mb-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2290.5210291214808!2d120.76809829091424!3d15.093303286697882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396fb00679a010d%3A0xf26893e3fb41038b!2sCalle%20Co.%20Santa%20Ana!5e0!3m2!1sen!2sph!4v1757494900124!5m2!1sen!2sph" 
                                width="100%" height="200" class="rounded-lg border-0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex items-center text-gray-600 text-sm">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Pampanga</span>
                    </div>
                </div>
            </div>

        </div>
        <div class="bg-gradient-to-r from-purple-600 to-pink-500 text-white py-16">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Want to Open Your Own Branch?</h2>
                <p class="text-xl mb-8 opacity-90">Join the Calle Co. franchise family and bring premium milk tea to your community</p>
                <button class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all transform hover:scale-105">
                    Learn About Franchising
                </button>
            </div>
        </div>

    <script>
        function searchBranches() {
            const searchTerm = document.getElementById('searchInput').value.toLowerCase();
            const branchCards = document.querySelectorAll('.branch-card');
            
            branchCards.forEach(card => {
                const branchText = card.textContent.toLowerCase();
                if (branchText.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        // Add real-time search
        document.getElementById('searchInput').addEventListener('input', searchBranches);
    </script>
@endsection