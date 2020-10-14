<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BT Real Estate @section('title') @show </title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.css') }}">

        <!-- Lightbox --> 
        <link rel="stylesheet" href="{{ asset('ass/css/lightbox.min.css') }}">

        @livewireStyles
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Top Bar -->
            @include('layouts.partials._topbar')
            <!-- Nav Bar -->
            @livewire('navigation-dropdown')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @stack('modals')
        <script src="{{ asset('ass/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('ass/js/bootstrap.bundle.min.js') }} "></script>
        <script src="{{ asset('ass/js/main.js')}}"></script>
        <script src="{{ asset('ass/js/lightbox.min.js') }}"></script>
        @livewireScripts
        @include('layouts.partials._footer')
    </body>
</html>
