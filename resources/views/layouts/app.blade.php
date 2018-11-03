<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>@yield('title','Intranet')</title>

    </head>
    <body>

        {{-- Header --}}
        <header>      
            @include('layouts.partials.header')
        </header>
        
        {{-- Content --}}
        <section>
            @yield('content')
        </section>

        {{-- Footer --}}
        <footer class="j-footer py-4 px-3">
            @include('layouts.partials.footer')
        </footer>

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        @yield('scripts_graficos')
    </body>
</html>