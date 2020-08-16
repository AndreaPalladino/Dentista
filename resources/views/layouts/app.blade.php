<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    <div id="app">
        
        @include('components._navbar')
        @include('components._headerViste')
        @include('components._header')
    

        <main class="">
            @yield('content')
        </main>
        @include('components._footer')
    </div>
    @stack('script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/5f18af2e46.js" crossorigin="anonymous"></script>
    <script>
        AOS.init();
      </script>
      <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
