<div class="modal__content form-verify-email" style="display: none">
    <h1 class="modal__title">Подтверждение E-mail</h1>
    <form method="POST" action="{{ route('verification.resend') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <div>
                <p><strong>Спасибо за регистрацию!</strong></p>
                <p>Перед началом работы, пожалуйста, подтвердите свою электронную почту, перейдя по ссылке, которую мы отправили Вам на указанный Вами адрес электронной почты.</p>
                <p>Если письмо не пришло или просрочено, Вы можете запросить повторную отправку письма с ссылкой подтверждения.</p>
            </div>
        </div>
        <button data-close class="modal__btn">Запросить письмо!</button>
    </form>
</div>
