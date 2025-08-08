@extends('layouts.app')

@section('title', SEOMeta::getTitle())

@section('content')
    <main>
        <section class="products-desc">
            <div class="products-desc__container container">
                @include('components.product-page.breadcrumbs')
                <div class="product-desc__content">
                    <div class="product-desc__title-container">
                        <h2>{{ $data['product']->productType->name }} {{ $data['product']->name }}</h2>
                        <div class="product-desc__testimonials-rating">
                            <ul>
                                <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                <li><img src="/images/icons/star.svg" alt="оценка"></li>
                            </ul>
                            <div>
                                <a href="#">127 отзывов |</a>
                                <a href="#">20 вопросов</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-desc__about">
                        <div class="product-desc__about-grid">
                            <div class="product-desc__left">
                                <div class="product-desc__slider">
                                    <div class="swiper thumbSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper photoSwiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">

                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-21.png" alt="товар">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="/images/products/photo-gallery-1.png" alt="товар">
                                            </div>
                                        </div>
                                        <div class="swiper-pagination-thumb"></div>
                                    </div>
                                    <div class="swiper-button-next prod"></div>
                                    <div style="display: none;" class="swiper-button-prev prod"></div>
                                </div>

                                <div class="product-desc__about-item">
                                    <div class="product-desc__card">
                                        <div class="product-desc__card-left">
                                            <h4 class="product-desc__card-title">{{ $data['product']->productType->name }}
                                            </h4>
                                            <div class="product-desc__card-wrapper">
                                                <p><span>Модель:
                                                    </span>
                                                    {{ $data['product']->name }}</p>
                                                <p><span>Артикул:
                                                    </span>
                                                    {{ $data['product']->article }}</p>
                                            </div>
                                            @include('components.product-page.short-description')
                                            <div class="product-desc__prop-link">
                                                <a href="#">Все характеристики</a>
                                                <img src="/images/icons/arrow-right.svg" alt="все характеристики">
                                            </div>
                                        </div>
                                        @include('components.product-page.features')
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc__about-item cart">
                                <div class="product-desc__cart-wrapper">
                                    <div class="product-desc__cart-actions">
                                        <button class="product-page__label-btn">
                                            <img class="product-page__label" src=".//images/icons/label-gray.svg"
                                                alt="избранное">В
                                            избранное
                                        </button>
                                        <button><img src="/images/icons/share.svg" alt="поделиться">
                                            Поделиться
                                        </button>
                                    </div>
                                    <div class="product-desc__cart-item">
                                        <div class="product-desc__cart-item-wrapper">
                                            <div>
                                                @include('components.product-page.price')
                                                @include('components.product-page.stock')
                                            </div>
                                            <div class="product-desc__cart-btn">
                                                <button class="product-page__add-cart">В корзину</button>
                                                <button class="product-desc__fast-order">Быстрый заказ</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-desc__options">
                                        <p><span>Самовывоз:
                                            </span>
                                            бесплатно</p>
                                        <p><span>Доставка:
                                            </span>
                                            от 399 ₽</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-desc__props">
            <div class="product-desc__container container">
                <div class="product-desc__props-nav">
                    <ul class="product-desc__props-nav-list">
                        <li data-nav="char"><a data-char href="#" class="_target">Характеристики</a></li>
                        <li data-nav="products"><a data-product href="#">Сопутствующие товары</a></li>
                        <li data-nav="analog"><a data-analog href="#">Аналоги</a></li>
                        <li data-nav="review"><a data-testimonial href="#">Отзывы</a></li>
                    </ul>
                </div>
                <p class="product-desc__props-mobile">Характеристики:</p>
                <div class="product-desc__props-img">
                    <img src="/images/content/presentation.jpg" alt="представление товара">
                </div>
                @include('components.product-page.description')
                <div class="product-desc__props-wrapper">
                    @include('components.product-page.technical-specifications2')

                    <div class="product-desc__props-options">
                        <div class="product-desc__props-left">
                            @include('components.product-page.brand-section')
                            @include('components.product-page.composition-set')
                            @include('components.product-page.dimensions-section')
                        </div>
                        @include('components.product-page.documents-section')
                    </div>
                </div>
            </div>
        </section>
        @include('components.product-page.related-products')
        <section class="product-desc__analog">
            <div class="product-desc__container container">
                <h2 class="product-desc__analog-title">Аналоги</h2>
                <div class="product-desc__analog-invite">
                    <img src="/images/icons/attention.svg" alt="войдите">
                    <p class="product-desc__analog-text">
                        <button data-modal-link="account"><span>Войдите</span>,</button>
                        чтобы увидеть европейские аналоги к данному товару.
                    </p>
                </div>
                <div class="product-desc__connection">
                    <div class="product-desc__connection-select">
                        <button class="_active">
                            Отзывы
                            <span>127</span>
                        </button>
                        <button>
                            Вопросы <span>30</span>
                        </button>
                    </div>
                    <div class="product-desc__testimonial-item">
                        <div class="product-desc__item-wrapper">
                            <div class="product-desc__item-content">
                                <div class="product-desc__item-gallery">
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                        </a>
                                    </div>
                                    <div class="product-desc__item-img">
                                        <a href="#">
                                            <img src="/images/products/review_photos.jpg" alt="фото товара">
                                            <span>+175</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-desc__item-sort">
                                    <div class="product-desc__item-sort-select">
                                        <div class="product-desc__item-sort-left">
                                            <span>Сортировать по:</span>
                                            <div class="product-desc__item-sort-target">
                                                <button data-sort class="_target">дате <img data-date class="_target"
                                                        src="/images/icons/sorting_by.svg" alt="сортировать">
                                                    <button data-sort>оценке <img data-rating
                                                            src="/images/icons/sorting_by.svg" alt="сортировать"></button>
                                                    <button data-sort>полезности <img data-useful
                                                            src="/images/icons/sorting_by.svg" alt="сортировать"></button>
                                            </div>
                                        </div>
                                        <div class="product-desc__item-sort-mobile">
                                            <button class="product-desc__mobile-sort-btn">
                                                <img src="/images/icons/sorting_by.svg" alt="сортировать">
                                            </button>
                                            <div class="product-desc__sort-submenu">
                                                <h4>Сортировать</h4>
                                                <ul>
                                                    <li>
                                                        <label class="sort-control">
                                                            <input type="radio" name="sort" checked />
                                                            По дате
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="sort-control">
                                                            <input type="radio" name="sort" />
                                                            По оценке
                                                        </label>
                                                    </li>
                                                    <li>
                                                        <label class="sort-control">
                                                            <input type="radio" name="sort" />
                                                            По полезности
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-desc__item-sort-right">
                                            <input type="checkbox" name="photo" id="photo">
                                            <span>C фото или видео</span>
                                        </div>
                                    </div>
                                    <div class="product-desc__item-client">
                                        <p class="product-desc__client-name">Александр В.</p>
                                        <div class="product-desc__client-rating">
                                            <span>21.05.24</span>
                                            <div class="product-desc__testimonials-rating">
                                                <ul>
                                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                                    <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-desc__benefit">
                                        <p>Достоинства</p>
                                        <p>Отличный товар!</p>
                                    </div>
                                    <div class="product-desc__benefit">
                                        <p>Недостатки</p>
                                        <p>Нет</p>
                                    </div>
                                    <div class="product-desc__benefit">
                                        <p>Комментарий</p>
                                        <p>Полностью соответствует заявленным характеристикам.</p>
                                        <div style="display: none;" class="product-desc__testimonial-gallery">
                                            <div class="product-desc__item-img">
                                                <a href="#">
                                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                                </a>
                                            </div>
                                            <div class="product-desc__item-img">
                                                <a href="#">
                                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                                </a>
                                            </div>
                                            <div class="product-desc__item-img">
                                                <a href="#">
                                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                                </a>
                                            </div>
                                            <div class="product-desc__item-img">
                                                <a href="#">
                                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                                </a>
                                            </div>
                                            <div class="product-desc__item-img">
                                                <a href="#">
                                                    <img src="/images/products/review_photos.jpg" alt="фото товара">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-desc__likes">
                                        <p><img src="/images/icons/thumbs_up.svg" alt="лайк">10</p>
                                        <p><img src="/images/icons/thumbs_down.svg" alt="дизлайк">0</p>
                                        <a href="#">Ответить</a>
                                    </div>
                                    <div class="product-desc__answer">
                                        <p>Ответ представителя <img src="/images/icons/arrow-down.svg"
                                                alt="ответ представителя">
                                        </p>
                                        <p>Здравствуйте, Александр! Благодарим за положительный отзыв.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-desc__item-rating">
                                <div class="product-desc__item-rating-container">
                                    <div class="product-desc__testimonials-rating">
                                        <ul>
                                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                            <li><img src="/images/icons/star.svg" alt="оценка"></li>
                                        </ul>
                                        <p>4.95/5</p>
                                    </div>
                                    <div class="product-desc__progress">
                                        <div class="product-desc__progress-item">
                                            <span>5</span>
                                            <div>
                                                <div class="product-desc__progress-level" style="width: 80%"></div>
                                            </div>
                                            <span>446</span>
                                        </div>
                                        <div class="product-desc__progress-item">
                                            <span>4</span>
                                            <div>
                                                <div class="product-desc__progress-level" style="width: 20%"></div>
                                            </div>
                                            <span>2</span>
                                        </div>
                                        <div class="product-desc__progress-item">
                                            <span>3</span>
                                            <div>
                                                <div class="product-desc__progress-level" style="width: 0"></div>
                                            </div>
                                            <span>0</span>
                                        </div>
                                        <div class="product-desc__progress-item">
                                            <span>0</span>
                                            <div>
                                                <div class="product-desc__progress-level" style="width: 0"></div>
                                            </div>
                                            <span>0</span>
                                        </div>
                                        <div class="product-desc__progress-item">
                                            <span>1</span>
                                            <div>
                                                <div class="product-desc__progress-level" style="width: 0"></div>
                                            </div>
                                            <span>0</span>
                                        </div>
                                    </div>
                                </div>
                                <button data-modal-link="testimonial" class="product-desc__item-btn">Написать
                                    отзыв</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('css')


@stop

@section('scripts')
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
