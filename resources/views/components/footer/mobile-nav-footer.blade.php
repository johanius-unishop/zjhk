<nav class="mobile__nav-footer">
    <div class="mobile__container container">
        <ul class="mobile__actions-list">
            <li class="mobile__actions-item">
                <span style="display: none">5</span>
                <a href="{{ route('home') }}" >
                    <img src="images/icons/home.svg" alt="Главная">
                    <span>Главная</span>
                </a>
            </li>
            <li class="mobile__actions-item">
                <a href="#">
                    <img src="images/icons/catalog-black.svg" alt="Каталог">
                    <span>Каталог</span>
                </a>
            </li>
            <li class="mobile__actions-item">
                <span style="display: none">5</span>
                <a href="#">
                    <img src="images/icons/cart.svg" alt="Корзина">
                    <span>Корзина</span>
                </a>
            </li>

            <li class="mobile__actions-item">
                <a data-modal-link="account" href="{{ route('login') }}" style="display: flex" data-toggle="modal" data-target="#loginModal">
                    <img src="images/icons/login.svg" alt="Логин">
                    <span>Кабинет</span>
                </a>
                <span style="display: none">11</span>
                <a style="display: none" href="#">
                    <img src="images/icons/account.svg" alt="Аккаунт">
                    <span>Александр</span>
                </a>
            </li>
            <li class="mobile__actions-item">
                <button class="mobile__side-btn">
                    <img src="images/icons/menu-black.svg" alt="меню">
                    <span>Меню</span>
                </button>
            </li>
        </ul>
    </div>
    <div id="mobile__side" class="mobile__side-overlay">
        <div class="mobile__side-content">
            <div class="mobili__side-top">
                <div class="mobile__side-left">
                    <div>
                        <span style="display: none">5</span>
                        <a href="#" data-link="close">
                            <img src="images/icons/box-stroke.svg" alt="заказы">
                            <span>Заказы</span>
                        </a>
                    </div>
                    <div>
                        <span style="display: none">5</span>
                        <a href="#" data-link="close">
                            <img src="images/icons/bookmark.svg" alt="избранное">
                            <span>Избранное</span>
                        </a>
                    </div>
                </div>
                <div class="mobile__side-right">
                    <button><img src="images/icons/plus.svg" alt="закрыть"></button>
                </div>
            </div>
            <h3>Информация</h3>
            <ul class="mobile__side-list">
                <li><a href="{{ route('about') }}" data-link="close">О компании</a></li>
                <li><a href="{{ route('news.index') }}" data-link="close">Новости</a></li>
                <li><a href="#" data-link="close">Документация</a></li>
                <li><a href="{{ route('article.index') }}" data-link="close">Статьи</a></li>
                <li><a href="#" data-link="close">Бренды</a></li>
            </ul>
            <h3>Покупателям</h3>
            <ul class="mobile__side-list">
                <li><a href="#" data-link="close">Юридическим лицам</a></li>
                <li><a href="#" data-link="close">Физическим лицам</a></li>
                <li><a href="#" data-link="close">Обратная связь</a></li>
                <li><a href="#" data-link="close">Контакты</a></li>
                <li><a href="#" data-link="close">Публичная оферта</a></li>
            </ul>
        </div>
    </div>
</nav>