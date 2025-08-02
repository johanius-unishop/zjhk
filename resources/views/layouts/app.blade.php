<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="body">
        <div class="app__wrapper">
            @include('layouts.header')

            @yield ('content')
            @include('layouts.footer')
            <div id="scroll" class="scroll">
                <span>+</span>
            </div>

            <div data-modal="account" class="modal">
                <div data-close="true" class="modal__overlay">
                    <div class="modal__body">
                        <span data-close="true" class="modal__close">✖</span>
                        <div class="modal__content">
                            <h1 class="modal__title">Войти</h1>
                            <form method="POST" action="/login" class="modal__form">
                                @csrf <!-- Не забудьте добавить токен CSRF -->
                            <div class="modal__input-container">
                                <div>
                                    <label for="input-email" class="visually-hidden"></label>
                                    <input type="email" id="input-email" name="input-email" class="modal__input"
                                        placeholder="Введите email" required autocomplete="username">
                                    <p class="modal__error" aria-live="polite">
                                        <span hidden>{{ session('errors.input-email') ?? '' }}</span>
                                    </p>
                                </div>
                                <div>
                                    <label for="input-password" class="visually-hidden"></label>
                                    <input type="password" id="input-password" name="input-password" placeholder="Введите пароль" autocomplete="current-password">
                                    
                                    <button type="button" id="toggle-password" class="password-toggle">
                                        <img src="images/icons/password-eye-cross.svg" alt="Показать пароль">
                                    </button>
                                    <p class="modal__error"><span hidden>{{ session('errors.input-password') ?? '' }}</span></p>
                                </div>
                            </div>
                            <div>
                                <a href="/forgot-password" class="modal__forget-password">Забыли пароль?</a>
                            </div>
                            <button class="modal__btn">Войти</button>
                            </form>
                            <p class="modal__policy">
                            Нажимая кнопку «Войти», вы соглашаетесь c условиями <a href="#">политики конфиденциальности</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @livewireScripts
    <script> 
        $(document).ready(function(){ $('.modal__form').on('submit', function(e) { e.preventDefault(); 
        $.ajax({ url: $(this).attr('action'), type: 'POST', dataType: 'JSON', data: $(this).serialize(), success: function(response) { if (response.success === true) { location.href = '/';
        } else { showErrors(response.errors); } }, error: function(xhr, status, error) { showErrors(xhr.responseJSON.errors); } }); }); function showErrors(errors) { Object.keys(errors).forEach(key => { let fieldSelector = `.modal__error span[data-error="${key}"]`; $(fieldSelector).removeClass('hidden'); $(fieldSelector).text(errors[key][0]); }); } }); </script>
    </body>
</html>
