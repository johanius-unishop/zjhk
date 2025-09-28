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


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Проверяем наличие ошибок валидации
            @if (count($errors) > 0)
                // Получить коллекцию модальных окон
                const modals = document.querySelectorAll("[data-modal]");

                // Если коллекция пуста, выведем предупреждение
                if (modals.length === 0) {
                    console.error("Нет ни одного модального окна!");
                } else {
                    // Открыть первое модальное окно из коллекции
                    openModal(modals[0]);
                }
            @endif
        });
    </script>


</body>

</html>
