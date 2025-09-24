<div data-modal="account" class="modal">
    <div data-close="true" class="modal__overlay">
        <div class="modal__body">
            <span data-close="true" class="modal__close">&#10006;</span>
            <div class="modal__content">
                <h1 class="modal__title">Войти</h1>
                <form method="POST" action="{{ route('login') }}" class="modal__form">
                    @csrf
                    <div class="modal__input-container">
                        <div>
                            <x-input-label for="input-email" :value="__('Email')" class="visually-hidden">/>

                            <input type="email" id="input-email" name="input-email" class="modal__input"
                                placeholder="Введите email" required autocomplete="username" />
                            <p class="modal__error" aria-live="polite">
                                <span hidden>Email содержит некорректные символы</span>
                            </p>
                        </div>
                        <div>
                            <label for="input-password-login" class="visually-hidden"></label>
                            <input type="password" id="input-password-login" name="input-password-login"
                                placeholder="Введите пароль" autocomplete="current-password" class="input-password" />
                            <button type="button" id="toggle-password-login" class="password-toggle">
                                <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Показать пароль" />
                            </button>
                            <p class="modal__error">
                                <span hidden>Неверный логин или пароль</span>
                            </p>
                        </div>
                    </div>
                    <div>
                        <a href="#" class="modal__forget-password">Забыли пароль?</a>
                    </div>
                    <button data-close class="modal__btn">Войти</button>
                    <p class="modal__policy">
                        Нажимая кнопку «Войти», вы соглашаетесьc условиями
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
                        <a href="/" class="modal__account-link"> Зарегистрироваться </a>
                    </p>
                </form>
            </div>
            <div class="modal__content" style="display: none">
                <h1 class="modal__title">Зарегистрироваться</h1>
                <form action="#" class="modal__form">
                    <div class="modal__input-container">
                        <div>
                            <label for="input-email" class="visually-hidden"></label>
                            <input type="email" id="input-email-reg" name="input-email" class="modal__input"
                                placeholder="Введите email" required autocomplete="username" />
                            <p class="modal__error" aria-live="polite">
                                <span hidden>Email содержит некорректные символы</span>
                            </p>
                        </div>
                        <div>
                            <label for="input-password-reg" class="visually-hidden"></label>
                            <input type="password" id="input-password-reg" name="input-password-reg"
                                placeholder="Введите пароль" autocomplete="current-password" class="input-password" />
                            <button type="button" id="toggle-password-reg" class="password-toggle">
                                <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Показать пароль" />
                            </button>
                            <p class="modal__error">
                                <span hidden>Неверный логин или пароль</span>
                            </p>
                        </div>
                    </div>
                    <button data-close class="modal__btn">Продолжить</button>
                    <p class="modal__policy">
                        Нажимая кнопку «Продолжить», вы соглашаетесь c условиями
                        <a href="#">политики конфиденциальности</a>
                    </p>
                    <p class="modal__select-social">Зарегистрироваться с помощью</p>
                    <div class="register-social__wrapper">
                        <button data-close class="register-social__btn">
                            <span>Google</span>
                            <svg width="24" height="24">
                                <use href="{{ asset('images/icons/googl.svg') }}"></use>
                            </svg>
                        </button>
                        <button data-close class="register-social__btn">
                            <span>Яндекс</span>
                            <svg width="24" height="20">
                                <use href="{{ asset('images/icons/yandex.svg') }}"></use>
                            </svg>
                        </button>
                        <button data-close class="register-social__btn">
                            <span>VK</span>
                            <svg width="23" height="23">
                                <use href="{{ asset('images/icons/vk.svg') }}"></use>
                            </svg>
                        </button>
                    </div>
                    <p class="not-account">
                        <a href="/" class="modal__account-link">
                            У меня уже есть аккаунт
                        </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
