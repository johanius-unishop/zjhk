<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const scrollBtn = document.querySelector('#scroll-btn')
            const windowHeight = document.documentElement.clientHeight;

            window.addEventListener('scroll', () => {
                let currentScroll = scrollY;
                if (currentScroll > windowHeight * 1.1) {
                    scrollBtn?.classList.add('visible')
                } else {
                    scrollBtn?.classList.remove('visible')
                }
            })

            scrollBtn.addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: "smooth"
                })
            })
            console.log('Scrollbar has been connected...')
        })
    </script>
</head>

<body class="body">
    <div class="app__wrapper">
        @include('layouts.header')

        @yield ('content')
        @include('layouts.footer')
    </div>
    <div id="scroll-btn" class="scroll">
        <svg width="38" height="38">
            <use href="{{ asset('images/icons/scroll-up.svg') }}"></use>
        </svg>
    </div>
    @include('partials.login')
    @yield('scripts')
</body>

</html>
