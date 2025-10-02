<div class="modal__content form-verify-email" style="display: none">
    <h1 class="modal__title">Подтверждение E-mail</h1>
    <form method="POST" action="{{ route('verification.resend') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">

            <div>
                <p class="notes__attention"><strong>Спасибо за регистрацию!</strong></p>
                <p class="notes__standard">Перед началом работы, пожалуйста, подтвердите свою электронную почту, перейдя по ссылке, которую мы отправили Вам на указанный Вами адрес электронной почты.</p>
                <p class="notes__final">Если письмо не пришло или просрочено, Вы можете запросить повторную отправку письма с ссылкой подтверждения.</p>
            </div>
            <div>
                <label for="email" class="visually-hidden"></label>
                <input type="email" id="email-verify" name="email" class="modal__input"
                    value="{{ session('form_error_source') == 'verify-notes' ? old('email') : '' }}" placeholder="Введите email"
                    required autofocus autocomplete="username" />

                <p class="modal__error" aria-live="polite">
                    @if ($errors->has('email') && session('form_error_source') == 'verify-notes')
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </p>
            </div>
        </div>
        <button data-close class="modal__btn">Запросить письмо!</button>
    </form>
</div>
