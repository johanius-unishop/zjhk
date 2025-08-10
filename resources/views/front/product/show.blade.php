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
                                <a href="#">
                                    @if ($data['product']->reviews)
                                        @if (count($data['product']->reviews))
                                            {{ count($data['product']->reviews) }} {{ pluralForm(count($data['product']->reviews), ['отзыв', 'отзыва', 'отзывов']) }}
                                        @else
                                            Нет отзывов
                                        @endif
                                    @endif
                                </a> |
                                <a href="#">
                                    @if ($data['product']->questions)
                                        @if (count($data['product']->questions))
                                            {{ count($data['product']->questions) }} {{ pluralForm(count($data['product']->questions), ['вопрос', 'вопроса', 'вопросов']) }}
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
        @include('components.product-page.analogs-section')
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
