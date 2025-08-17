<div class="header__top">
    <div class="header__container container">
        <div class="header__top-wrapper">
            <div class="header__contacts">
                <div class="header__phone-wrapper">
                    <a class="header__phone-link" href="tel:+78122008275">
                        <img src={{ asset('images/icons/phone-stroke.svg') }} alt="телефон">
                        <span>+7 (812) 200 82 75</span>
                        <img src={{ asset('images/icons/arrow-down.svg') }}  alt="список телефонов">
                    </a>
                    <ul class="header__submenu">
                        <li><a href="tel:+79313668687">+7 (931) 366 86 87 (Евгений)</a> </li>
                    </ul>
                </div>
                <a class="header__email-wrapper" href="mailto:info@kevtek.ru">
                    <img src={{ asset('images/icons/envelope-stroke.svg') }}  alt="почта">
                    <span>info@kevtek.ru</span>
                </a>
            </div>
            <nav class="header__nav-pages">
                <ul class="header__nav-list">
                    <li class="header__nav-item">
                        <a href="{{ route('about') }}" class="header__nav-link">О компании</a>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">
                            <span>Покупателям</span>
                            <img src={{ asset('images/icons/arrow-down.svg') }}  alt="список покупателям">
                        </a>
                        <ul class="header__submenu">
                            <li><a href="#">Юридическим лицам</a></li>
                            <li><a href="#">Физическим лицам</a></li>
                        </ul>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link">
                            <span>Полезное</span>
                            <img src={{ asset('images/icons/arrow-down.svg') }}  alt="список полезное">
                        </a>
                        <ul class="header__submenu">
                            <li><a href="{{ route('documentation') }}">Документация</a></li>
                            <li><a href="{{ route('articles') }}">Статьи</a></li>
                            <li><a href="{{ route('news') }}">Новости</a></li>
                            <li><a href="#">Бренды</a></li>
                        </ul>
                    </li>
                    <li class="header__nav-item">
                        <a href="#" class="header__nav-link"><span>Помощь</span>
                            <img src={{ asset('images/icons/arrow-down.svg') }}  alt="список помощь">
                        </a>
                        <ul class="header__submenu">
                            <li><a href="{{ route('question') }}">Вопрос-Ответ</a></li>
                            <li><a href="#">Задать вопрос</a></li>
                        </ul>
                    </li>
                    <li class="header__nav-item">
                        <a href="{{ route('contacts') }}" class="header__nav-link">Контакты</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
