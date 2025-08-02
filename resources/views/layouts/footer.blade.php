<footer id="footer" class="footer">
   <div class="footer__container container">
      <div class="footer__subscribe-wrapper">
         <p class="footer__subscribe-text">Подпишитесь на рассылку, чтобы быть в курсе новых поступлений и актуальных
            новостей на рынке промышленного оборудования!
         </p>
         <form action="#" class="footer__subscribe-form">
            <input type="email" class="footer__subscribe-input" placeholder="Введите email">
            <button type="submit" class="footer__subscribe-btn"><span>Подписаться</span>
            <img src="images/icons/bell.svg" alt="подписаться">
            </button>
         </form>
      </div>
      <div class="footer__content">
         <div class="footer__about">
            <img src="images/icons/logo.svg" alt="лого">
            <p class="footer__address">г. Всеволожск, ул. Аэропортовская, 14</p>
         </div>
         <nav class="footer__nav">
            <div class="footer__connect">
               <h5 class="footer__title">Мы на связи</h5>
               <div class="footer__connect-wrapper">
                  <a href="tel:+78122008275">
                     <img src="images/icons/phone-stroke.svg" alt="телефон">
                     <span>+7 812 200 82 75</span>
                  </a>
                  <a href="mailto:info@kevtek.ru">
                     <img src="images/icons/envelope-stroke.svg" alt="почта">
                     <span>info@kevtek.ru</span>
                  </a>
                  <a href="geo:59.99512081700448,30.641846915269824">
                     <img src="images/icons/location.svg" alt="адрес">
                     <p>г. Всеволожск ул. Аэропортовская, 14</p>
                  </a>
               </div>
               <button class="footer__write-btn">Написать нам</button>
            </div>
            <div class="footer__messenger">
               <h5 class="footer__title">Мессенджеры</h5>
               <div class="footer__messenger-wrapper">
                  <a href="https://whatsapp.com/"><img src="images/icons/whatsapp.svg" alt="whatsapp"></a>
                  <a href="https://www.viber.com/"><img src="images/icons/viber.svg" alt="viber"></a>
                  <a href="https://telegram.org/"><img src="images/icons/telegram.svg" alt="telegram"></a>
               </div>
            </div>
            <div class="footer__info">
               <h5 class="footer__title">Информация</h5>
               <ul class="footer__info-list">
                  <li><a href="#">О компании</a></li>
                  <li><a href="#">Новости</a></li>
                  <li><a href="#">Документация</a></li>
                  <li><a href="#">Статьи</a></li>
                  <li><a href="#">Бренды</a></li>
               </ul>
            </div>
            <div class="footer__buyers">
               <h5 class="footer__title">Покупателям</h5>
               <ul class="footer__buyers-list">
                  <li><a href="#">Юридическим лицам</a></li>
                  <li><a href="#">Физическим лицам</a></li>
                  <li><a href="#">Обратная связь</a></li>
                  <li><a href="#">Контакты</a></li>
                  <li><a href="#">Публичная оферта</a></li>
               </ul>
            </div>
         </nav>
      </div>
   </div>
   <div class="footer__copyright">
      <div class="footer__container container">
         <div class="footer__copyright-wrapper">
            <p class="footer__copyright-text">
               © 2023-2024 ООО «КевТек»
            </p>
            <p class="footer__agreement">
               Вы принимаете условия <a href="#">политики в отношении обработки персональных данных</a>  и <a
                  href="#"> пользовательского соглашения,</a> когда оставляете свои данные в формах обратной связи на
               kevtek.ru
            </p>
         </div>
      </div>
   </div>
</footer>

<div id="scroll" class="scroll">
   <span>+</span>
</div>

<div data-modal="account" class="modal">
   <div data-close="true" class="modal__overlay">
      <div class="modal__body">
         <span data-close="true" class="modal__close">&#10006;</span>
         <div class="modal__content">
            <h1 class="modal__title">Войти</h1>
            <form action="#" class="modal__form">
               <div class="modal__input-container">
                  <div>
                     <label for="modal-email" class="visually-hidden"></label>
                     <input type="email" id="input-email" name="input-email" class="modal__input"
                        placeholder="Введите email" required autocomplete="username">
                     <p class="modal__error" aria-live="polite">
                        <span hidden>Email содержит
                           некорректные символы</span>

                     </p>
                  </div>
                  <div>
                     <label for="modal-password" class="visually-hidden"></label>
                     <input type="password" id="input-password" name="input-password" placeholder="Введите пароль" autocomplete="current-password">
                  
                     <button type="button" id="toggle-password" class="password-toggle">
                        <img src="./img/icons/password-eye-cross.svg" alt="Показать пароль">
                     </button>
                     <p class="modal__error"><span hidden>Неверный логин или пароль</span></p>
                  </div>
               </div>
               <div>
                  <a href="#" class="modal__forget-password">Забыли пароль?</a>
               </div>
               <button data-close class="modal__btn">Войти</button>
            </form>
            <p class="modal__policy">
               Нажимая кнопку «Войти», вы соглашаетесьc условиями <a href="#">политики конфиденциальности</a>
            </p>
         </div>
      </div>
   </div>
</div>