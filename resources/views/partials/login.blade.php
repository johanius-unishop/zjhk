<div class="modal__content form-signin">
    <h1 class="modal__title">Войти</h1>
    <form method="POST" action="{{ route('login') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <div>
                <label for="email" class="visually-hidden"></label>
                <input type="email" id="input-email" name="email" class="modal__input"
                    value="{{ session('form_error_source') == 'authentication' ? old('email') : '' }}" placeholder="Введите email"
                    required autofocus autocomplete="username" />

                <p class="modal__error" aria-live="polite">
                    @if ($errors->has('email') && session('form_error_source') == 'authentication')
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </p>
            </div>
            <div class="password-field">
                <label for="password" class="visually-hidden"></label>
                <input type="password" id="input-password-login" name="password"
                    value="{{ session('form_error_source') == 'authentication' ? old('password') : '' }}" placeholder="Введите пароль"
                    autocomplete="current-password" class="input-password" />
                <button type="button" id="toggle-password-login" class="password-toggle">
                    <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Скрытый пароль"
                        class="visible-icon">
                    <img src="{{ asset('images/icons/password-eye.svg') }}" alt="Видимый пароль" class="hidden-icon">
                </button>
                <p class="modal__error">
                    @if ($errors->has('password') && session('form_error_source') == 'authentication')
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </p>
            </div>
            <div class="checkbox-container-remember">
                <input type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                <label class="checkbox-container-label" for="remember-me">Запомнить меня</label>
            </div>
        </div>
        <div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="modal__forget-password">Забыли пароль?</a>
            @endif
        </div>
        <button data-close class="modal__btn">Войти</button>
        <p class="modal__policy">
            Нажимая кнопку «Войти», Вы соглашаетесь c условиями
            <a href="#">политики конфиденциальности</a>
        </p>
        @if ($loginSocial['loginGoogle'] || $loginSocial['loginYandex'] || $loginSocial['loginVk'])
            <p class="modal__select-social">или</p>
            <div class="register-social__wrapper">
                @if ($loginSocial['loginGoogle'])
                    <button data-close class="register-social__btn">
                        <span>Войти через</span>
                        <svg width="24" height="24">
                            <use href="{{ asset('images/icons/googl.svg') }}"></use>
                        </svg>
                    </button>
                @endif
                @if ($loginSocial['loginYandex'])
                    <button data-close class="register-social__btn">
                        <span>Войти через</span>
                        <svg width="24" height="20">
                            <use href="{{ asset('images/icons/yandex.svg') }}"></use>
                        </svg>
                    </button>
                @endif
                @if ($loginSocial['loginVk'])
                    <button data-close class="register-social__btn">
                        <span>Войти через</span>
                        <svg width="23" height="23">
                            <use href="{{ asset('images/icons/vk.svg') }}"></use>
                        </svg>
                    </button>
                @endif
            </div>
        @endif
        <p class="not-account">
            Еще нет аккаунта?
            <a href="#" class="modal__account-link switch-to-signup no-scroll-to-handle">
                Зарегистрироваться </a>
        </p>
    </form>
</div>
