<!doctype html>
<html lang='{{ str_replace('_', '-', app()->getLocale()) }}'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    {{-- CSRF Token --}}
    <meta name='csrf-token' content='{{ csrf_token() }}'>

    <title>@yield('title') - Ademir Cortes - Sistema de Gerenciamento de Barbearia</title>

    {{-- Scripts --}}
    <script src='{{ asset('js/app.js') }}' defer></script>

    <!-- Fonts -->
    <link rel='dns-prefetch' href='//fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>


    {{-- Favicons --}}
    <link rel='apple-touch-icon' sizes='57x57' href='{{ asset('img/apple-icon-57x57.png') }}'>
    <link rel='apple-touch-icon' sizes='60x60' href='{{ asset('img/apple-icon-60x60.png') }}'>
    <link rel='apple-touch-icon' sizes='72x72' href='{{ asset('img/apple-icon-72x72.png') }}'>
    <link rel='apple-touch-icon' sizes='76x76' href='{{ asset('img/apple-icon-76x76.png') }}'>
    <link rel='apple-touch-icon' sizes='114x114' href='{{ asset('img/apple-icon-114x114.png') }}'>
    <link rel='apple-touch-icon' sizes='120x120' href='{{ asset('img/apple-icon-120x120.png') }}'>
    <link rel='apple-touch-icon' sizes='144x144' href='{{ asset('img/apple-icon-144x144.png') }}'>
    <link rel='apple-touch-icon' sizes='152x152' href='{{ asset('img/apple-icon-152x152.png') }}'>
    <link rel='apple-touch-icon' sizes='180x180' href='{{ asset('img/apple-icon-180x180.png') }}'>
    <link rel='icon' type='image/png' sizes='192x192' href='{{ asset('img/android-icon-192x192.png') }}'>
    <link rel='icon' type='image/png' sizes='32x32' href='{{ asset('img/favicon-32x32.png') }}'>
    <link rel='icon' type='image/png' sizes='96x96' href='{{ asset('img/favicon-96x96.png') }}'>
    <link rel='icon' type='image/png' sizes='16x16' href='{{ asset('img/favicon-16x16.png') }}'>
    <link rel='manifest' href='/manifest.json'>
    <meta name='msapplication-TileColor' content='#ffffff'>
    <meta name='msapplication-TileImage' content='/ms-icon-144x144.png'>
    <meta name='theme-color' content='#ffffff'>


    {{-- Bootstrap Icons --}}
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css'>

    {{-- Styles --}}

    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Global Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Local CSS --}}
    @stack('styles')
</head>

<body class='bg-dark text-white'>
    <div id='app'>
        @include('includes.header')

        <main class='content-main'>
            @yield('content')
        </main>

        @include('includes.footer')
    </div>
    @stack('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
