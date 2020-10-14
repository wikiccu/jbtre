<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('ass/css/all.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('ass/css/bootstrap.css') }}">
    <!-- Custom -->
    <link rel="stylesheet" href="{{ asset('ass/css/style.css') }}">
    <!-- Lightbox --> 
    <link rel="stylesheet" href="{{ asset('ass/css/lightbox.min.css') }}">
    <title>BT Real Estate @section('title') @show </title>
</head>
<body>
    <!-- Top Bar -->
    @include('layouts.partials._topbar')
    <!-- Nav Bar -->
    @include('layouts.partials._navbar')
    @include('layouts.partials._alert')
    
    <!-- Main Content -->
    @yield('content')
    <!-- Footer -->
    @include('layouts.partials._footer')
    
    <script src="{{ asset('ass/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('ass/js/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ asset('ass/js/main.js')}}"></script>
    <script src="{{ asset('ass/js/lightbox.min.js') }}"></script>
</body>
</html>