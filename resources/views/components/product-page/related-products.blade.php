@php
    $sliderCounter = 1; // Начнём счётчик с единицы
@endphp

@if (!empty($data['related']))
    <section class="product-desc__products" id="related-products">
        <div class="products-desc__container container">
            <h2 class="product-desc__products-title">
                Сопутствующие товары
            </h2>
            <div class="product-desc__opt-products-wrapper">
                @foreach ($data['related'] as $related_item)
                    <div class="opt__body">
                        <h4>{{ $related_item['type']->name }}</h4>
                        <div class="swiper opt-slider{{ $sliderCounter }} opt-slider">
                            <div class="swiper-wrapper opt-swiper-wrapper">
                                @foreach ($related_item['relatedProducts'] as $related_product_item)
                                    <div class="swiper-slide product-page__item">
                                        <div data-layout class="product-page__item-wrapper card-layout">
                                            <div>
                                                <a href="{{ $related_product_item->getLinkAttribute() }}" class="swiper-slide">
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
                                                </a>
                                                <button class="product-page__label-btn">
                                                    <img class="product-page__label" src="{{ asset('images/icons/label-gray.svg') }}"
                                                        alt="избранное">
                                                </button>
                                            </div>

                                            <div data-layout class="product-page__title-container card-layout">
                                                <a href="{{ $related_product_item->getLinkAttribute() }}">
                                                    <h5>{{ $related_product_item->name }}</h5>
                                                    <p>{{ $related_product_item->article }}</p>
                                                </a>

                                                <div>
                                                    @if ($related_product_item->getCountReviewsString() != '')
                                                        <img src="{{ asset('images/icons/star.svg') }}"
                                                            alt="рейтинг"><span>{{ $related_product_item->getAverageReviewRatingString() }}</span>
                                                        <a><span>{{ $related_product_item->getCountReviewsString() }}</span></a>
                                                    @endif
                                                </div>
                                            </div>

                                            <div data-layout class="product-page__info-container card-layout">
                                                <p>{{ $related_product_item->getUserPrice() }}</p>
                                                @if ($related_product_item->stock > 0)
                                                    <p style="color: #027a48;">
                                                        {{ $related_product_item->getUserStock() }}</p>
                                                @else
                                                    <p style="color: #6905ec;">
                                                        {{ $related_product_item->getUserStock() }}</p>
                                                @endif
                                                <button class="product-page__add-cart product-desc">В корзину</button>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-prev opt{{ $sliderCounter }} common-opt-button"></div>
                        <div class="swiper-button-next opt{{ $sliderCounter }} common-opt-button"></div>
                    </div>

                    @php
                        $sliderCounter++; // Инкрементируем счётчик
                    @endphp
                @endforeach
            </div>
        </div>
    </section>
@endif
