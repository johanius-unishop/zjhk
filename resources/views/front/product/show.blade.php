@extends('layouts.app')

@section('title', SEOMeta::getTitle())

@section('content')
    <main>
        <?php
        $rating = $data['product']->getAverageReviewRating();
        $integerRating = floor($rating); // Целая часть рейтинга
        $remainder = $rating - $integerRating; // Дробная часть (остаток)
        ?>
        <div>
            <div>
                <svg style="width: 0; height: 0;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <defs>
                        <mask id="empty">
                            <rect x="0" y="0" width="32" height="32" fill="white" />
                            <rect x="0" y="0" width="32" height="32" fill="black" />
                        </mask>
                        <mask id="half">
                            <rect x="0" y="0" width="32" height="32" fill="white" />
                            <rect x="{{ $remainder * 100 }}%" y="0" width="32" height="32" fill="black" />
                        </mask>

                        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="star">
                            <path
                                d="M31.547 12a.848.848 0 00-.677-.577l-9.427-1.376-4.224-8.532a.847.847 0 00-1.516 0l-4.218 8.534-9.427 1.355a.847.847 0 00-.467 1.467l6.823 6.664-1.612 9.375a.847.847 0 001.23.893l8.428-4.434 8.432 4.432a.847.847 0 001.229-.894l-1.615-9.373 6.822-6.665a.845.845 0 00.214-.869z" />
                        </symbol>
                    </defs>
                </svg>
            </div>
        </div>

        <section class="products-desc">
            <div class="products-desc__container container">
                @include('components.product-page.breadcrumbs')
                <div class="product-desc__content">
                    <div class="product-desc__title-container">
                        <h2>{{ $data['product']->productType->name }} {{ $data['product']->name }}</h2>
                        <div class="product-desc__testimonials-rating">
                            <ul>
                                @for ($i = 1; $i <= $integerRating; $i++)
                                    <li>
                                        <svg class="c-star active" width="32" height="32" viewBox="0 0 32 32">
                                            <use xlink:href="#star"></use>
                                            <use xlink:href="#star" fill="none" stroke="#feb273"></use>
                                        </svg>
                                    </li>
                                @endfor
                                @if ($remainder > 0)
                                    <li>
                                        <svg class="c-star active" width="32" height="32" viewBox="0 0 32 32">
                                            <use xlink:href="#star" mask=url("#half")></use>
                                            <use xlink:href="#star" fill="none" stroke="#feb273"></use>
                                        </svg>
                                    </li>
                                @endif
                                @for ($k = $integerRating + ($remainder > 0 ? 1 : 0); $k < 5; $k++)
                                    <li>
                                        <svg class="c-star active" width="32" height="32" viewBox="0 0 32 32">
                                            <use xlink:href="#star" mask=url("#empty")></use>
                                            <use xlink:href="#star" fill="none" stroke="#feb273"></use>
                                        </svg>
                                    </li>
                                @endfor
                            </ul>
                            <div>
                                <a href="#">
                                    @if ($data['product']->reviews)
                                        @if (count($data['product']->reviews))
                                            {{ count($data['product']->reviews) }}
                                            {{ pluralForm(count($data['product']->reviews), ['отзыв', 'отзыва', 'отзывов']) }}
                                        @else
                                            Нет отзывов
                                        @endif
                                    @endif
                                </a> |
                                <a href="#">
                                    @if ($data['product']->questions)
                                        @if (count($data['product']->questions))
                                            {{ count($data['product']->questions) }}
                                            {{ pluralForm(count($data['product']->questions), ['вопрос', 'вопроса', 'вопросов']) }}
                                        @else
                                            Нет вопросов
                                        @endif
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-desc__about">
                        <div class="product-desc__about-grid">
                            <div class="product-desc__left">
                                @include('components.product-page.images-section')
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
                                                <a href="#technical-props">Все характеристики</a>
                                                <img src="{{ asset('images/icons/arrow-right.svg') }}"
                                                    alt="все характеристики">
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
                                            <img class="product-page__label"
                                                src="{{ asset('images/icons/label-gray.svg') }}" alt="избранное">В
                                            избранное
                                        </button>
                                        <button><img src="{{ asset('images/icons/share.svg') }}" alt="поделиться">
                                            Поделиться
                                        </button>
                                    </div>
                                    <div class="product-desc__cart-item">
                                        <div class="product-desc__cart-item-wrapper">
                                            <div>
                                                <p>{{ $data['product']->getUserPrice() }}</p>
                                                <p>{{ $data['product']->getUserStock() }}</p>
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
                        <li data-nav="char"><a data-char href="#technical-props" class="_target">Характеристики</a></li>
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
                <div class="product-desc__props-wrapper" id="technical-props">
                    @include('components.product-page.technical-specifications')

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
        @include('components.product-page.analogs-section')
    </main>
@endsection

@section('css')


@stop

@section('scripts')
    @livewireScriptConfig
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const swiper = new Swiper('.thumbSwiper', {
                loop: false,
                spaceBetween: 10,
                freeMode: true,
                watchSlidesProgress: true,
                slidesPerView: 4,
                breakpoints: {
                    992: {
                        slidesPerView: 5,
                        direction: 'vertical'
                    }
                }
            })

            const swiper2 = new Swiper('.photoSwiper', {
                modules: [EffectFade, Navigation, Thumbs, Pagination],
                loop: true,
                spaceBetween: 10,
                navigation: {
                    nextEl: '.swiper-button-next.prod',
                    prevEl: '.swiper-button-prev.prod'
                },
                thumbs: {
                    swiper: swiper
                },
                pagination: {
                    el: '.swiper-pagination-thumb',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + '</span>'
                    }
                },
                breakpoints: {
                    360: {
                        pagination: {
                            enabled: true
                        }
                    },
                    575: {
                        pagination: {
                            enabled: false
                        }
                    }
                }
            })


            document.querySelectorAll('[class^=opt-slider], [class*=opt-slider]').forEach((el) => {
                // Парсим индекс из класса элемента (например, opt-slider1 → 1)
                const index = Array.from(el.classList)
                    .filter(cls => cls.startsWith('opt-slider'))
                    .map(cls => cls.match(/\d+/))
                    .flat()[0]?.[0] || '';
                // Формируем классы кнопок вперед и назад для текущего слайда
                const nextButtonClass = `.swiper-button-next.opt${index}`;
                const prevButtonClass = `.swiper-button-prev.opt${index}`;
                // Инициализируем Swiper
                new Swiper(el, {
                    modules: [EffectFade, Navigation],
                    navigation: {
                        nextEl: nextButtonClass,
                        prevEl: prevButtonClass
                    },
                    loop: false,
                    breakpoints: {
                        360: {
                            slidesPerView: 2,
                            spaceBetween: 20
                        },
                        680: {
                            slidesPerView: 3,
                            spaceBetween: 20
                        },
                        992: {
                            slidesPerView: 4,
                            spaceBetween: 20
                        }
                    }
                });
            });
        });
    </script>


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
