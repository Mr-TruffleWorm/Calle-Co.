@extends('layouts.default')
@section('maincontent')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branch Locations - Calle Co.</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'calle-green': '#24623d',
                        'calle-green-dark': '#1a4a2e',
                        'calle-green-light': '#2e7a4d',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen">

    <!-- Page Header -->
    <div class="m-6 bg-gradient-to-r from-calle-green to-black py-16 rounded-md">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">Branch Locations</h1>
            <p class="text-xl md:text-2xl text-white opacity-90">Find a Calle Co. store near you</p>
        </div>
    </div>

    <!-- Branch Grid -->
    <div class="max-w-7xl mx-auto px-4 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="branchGrid"></div>
    </div>

<script src="{{ asset('js/branch_location.js') }}"></script><!--THE LOCATION OF THE BRANCH DATA-->
</body>
@endsection
