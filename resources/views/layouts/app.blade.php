<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', config('app.name', 'Laravel'))</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>
    <body class="body">
        <div class="app__wrapper">
            @include('layouts.header')

            @yield ('content')
            @include('layouts.footer')
            @include('partials.login')
            <div id="scroll" class="scroll">
                <span>+</span>
            </div>

    @yield('scripts')
    </body>
</html>
