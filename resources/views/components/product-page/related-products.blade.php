@if (!empty($data['related']))
    <section class="product-desc__products">
        <div class="products-desc__container container">
            @foreach ($data['related'] as $related_item)
                <h2 class="product-desc__products-title">
                    {{ $related_item['type']->name }}
                </h2>
                <div class="opt__body">
                    <div class="swiper opt-slider">
                        @dd($related_item['relatedProducts']);
                        <div class="swiper-wrapper">
                            @foreach ($related_item['relatedProducts'] as $related_product_item)
                                <div class="swiper-slide product-page__item">
                                    <div data-layout class="product-page__item-wrapper card-layout">
                                        <div>
                                            <div class="swiper product-page-slider">
                                                <div class="swiper-wrapper">
                                                    @foreach ($related_product_item->getMedia('images') as $mediaItem)
                                                    <div class="swiper-slide"> <img
                                                            src="{{ $mediaItem->getUrl() }}" alt="Изображение {{ $related_product_item->name }}">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="swiper-pagination-product"></div>
                                            </div>
                                            <button class="product-page__label-btn">
                                                <img class="product-page__label" src="{{ asset('images/icons/label-gray.svg') }}"
                                                    alt="избранное">
                                            </button>
                                        </div>
                                        <div data-layout class="product-page__title-container card-layout">
                                            <h5>{{ $related_product_item->name }}</h5>
                                            <p>{{ $related_product_item->article }}</p>
                                            <div>
                                                <img src="{{ asset('images/icons/star.svg') }}" alt="рейтинг"><span>4.9</span>
                                                <a href="#"><span>152 </span>отзыва</a>
                                            </div>
                                        </div>
                                        <div data-layout class="product-page__info-container card-layout">
                                            <p>{{ $related_product_item->price }} ₽</p>
                                            @if ($related_product_item->stock > 0)
                                                <p>В наличии {{ $related_product_item->stock }} шт.</p>
                                            @elseif ($related_product_item->stock == 0)
                                                <p>Нет в наличии.</p>
                                            @else
                                                <p>Ожидается поступление</p>
                                            @endif
                                            <button class="product-page__add-cart product-desc">В корзину</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-prev opt"></div>
                    <div class="swiper-button-next opt"></div>
                </div>
            @endforeach
        </div>
    </section>
@endif
