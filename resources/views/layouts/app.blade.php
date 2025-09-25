<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script type="module" src="{{ asset('js/header.js') }}"></script>
    <script type="module" src="{{ asset('js/headerMobile.js') }}"></script>
    <script src="{{ asset('js/scrollToAncorLink.js') }}"></script>
    <script src="{{ asset('js/modal/modal.js') }}"></script>
    <script src="{{ asset('js/modal/changeModal.js') }}"></script>

    @if (session('toast_message_delete'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7"></script>
        <script src="{{ asset('js/toastMessage.js') }}"></script>
    @endif

</body>

</html>
