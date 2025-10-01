<div class="modal__content form-verify-email">
    <h1 class="modal__title">Подтверждение E-mail</h1>
    <form method="POST" action="{{ route('login') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <div>
                <label for="email" value="{{ __('Email') }}" class="visually-hidden"></label>
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
