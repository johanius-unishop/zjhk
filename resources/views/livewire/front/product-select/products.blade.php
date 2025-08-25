<div id="layout" data-layout
    class="product-page__grid {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }} hide-subsequent-rows">
    @foreach ($elements as $product_item)
        <div class="product-page__item">
            <div data-layout
                class="product-page__item-wrapper {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                <div>
                    <div class="swiper product-page-slider">
                        <div class="swiper-wrapper">
                            @foreach ($product_item['images'] as $product_image)
                                <div class="swiper-slide"><img src="{{ $product_image['url'] }}"
                                        alt="{{ $product_item['alt'] }}">
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
                <div data-layout
                    class="product-page__title-container {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                    <h5>{{ $product_item['name'] }}</h5>
                    <p>{{ $product_item['article'] }}</p>
                    <div>
                        <img src="{{ asset('images/icons/star.svg') }}"
                            alt="рейтинг"><span>{{ $product_item['averageRating'] }}</span>
                        <a><span>{{ $product_item['reviewsString'] }}</span></a>
                    </div>
                </div>
                <div data-layout
                    class="product-page__info-container {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                    <p>{{ $product_item['userPrice'] }}</p>
                    <p>{{ $product_item['userStock'] }}</p>
                    <button class="product-page__add-cart">В корзину</button>
                </div>
            </div>
        </div>
    @endforeach

</div>

@script
    <script>
        $wire.on('changeLayout', () => {
            console.log('Макет изменился:');

        });
    </script>
@endscript
