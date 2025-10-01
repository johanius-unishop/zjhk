<div class="modal__content form-verify-email" style="display: none">
    <h1 class="modal__title">Подтверждение E-mail</h1>
    <form method="POST" action="{{ route('verification.resend') }}" class="modal__form">
        @csrf
        <div class="modal__input-container">
            <div>
                <p>Спасибо за регистрацию! Перед началом работы подтвердите, пожалуйста, свою электронную почту, перейдя по ссылке, которую мы отправили Вам на указанный Вами адрес электронной почты.</p>
            </div>
        </div>
        <button data-close class="modal__btn">Повторно отправить письмо с подтверждением</button>
    </form>
</div>
