<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <title>Lomba Mewarnai BETADINE</title>
    {{-- @vite('resources/css/app.css') --}}

    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>

<body>
    @include('home.navigation.navigation')

    @yield('content')
    @include('home.footer')
    

    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script  src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
    {{-- @include('partials.flash-message') --}}
</body>

</html>
