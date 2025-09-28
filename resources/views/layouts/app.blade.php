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
                const accountModal = document.querySelector('[data-modal="account"]');
                const body = document.body;

                // Пароли для входа
                const passwordLogin = document.getElementById("input-password-login");
                const toggleButtonLogin = document.getElementById("toggle-password-login");
                const visibleEyeLogin = toggleButtonLogin.querySelector(".visible-icon");
                const hiddenEyeLogin = toggleButtonLogin.querySelector(".hidden-icon");

                // Пароли для регистрации
                const passwordReg = document.getElementById("input-password-reg");
                const toggleButtonReg = document.getElementById("toggle-password-reg");
                const visibleEyeReg = toggleButtonReg.querySelector(".visible-icon");
                const hiddenEyeReg = toggleButtonReg.querySelector(".hidden-icon");

                // Пароли для регистрации (подтверждение пароля)
                const passwordRegConf = document.getElementById(
                    "input-password-reg-confirmation"
                );
                const toggleButtonRegConf = document.getElementById(
                    "toggle-password-reg-confirmation"
                );
                const visibleEyeRegConf =
                    toggleButtonRegConf.querySelector(".visible-icon");
                const hiddenEyeRegConf = toggleButtonRegConf.querySelector(".hidden-icon");

                // Обработчик для входа
                passwordLogin.addEventListener("input", function() {
                    if (passwordLogin.value.length > 0) {
                        toggleButtonLogin.classList.add("_active");
                    } else {
                        toggleButtonLogin.classList.remove("_active");
                    }
                });

                toggleButtonLogin.addEventListener("click", function() {
                    const isPasswordType = passwordLogin.type === "password";
                    passwordLogin.type = isPasswordType ? "text" : "password";
                    visibleEyeLogin.style.display = isPasswordType ?
                        "none" :
                        "inline-block";
                    hiddenEyeLogin.style.display = !isPasswordType ?
                        "none" :
                        "inline-block";
                });

                // Обработчик для регистрации
                passwordReg.addEventListener("input", function() {
                    if (passwordReg.value.length > 0) {
                        toggleButtonReg.classList.add("_active");
                    } else {
                        toggleButtonReg.classList.remove("_active");
                    }
                });

                toggleButtonReg.addEventListener("click", function() {
                    const isPasswordType = passwordReg.type === "password";
                    passwordReg.type = isPasswordType ? "text" : "password";
                    visibleEyeReg.style.display = isPasswordType ? "none" : "inline-block";
                    hiddenEyeReg.style.display = !isPasswordType ? "none" : "inline-block";
                });

                // Обработчик для регистрации повтор пароля
                passwordRegConf.addEventListener("input", function() {
                    if (passwordRegConf.value.length > 0) {
                        toggleButtonRegConf.classList.add("_active");
                    } else {
                        toggleButtonRegConf.classList.remove("_active");
                    }
                });

                toggleButtonRegConf.addEventListener("click", function() {
                    const isPasswordType = passwordRegConf.type === "password";
                    passwordRegConf.type = isPasswordType ? "text" : "password";
                    visibleEyeRegConf.style.display = isPasswordType ?
                        "none" :
                        "inline-block";
                    hiddenEyeRegConf.style.display = !isPasswordType ?
                        "none" :
                        "inline-block";
                });

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

                console.log(accountModal);
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
