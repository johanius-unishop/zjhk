@php
    $sliderCounter = 1; // Начнём счётчик с единицы
@endphp

@if (!empty($data['related']))
    <section class="product-desc__products">
        <div class="products-desc__container container">
            <h2 class="product-desc__products-title">
                Сопутствующие товары
            </h2>
            <div class="product-desc__opt-products-wrapper">
                @foreach ($data['related'] as $related_item)
                    <div class="opt__body">
                        <h4>{{ $related_item['type']->name }}</h4>
                        <div class="swiper opt-slider{{ $sliderCounter }}">
                            <div class="swiper-wrapper">
                                @foreach ($related_item['relatedProducts'] as $related_product_item)
                                    <div class="swiper-slide product-page__item">
                                        <div data-layout class="product-page__item-wrapper card-layout">
                                            <div>
                                                <div class="swiper product-page-slider">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            @if (
                                                                $data['acceptsWebP'] &&
                                                                    $related_product_item->getFirstMedia('images') &&
                                                                    $related_product_item->getFirstMedia('images')->hasGeneratedConversion('webp-thumb'))
                                                                <img src="{{ $related_product_item->getFirstMedia('images')->getUrl('webp-thumb') }}"
                                                                    alt="{{ $related_product_item->getAltAttribute() }}"
                                                                    loading="lazy">
                                                            @elseif (
                                                                !$data['acceptsWebP'] &&
                                                                    $related_product_item->getFirstMedia('images') &&
                                                                    $related_product_item->getFirstMedia('images')->hasGeneratedConversion('thumb'))
                                                                <img src="{{ $related_product_item->getFirstMedia('images')->getUrl('thumb') }}"
                                                                    alt="{{ $related_product_item->getAltAttribute() }}"
                                                                    loading="lazy">
                                                            @else
                                                                <img src="{{ $related_product_item->getFirstMedia('images') ? $related_product_item->getFirstMedia('images')->getUrl() : asset('/images/default_image.jpg') }}"
                                                                    alt="{{ $related_product_item->getAltAttribute() }}"
                                                                    loading="lazy">
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="product-page__label-btn">
                                                    <img class="product-page__label" src="./img/icons/label-gray.svg"
                                                        alt="избранное">
                                                </button>
                                            </div>
                                            <div data-layout class="product-page__title-container card-layout">
                                                <h5>{{ $related_product_item->name }}</h5>
                                                <p>{{ $related_product_item->article }}</p>
                                                <div>
                                                    <img src="./img/icons/star.svg" alt="рейтинг"><span>4.9</span>
                                                    <a href="#"><span>152 </span>отзыва</a>
                                                </div>
                                            </div>
                                            <div data-layout class="product-page__info-container card-layout">
                                                <p>380 ₽</p>
                                                <p style="color: #6905ec; display: none">Ожидается</p>
                                                <p style="color: #6905ec; display: none">Под заказ, 4-6 недель</p>
                                                <p style="color: #027a48;">В наличии 3 шт</p>
                                                <button class="product-page__add-cart product-desc">В корзину</button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev opt{{ $sliderCounter }}"></div>
                        <div class="swiper-button-next opt{{ $sliderCounter }}"></div>
                    </div>

                    @php
                        $sliderCounter++; // Инкрементируем счётчик
                    @endphp

                @endforeach
            </div>
        </div>
    </section>
@endif
