@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    <main>
        <section class="contacts">
            <div class="contacts__container container">
                @include('components.breadcrumbs')
                <div class="contacts__content">
                    <h2 class="contacts__title">Контакты</h2>
                    <p class="contacts__text">Наши менеджеры и технические специалисты обладают богатым опытом работы с
                        промышленным оборудованием. Вам не нужно изучать каталогии информацию, представленные на сайте или
                        в другом месте. Мы поможем с подбором разъемов по Вашим требованиям или подберем аналог разъема,
                        ранее использовавшегося Вами.</p>
                    <div class="contacts__wrapper">
                        <div class="contacts__info-wrapper">
                            <div class="contacts__item-wrapper">
                                <h3>Электронная почта:</h3>
                                <a href="mailto:info@kevtek.ru">info@kevtek.ru</a>
                            </div>
                            <div class="contacts__item-wrapper">
                                <h3>Телефон:</h3>
                                <a href="tel:+78122008275">+7 (812) 200 82 75</a>
                            </div>
                            <div class="contacts__item-wrapper">
                                <h3>График работы:</h3>
                                <div>
                                    <p>Пн-пт: 10:00 - 18:00</p>
                                    <p>Сб-вс: выходной</p>
                                </div>
                            </div>
                            <div class="contacts__item-wrapper">
                                <h3>Адрес:</h3>
                                <p>г. Всеволожск, улица Аэропортовская, 14</p>
                            </div>
                            <div class="contacts__item-wrapper">
                                <h3>Реквизиты:</h3>
                                <p class="contacts__item-details">Общество с ограниченной ответственностью «КевТек»</br>
                                    Дата регистрации компании: 10 марта 2023 года</br>
                                    ОГРН 1234700004912 от 10 марта 2023 года</br>
                                    <strong>ИНН:</strong> 4706057430</p>
                            </div>
                        </div>
                        <div class="contacts__form-container">
                            <div class="contacts__form-body">
                                <div class="contacts__form-top-wrapper">
                                    <div class="contacts__img-container">
                                        <img src="/images/icons/gears.svg" alt="на связи">
                                    </div>
                                    <div class="contacts__call-action-wrapper">
                                        <h2>Мы на связи!</h2>
                                        <p>Наши специалисты ответят вам в ближайшее время</p>
                                    </div>
                                </div>
                                <form class="contacts__form">
                                    <div class="contacts__form-wrapper">
                                        <label for="name" class="visually-hidden">Ваше имя</label>
                                        <input type="text" name="name" id="name" placeholder="Ваше имя" required>

                                        <label for="phone" class="visually-hidden">Номер телефона</label>
                                        <input type="tel" name="phone" id="phone" placeholder="Номер телефона"
                                            required>

                                        <label for="email" class="visually-hidden">Email</label>
                                        <input type="email" name="email" id="email" placeholder="Email" required>

                                        <label for="message" class="visually-hidden">Ваше сообщение</label>
                                        <textarea name="message" id="message" placeholder="Введите сообщение" required></textarea>
                                    </div>

                                    <button type="submit" class="contacts__submit">Отправить</button>
                                    <p class="contacts__notice">Отправляя заявку, вы соглашаетесь с политикой
                                        конфиденциальности</p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="map" class="contacts__map"></div>
                </div>
            </div>
        </section>
    </main>

@endsection

@section('css')


@stop

@yield('scripts')

@section('js')

    @if ($errors->has('email') || $errors->has('password'))
        <script>
            $(function() {
                $('#loginModal').modal({
                    show: true
                });
            });
        </script>
    @endif
@stop
