@extends('layouts.app')

@section('title', 'Личный кабинет | Профиль')

@section('content')
    <main>
        <section class="account-profile">
            <div class="account-profile__container container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li><a href="#">Главная</a><img src="{{ asset('images/icons/arrow-right.svg') }}" alt="стрелка">
                        </li>
                        <li><span>Личный кабинет</span></li>
                    </ul>
                </div>
                <h2 class="account-profile__title">Личный кабинет</h2>
                @livewire('front.user-profile', [
                    'user' => $user,
                ])
            </div>
        </section>
        <div data-modal="address" class="modal">
            <div data-close="true" class="modal__overlay">
                <div class="modal__body modal-body-address">
                    <span data-close="true" class="modal__close">&#10006;</span>
                    <div class="modal__content">
                        <h1 class="modal__title">Адрес доставки</h1>
                        <form action="#" class="modal__form">
                            <div class="modal-address__wrapper">
                                <div class="order-list__filter-body address">
                                    <select class="filter__select" name="recipient-country" id="recipient-country">
                                        <option value="all" placeholder>Выберите страну</option>
                                        <option value="progress">Россия</option>
                                        <option value="shipped">Казахстан</option>
                                        <option value="completed">Беларусь</option>
                                        <option value="canceled">Армения</option>
                                        <option value="canceled">Грузия</option>
                                    </select>
                                </div>
                                <div class="order-list__filter-body address city">
                                    <select class="filter__select" name="recipient-city" id="recipient-city">
                                        <option value="all" placeholder>Выберите город</option>
                                        <option value="progress">Москва</option>
                                        <option value="shipped">Санкт-Петербург</option>
                                        <option value="completed">Казань</option>
                                        <option value="canceled">Иркутск</option>
                                        <option value="canceled">Новосибирск</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="recipient-address" id="recipient-address" placeholder=" ">
                                    <label for="profile-city">Улица, дом, квартира (офис) <span
                                            class="required">*</span></label>
                                </div>
                                <div class="input-group">
                                    <input type="text" name="recipient-name" id="recipient-name" placeholder=" ">
                                    <label for="profile-city">ФИО получателя <span class="required">*</span></label>
                                </div>
                            </div>
                            <button data-close class="modal__btn save-address">Сохранить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div data-modal="delete-profile-modal" class="modal">
            <div data-close="true" class="modal__overlay">
                <div class="modal__body">
                    <span data-close="true" class="modal__close">&#10006;</span>
                    <div class="modal__content">
                        <h1 class="modal__title">Удалить профиль</h1>
                        <p class="delete-profile__text">Вы уверены, что хотите удалить профиль со всеми данными?</p>
                        <button data-close class="modal__btn del" wire:click.prevent="deleteUser">Удалить профиль</button>
                    </div>
                </div>
            </div>
        </div>
        <div data-modal="deleted-profile-modal" class="modal" style="display: none;">
            <div data-close="true" class="modal__overlay">
                <div class="modal__body">
                    <span data-close="true" class="modal__close">&#10006;</span>
                    <div class="modal__content">
                        <h1 class="modal__title">Профиль удалён</h1>
                        <p class="delete-profile__text">Вы можете <a href="#">
                                зарегистрироватьс
                            </a> или <a href="#">войти</a> под другим профилем</p>
                        <button data-close class="modal__btn">Понятно</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('css')
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/addons/cleave-phone.ru.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var phoneNumberElement = document.getElementById('profile-phone');
            new Cleave(phoneNumberElement, {
                prefix: '+7',
                phone: true,
                phoneRegionCode: 'RU'
            });
        });
    </script>
@endsection
