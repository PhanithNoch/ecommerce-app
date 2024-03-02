<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="meta description">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- all css -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    

    <link rel="stylesheet" href="{{asset('/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <body class="font-light antialiased">
        @include('layouts.partials.header')
        @yield('hero')

        @include('layouts.partials.footer')

    </body>
    @stack('modals')

    @livewireScripts

       <!-- all js -->
       <script src="{{asset('/js/vendor.js')}}"></script>
       <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>