<div class="modal__content form-password-reset-link" style="display: none">
    <h1 class="modal__title">Сброс пароля</h1>
    <form method="POST" action="{{ route('password.email') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <div>
                <p class="notes__attention"><strong>Забыли пароль?</strong></p>
                <p class="notes__standard">Сообщите нам свой email, и мы отправим Вам ссылку для сброса пароля, которая
                    позволит установить новый.</p>

            </div>
            <div>
                <label for="email" class="visually-hidden"></label>
                <input type="email" id="email-password-reset-link" name="email" class="modal__input"
                    value="{{ session('form_error_source') == 'password-reset-link' ? old('email') : '' }}"
                    placeholder="Введите email" required autofocus autocomplete="username" />

                <p class="modal__error" aria-live="polite">
                    @if ($errors->has('email') && session('form_error_source') == 'password-reset-link')
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </p>
            </div>
        </div>
        <button data-close class="modal__btn">Сбросить пароль!</button>
        <p class="back-account">
            <a href="#" class="modal__account-link switch-to-signin no-scroll-to-handle">
                Назад
            </a>
        </p>
    </form>
</div>
