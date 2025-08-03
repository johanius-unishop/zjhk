


<div data-modal="account" class="modal" id="loginModal">
                <div data-close="true" class="modal__overlay">
                    <div class="modal__body">
                        <span data-close="true" class="modal__close">✖</span>
                        <div class="modal__content">
                            <h1 class="modal__title">Войти</h1>
                            <form method="POST" action="{{ route('login') }}" class="modal__form">
                                @csrf <!-- Не забудьте добавить токен CSRF -->
                            <div class="modal__input-container">
                                <div>
                                    <label for="input-email" class="visually-hidden"></label>
                                    <input type="email" id="input-email" name="email" class="modal__input"
                                        placeholder="Введите email" required autocomplete="username">
                                    <p class="modal__error" aria-live="polite">
                                        <span hidden>{{ session('errors.input-email') ?? '' }}</span>
                                    </p>
                                </div>
                                <div>
                                    <label for="input-password" class="visually-hidden"></label>
                                    <input type="password" id="input-password" name="password" placeholder="Введите пароль" autocomplete="current-password">
                                    
                                    <button type="button" id="toggle-password" class="password-toggle">
                                        <img src="images/icons/password-eye-cross.svg" alt="Показать пароль">
                                    </button>
                                    <p class="modal__error"><span hidden>{{ session('errors.input-password') ?? '' }}</span></p>
                                </div>
                                
                            </div>
                            <div>
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Запомнить меня') }}
                                    </label>
                                </div>
                            <div>
                                <a href="/forgot-password" class="modal__forget-password">Забыли пароль?</a>
                            </div>
                            <button type="submit" class="modal__btn">Войти</button>
                            </form>
                            <p class="modal__policy">
                            Нажимая кнопку «Войти», вы соглашаетесь c условиями <a href="#">политики конфиденциальности</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</div>

@section('scripts')
@parent

@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif
@endsection