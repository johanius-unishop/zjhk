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



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Проверяем наличие ошибок валидации
            @if (count($errors) > 0)

                const body = document.body;
                const accountModal = document.querySelector('[data-modal="account"]');



                const getScrollbarWidth = () => {
                    return window.innerWidth - document.documentElement.clientWidth;
                };

                const setBodyStyle = () => {
                    const scrollbarWidth = getScrollbarWidth();
                    body.style.overflowY = "hidden";
                    body.style.position = "fixed";
                    body.style.top = `-${scrollPosition}px`;
                    body.style.width = "100%";
                    body.style.paddingRight = `${scrollbarWidth}px`;
                };

                const setBodyStyleDefault = () => {
                    body.style.overflowY = "auto";
                    body.style.position = "";
                    body.style.top = "";
                    body.style.width = "";
                    body.style.paddingRight = "0";
                };

                let scrollPosition = 0;

                const openModal = (modal) => {
                    if (!modal.classList.contains("_open")) {
                        scrollPosition =
                            window.scrollY || document.documentElement.scrollTop;
                        setBodyStyle();
                        modal.classList.add("_open");
                    }
                };

                const closeModal = (modal) => {
                    modal.classList.remove("_open");
                    setBodyStyleDefault();
                    window.scrollTo(0, scrollPosition);
                };

                const formSource = "{{ session('form_error_source') }}";

                const formsContainer = document.querySelector('.modal__body');
                // Переключение на форму регистрации
                function switchToSignup() {
                    formsContainer.querySelector('.form-signin').style.display = 'none';
                    formsContainer.querySelector('.form-signup').style.display = 'block';
                }

                // Переключение на форму входа
                function switchToSignin() {
                    formsContainer.querySelector('.form-signin').style.display = 'block';
                    formsContainer.querySelector('.form-signup').style.display = 'none';
                }


                openModal(accountModal);
                if (formSource === 'registration') {
                    // Открываем модальное окно регистрации
                    switchToSignup();
                } else if (formSource === 'authentication') {
                    // Открываем модальное окно входа
                    switchTosignIn();
                }
            @endif
        });
    </script>


</body>

</html>
