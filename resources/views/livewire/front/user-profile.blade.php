<div class="account-profile__wrapper">
    <nav class="account-profile__control">
        <p class="profile-full-name">{{ $user->last_name }} {{ $user->name }} {{ $user->patronymic ?? '' }}</p>
        <p class="profile-user-status">{{ $user->group->name }}</p> <span>{{ $user->group->discount }}</span>
        <ul class="account-profile__control-list">
            <li class="account-profile__control-item">
                <button data-target="profile-card" wire:click="selectPanel('profile')"
                    class="{{ $activePanel === 'profile' ? '_active' : '' }}">Настройки профиля</button>
            </li>
            <li class="account-profile__control-item">
                <button data-target="order-list-card" wire:click="selectPanel('orders')"
                    class="{{ $activePanel === 'orders' ? '_active' : '' }}">Мои заказы</button>
            </li>
            <li class="account-profile__control-item">
                <a href="#" wire:click.prevent="logout">Выйти</a>
            </li>
            <li class="account-profile__control-item">
                <button class="account-profile__control-btn">
                    <a href="/" download>Скачать прайс</a>
                </button>
            </li>
        </ul>
    </nav>
    <div class="account-profile__action">
        <div id="profile-card"
            class="account-profile__action-card profile-card {{ $activePanel === 'profile' ? '_active' : '' }}">
            <div class="account-profile__card-container">
                <h3 class="account-profile__card-title">Настройки профиля</h3>
                <form action="" class="account-profile__form">
                    <div class="account-profile__form-container">
                        <div class="account-profile__input-wrapper">
                            <div class="account-profile__row-wrapper">
                                <div class="input-group">
                                    <input type="text" name="profile-surname" id="profile-surname" placeholder=" "
                                        value="{{ $user->last_name }}">
                                    <label for="profile-surname">Фамилия</label>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">
                                <div class="input-group profile-name">
                                    <input type="text" name="profile-name" id="profile-name" placeholder=" "
                                        value="{{ $user->name }}">
                                    <label for="profile-name">Имя</label>
                                    <button type="button" id="profile-check-name" class="profile-check-tick">
                                        <img src="./img/icons/check-green.svg" alt="Имя проверено">
                                    </button>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">
                                <div class="input-group">
                                    <input type="text" name="profile-patronymic" id="profile-patronymic"
                                        placeholder=" " value="{{ $user->patonymic }}">
                                    <label for="profile-surname">Отчество</label>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">
                                <div class="input-group profile-email">
                                    <input type="email" name="profile-email" id="profile-email" placeholder=" "
                                        value="{{ $user->email }}">
                                    <label for="profile-name">Email</label>
                                    <button type="button" id="profile-check-email" class="profile-check-tick">
                                        <img src="./img/icons/check-green.svg" alt="Email проверен">
                                    </button>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">
                                <div class="input-group">
                                    <input type="tel" name="profile-phone" id="profile-phone" placeholder=" ">

                                    <label for="profile-phone">Телефон </label>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">
                                <div class="input-group">
                                    <input type="text" name="profile-city" id="profile-city" placeholder=" ">
                                    <label for="profile-city">Город</label>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="profile-company" id="profile-company" placeholder=" ">
                                    <label for="profile-company">Наименование организации</label>
                                </div>
                            </div>
                            <div class="account-profile__row-wrapper">

                                <div class="account-profile__radio-group" role="radiogroup"
                                    aria-labelledby="gender-label">
                                    <p id="gender-label" class="radio-group__label">Пол:</p>
                                    <div class="radio-option">
                                        <input type="radio" id="male" name="gender" value="male"
                                            aria-checked="false">
                                        <label for="male" class="radio-label">
                                            <span class="custom-radio"></span>
                                            Мужской
                                        </label>
                                    </div>
                                    <div class="radio-option">
                                        <input type="radio" id="female" name="gender" value="female"
                                            aria-checked="false">
                                        <label for="female" class="radio-label">
                                            <span class="custom-radio"></span>
                                            Женский
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="account-profile__address-title">Адрес доставки</h3>
                        <div class="account-profile__address-wrapper">
                            <ul class="account-profile__list-wrapper">
                                <li class="account-profile__item">
                                    <div class="account-profile__item-wrapper">
                                        <div class="account-profile__left-wrapper">
                                            <input type="radio" name="select-address" checked />
                                            <p class="account-profile__address">г. Москва, ул. Калужская,
                                                79, оф. 16
                                            </p>
                                        </div>
                                        <button data-modal-link="address" type="button"
                                            class="account-profile__btn-edit-address"
                                            aria-label="Редактировать адрес">
                                            <svg width="20" height="20">
                                                <use href="img/icons/edit.svg"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                                <li class="account-profile__item">
                                    <div class="account-profile__item-wrapper">
                                        <div class="account-profile__left-wrapper">
                                            <input type="radio" name="select-address" />
                                            <p class="account-profile__address">г. Санкт-Петербург, Невский
                                                пр-т,
                                                д.123, оф. 282
                                            </p>
                                        </div>
                                        <button data-modal-link="address" type="button"
                                            class="account-profile__btn-edit-address"
                                            aria-label="Редактировать адрес">
                                            <svg width="20" height="20">
                                                <use href="img/icons/edit.svg"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <button data-modal-link="address" class="account-profile__address-add">
                                <span>Добавить адрес доставки</span>
                                <img src="img/icons/plus.svg" alt="добавить адрес">
                            </button>
                        </div>
                        <button data-modal-link="delete-profile-modal" wire:click.prevent="deleteUser"
                            wire:confirm="Вы уверены, что хотите удалить профиль?"
                            class="account-profile__btn-delete">Удалить профиль</button>
                    </div>
                </form>
            </div>
        </div>
        <div id="order-list-card"
            class="account-profile__action-card order-list-card {{ $activePanel === 'orders' ? '_active' : '' }}">
            <div class="account-profile__card-container">
                <h3 class="account-profile__card-title">Мои заказы</h3>
                <div class="order-list__top-wrapper">
                    <div class="order-list__date-wrapper">
                        <div class="order-list__date-from-wrapper">
                            <div class="custom-date-input">
                                <span class="date-label">От</span>
                                <input type="text" name="date-from" id="date-from" class="date-input"
                                    placeholder="дд.мм.гггг" readonly>
                                <span class="date-icon">
                                    <svg width="20" height="20">
                                        <use href="img/icons/calendar-lines.svg"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="order-list__date-from-wrapper">
                            <div class="custom-date-input">
                                <span class="date-label">До</span>
                                <input type="text" name="date-from" id="date-until" class="date-input"
                                    placeholder="дд.мм.гггг" readonly>
                                <span class="date-icon">
                                    <svg width="20" height="20">
                                        <use href="img/icons/calendar-lines.svg"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="order-list__filter-body">
                        <select class="filter__select" name="sort" id="sort">
                            <option value="all" placeholder>Все заказы</option>
                            <option value="progress">В обработке</option>
                            <option value="shipped">Отправлен</option>
                            <option value="completed">Выполнен</option>
                            <option value="canceled">Отменён</option>
                        </select>
                    </div>

                </div>
                <div class="order-grid">
                    <div class="grid-header">
                        <div>Номер</div>
                        <div>Дата</div>
                        <div>Оплата</div>
                        <div>Доставка</div>
                        <div>Сумма</div>
                        <div>Статус</div>
                    </div>
                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_1" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_1">№
                                2025/2356</label>
                        </div>
                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Онлайн</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>Деловые Линии</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>427 560 ₽</span>
                        </div>

                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(0, 134, 201, 1);"></span><span>Выполнен</span>
                        </div>
                    </div>
                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_2" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_2">№
                                2025/435</label>
                        </div>
                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Наличные</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>СДЭК</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>7 560 ₽</span>
                        </div>

                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(247, 144, 9, 1);"></span><span>В
                                обработке</span>
                        </div>
                    </div>
                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_3" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_3">№
                                2025/456</label>
                        </div>
                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Онлайн</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>Самовывоз</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>2 327 560 ₽</span>
                        </div>

                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(164, 167, 174, 1);"></span><span>Отменен</span>
                        </div>
                    </div>

                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_4" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_4">№
                                2025/12</label>
                        </div>

                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Онлайн</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>СДЭК</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>27 560 ₽</span>
                        </div>


                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(18, 183, 106, 1);"></span><span>Отправлен</span>
                        </div>
                    </div>
                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_5" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_5">№
                                2025/456</label>
                        </div>

                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Онлайн</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>СДЭК</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>27 560 ₽</span>
                        </div>

                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(0, 134, 201, 1);"></span><span>Выполнен</span>
                        </div>
                    </div>
                    <div class="account-profile__order-item">
                        <div class="grid-cell selector-cell">
                            <input type="radio" name="selected-row" id="order-item_6" class="row-selector">
                            <span class="order-number__mobile">Заказ</span> <label for="order-item_6">№
                                2025/1256</label>
                        </div>
                        <div class="grid-cell date-cell">
                            <span class="order-date__mobile">Дата:</span>
                            <span>20.12.2025 г</span>
                        </div>
                        <div class="grid-cell"><span class="order-pay__mobile">Оплата:
                            </span><span>Онлайн</span></div>
                        <div class="grid-cell">
                            <span class="order-delivery__mobile">Доставка: </span>
                            <span>СДЭК</span>
                        </div>
                        <div class="grid-cell">
                            <span class="order-price__mobile">Сумма:</span>
                            <span>27 560 ₽</span>
                        </div>

                        <div class="grid-cell status-cell"><span class="status-dot"
                                style="background-color: rgba(0, 134, 201, 1);"></span><span>Выполнен</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-page__show">
                <button>Показать еще</button>
            </div>
            <div class="product-page__pagination">
                <div class="product-page__pagination-content">
                    <button>
                        <img src="./img/icons/tick-grey.svg" alt="влево">
                        <img src="./img/icons/tick-black.svg" style="display: none; transform:rotateZ(180deg)"
                            alt="влево">
                    </button>
                    <ul class="product-page__page-list">
                        <li data-pagination><button class="_active">1</button></li>
                        <li data-pagination><button>2</button></li>
                        <li data-pagination><button>3</button></li>
                        <li data-pagination><button>4</button></li>
                        <li data-pagination><button>5</button></li>
                        <li data-pagination><button>...</button></li>
                        <li data-pagination><button>21</button></li>
                    </ul>
                    <button>
                        <img src="./img/icons/tick-grey.svg" style="display: none; transform:rotateZ(180deg)"
                            alt="вправо">
                        <img src="./img/icons/tick-black.svg" alt="вправо">
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>
