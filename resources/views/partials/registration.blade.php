 <div class="modal__content form-signup" style="display: none">
     <h1 class="modal__title">Зарегистрироваться</h1>
     <form method="POST" action="{{ route('register') }}" class="modal__form">
         @csrf
         <div class="modal__input-container">
             <div>
                 <label for="name" class="visually-hidden"></label>
                 <input type="text" id="input-name-reg" name="name" class="modal__input"
                     value="{{ session('form_error_source') == 'registration' ? old('name') : '' }}" placeholder="Введите имя"
                     required autofocus />
                 <p class="modal__error">
                     @if ($errors->has('name') && session('form_error_source') == 'registration')
                         <span>{{ $errors->first('name') }}</span>
                     @endif
                 </p>
             </div>
             <div>
                 <label for="last_name" class="visually-hidden"></label>
                 <input type="text" id="input-last-name-reg" name="last_name" class="modal__input"
                     value="{{ session('form_error_source') == 'registration' ? old('last_name') : '' }}"
                     placeholder="Введите фамилию" required>
                 <p class="modal__error">
                     @if ($errors->has('last_name') && session('form_error_source') == 'registration')
                         <span>{{ $errors->first('last_name') }}</span>
                     @endif
                 </p>
             </div>
             <div>
                 <label for="email" class="visually-hidden"></label>
                 <input type="email" id="input-email-reg" name="email" class="modal__input"
                     value="{{ session('form_error_source') == 'registration' ? old('email') : '' }}" placeholder="Введите email"
                     required />
                 <p class="modal__error" aria-live="polite">
                     @if ($errors->has('email') && session('form_error_source') == 'registration')
                         <span>{{ $errors->first('email') }}</span>
                     @endif
                 </p>
             </div>
             <div class="password-field">
                 <label for="input-password-reg" class="visually-hidden"></label>
                 <input type="password" id="input-password-reg" name="password"
                     value="{{ session('form_error_source') == 'registration' ? old('password') : '' }}" placeholder="Введите пароль"
                     class="input-password" />
                 <button type="button" id="toggle-password-reg" class="password-toggle">
                     <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Скрытый пароль"
                         class="visible-icon">
                     <img src="{{ asset('images/icons/password-eye.svg') }}" alt="Видимый пароль" class="hidden-icon">
                 </button>
                 <p class="modal__error">
                     @if ($errors->has('password') && session('form_error_source') == 'registration')
                         <span>{{ $errors->first('password') }}</span>
                     @endif
                 </p>
             </div>
             <div class="password-field">
                 <label for="input-password-reg-confirmation" class="visually-hidden"></label>
                 <input type="password" id="input-password-reg-confirmation" name="password_confirmation"
                     value="{{ session('form_error_source') == 'registration' ? old('password_confirmation') : '' }}"
                     placeholder="Повторите пароль" class="input-password" />
                 <button type="button" id="toggle-password-reg-confirmation" class="password-toggle">
                     <img src="{{ asset('images/icons/password-eye-cross.svg') }}" alt="Скрытый пароль"
                         class="visible-icon">
                     <img src="{{ asset('images/icons/password-eye.svg') }}" alt="Видимый пароль" class="hidden-icon">
                 </button>
                 <p class="modal__error">
                     @if ($errors->has('password_confirmation') && session('form_error_source') == 'registration')
                         <span>{{ $errors->first('password_confirmation') }}</span>
                     @endif
                 </p>
             </div>
         </div>
         <button data-close class="modal__btn">Зарегистрироваться</button>
         <p class="modal__policy">
             Нажимая кнопку «Зарегистрироваться», Вы соглашаетесь c условиями
             <a href="#">политики конфиденциальности</a>
         </p>
         @if ($loginSocial['loginGoogle'] || $loginSocial['loginYandex'] || $loginSocial['loginVk'])
             <p class="modal__select-social">Зарегистрироваться с помощью</p>
             <div class="register-social__wrapper">
                 @if ($loginSocial['loginGoogle'])
                     <button data-close class="register-social__btn">
                         <span>Google</span>
                         <svg width="24" height="24">
                             <use href="{{ asset('images/icons/googl.svg') }}"></use>
                         </svg>
                     </button>
                 @endif
                 @if ($loginSocial['loginYandex'])
                     <button data-close class="register-social__btn">
                         <span>Яндекс</span>
                         <svg width="24" height="20">
                             <use href="{{ asset('images/icons/yandex.svg') }}"></use>
                         </svg>
                     </button>
                 @endif
                 @if ($loginSocial['loginVk'])
                     <button data-close class="register-social__btn">
                         <span>VK</span>
                         <svg width="23" height="23">
                             <use href="{{ asset('images/icons/vk.svg') }}"></use>
                         </svg>
                     </button>
                 @endif
             </div>
         @endif
         <p class="not-account">
             <a href="#" class="modal__account-link switch-to-signin no-scroll-to-handle">
                 У меня уже есть аккаунт
             </a>
         </p>
     </form>
 </div>
