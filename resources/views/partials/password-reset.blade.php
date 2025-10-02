<div class="modal__content form-password-reset" style="display: none">
    <h1 class="modal__title">Смена пароля</h1>
    <form method="POST" action="{{ route('password.store') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <input type="hidden" name="token" value="{{ session('form_error_source') == 'password-reset' ? token : '' }}">
            <div>
                <label for="email" class="visually-hidden"></label>
                <input type="email" id="email-password-reset" name="email" class="modal__input"
                    value="{{ session('form_error_source') == 'password-reset' ? old('email') : '' }}"
                    placeholder="Введите email" required autofocus autocomplete="username" />

                <p class="modal__error" aria-live="polite">
                    @if ($errors->has('email') && session('form_error_source') == 'password-reset')
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </p>
            </div>
            <div class="password-field">
                <label for="input-password-reset" class="visually-hidden"></label>
                <input type="password" id="input-password-reset" name="password"
                    value="{{ session('form_error_source') == 'password-reset' ? old('password') : '' }}"
                    placeholder="Введите пароль" class="input-password" />
                <button type="button" id="toggle-password-reset" class="password-toggle">
                    <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Скрытый пароль"
                        class="visible-icon">
                    <img src="{{ asset('images/icons/password-eye.svg') }}" alt="Видимый пароль" class="hidden-icon">
                </button>
                <p class="modal__error">
                    @if ($errors->has('password') && session('form_error_source') == 'password-reset')
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </p>
            </div>
            <div class="password-field">
                <label for="input-password-reset-confirmation" class="visually-hidden"></label>
                <input type="password" id="input-password-reset-confirmation" name="password_confirmation"
                    value="{{ session('form_error_source') == 'password-reset' ? old('password_confirmation') : '' }}"
                    placeholder="Повторите пароль" class="input-password" />
                <button type="button" id="toggle-password-reset-confirmation" class="password-toggle">
                    <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Скрытый пароль"
                        class="visible-icon">
                    <img src="{{ asset('images/icons/password-eye.svg') }}" alt="Видимый пароль" class="hidden-icon">
                </button>
                <p class="modal__error">
                    @if ($errors->has('password_confirmation') && session('form_error_source') == 'password-reset')
                        <span>{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </p>
            </div>
        </div>
        <button data-close class="modal__btn">Сменить пароль!</button>
    </form>
</div>
