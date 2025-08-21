<div class="product-page__sort-container">
    <div>

    </div>
    <div class="product-page__change-layout">
        <!-- Кнопка карточки -->
        <button wire:click="toggleLayout" id="card-layout" class="toggle__layout">
            <img src="{{ asset('images/icons/block-gray.svg') }}" alt="Карточки"
                class="change__img {{ $layoutType === 'card' ? '_active' : '' }}">
        </button>

        <!-- Кнопка списка -->
        <button wire:click="toggleLayout" id="list-layout" class="toggle__layout">
            <img src="{{ asset('images/icons/list.svg') }}" alt="Список"
                class="change__img {{ $layoutType === 'list' ? '_active' : '' }}">
        </button>
    </div>
</div>

<div id="layout" data-layout class="product-page__grid {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }} hide-subsequent-rows">
    @foreach ($elements as $product_item)
        <div class="product-page__item">
            <div data-layout class="product-page__item-wrapper {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                <div>
                    <div class="swiper product-page-slider">
                        <div class="swiper-wrapper">
                            @foreach ($product_item['images'] as $product_image)
                                <div class="swiper-slide"><img src="{{ $product_image[0]->url }}"
                                        alt="{{ $product_item->alt }}">
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
                <div data-layout class="product-page__title-container {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                    <h5>{{ $product_item->name }}</h5>
                    <p>{{ $product_item->article }}</p>
                    <div>
                        <img src="{{ asset('images/icons/star.svg') }}"
                            alt="рейтинг"><span>{{ $product_item->AverageRating }}</span>
                        <a><span>{{ $product_item->reviewsString }}</span></a>
                    </div>
                </div>
                <div data-layout class="product-page__info-container {{ $layoutType === 'list' ? 'list-layout' : 'card-layout' }}">
                    <p>{{ $product_item->price }}</p>
                    <p>{{ $product_item->stock }}</p>
                    <button class="product-page__add-cart">В корзину</button>
                </div>
            </div>
        </div>
    @endforeach

</div>
