<div id="layout" data-layout class="product-page__grid card-layout hide-subsequent-rows">
    @forelse ($products as $product_item)
        <div class="product-page__item">
            <div data-layout class="product-page__item-wrapper card-layout">
                <div>
                    <div class="swiper product-page-slider">
                        <div class="swiper-wrapper">
                            @foreach ($product_item->getMedia('images') as $product_image)
                                <div class="swiper-slide"><img src="{{ $product_image->getUrl('thumb') }}"
                                        alt="{{ $product_item->getAltAttribute() }}">
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
                    <h5>{{ $product_item['name'] }}</h5>
                    <p>{{ $product_item['article'] }}</p>
                    <div>
                        @if ($product_item->reviews->count() != 0)
                            <img src="{{ asset('images/icons/star.svg') }}"
                                alt="рейтинг"><span>{{ $product_item->getAverageReviewRatingString() }}</span>
                            <a><span>{{ $product_item->getCountReviewsString() }}</span></a>
                        @endif
                    </div>
                </div>
                <div data-layout class="product-page__info-container card-layout">
                    <p>{{ $product_item->getUserPrice() }}</p>

                    @if ($product_item->stock > 0)
                        <p style="color: #027a48;">{{ $product_item->getUserStock() }}</p>
                    @elseif ($product_item->stock === 0)
                        <p style="color: #6905ec;">{{ $product_item->getUserStock() }}</p>
                    @else
                        <p style="color: #6905ec;">{{ $product_item->getUserStock() }}</p>
                    @endif

                    <button class="product-page__add-cart">В корзину</button>
                </div>
            </div>
        </div>
    @empty
        <p>Товары не найдены.</p>
    @endforelse
</div>
