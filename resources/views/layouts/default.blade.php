<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>CALLE Co.</title>
</head>
<body>
    <header>
        @include('layouts.header')
    </header>
    <main>
        @yield('maincontent')
    </main>
    <footer>
        @include("layouts.footer")
    </footer>
</body>
    <script src="{{ asset('js/header.js') }}"></script>
</html>