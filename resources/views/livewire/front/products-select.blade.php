@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div class="product-page__content">
    <aside class="product-page__filter filter">
        @if ($filter == 1)
            <form class="filter__item">
                <div>
                    <label for="type">Тип резьбы</label>
                    <select class="filter__select" name="type" id="type">
                        <option placeholder>Выбрать</option>
                        <option value="1">Характеристика 1</option>
                        <option value="2">Характеристика 2</option>
                    </select>
                </div>
                <div class="filter__btn-container">
                    <button class="filter__btn-impl">Применить</button>
                </div>
                <div class="filter__btn-container">
                    <button type="button" class="filter__btn-cancel">Очистить все</button>
                </div>
            </form>
        @endif
    </aside>

    <div class="product-page__layout">
        <div class="product-page__sort-container">
            <div>

            </div>
            <div class="product-page__change-layout">
                <!-- Кнопка карточки -->
                <button wire:click="switchLayout" id="card-layout" class="toggle__layout">
                    <img src="{{ asset('images/icons/block-gray.svg') }}" alt="Карточки"
                        class="change__img {{ $layoutType === 'card' ? '_active' : '' }}">
                </button>

                <!-- Кнопка списка -->
                <button wire:click="switchLayout" id="list-layout" class="toggle__layout">
                    <img src="{{ asset('images/icons/list.svg') }}" alt="Список"
                        class="change__img {{ $layoutType === 'list' ? '_active' : '' }}">
                </button>
            </div>
        </div>

        <div id="layout" data-layout
            class="product-page__grid {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }} hide-subsequent-rows">
            @foreach ($products as $product_item)
                <div class="product-page__item">
                    <div data-layout
                        class="product-page__item-wrapper {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }}">
                        <div>
                            <a href="#" class="swiper-slide"><img src="./img/products/item_photo.png" alt="товар">
                                 </a>
                                <a href="{{ route('product.show', ['slug' => $product_item->slug]) }}" class="swiper-slide">
                                    @if ($acceptsWebP && $product_item->getMedia('images')->first && $product_item->getMedia('images')->first()->hasGeneratedConversion('webp-thumb'))
                                        <img src="{{ $product_image->getUrl('webp-thumb') }}" alt="{{ $product_item->getAltAttribute() }}" loading="lazy">
                                    @elseif (!$acceptsWebP && $product_item->getMedia('images')->first() && $product_item->getMedia('images')->first()->hasGeneratedConversion('thumb'))
                                        <img src="{{ $product_image->getUrl('thumb') }}" alt="{{ $product_item->getAltAttribute() }}" loading="lazy">
                                    @else
                                        <img src="{{ $product_item->getMedia('images')->first() ? $product_item->getMedia('images')->first()->getUrl() : asset('/images/default_image.jpg') }}"
                                             alt="{{ $product_item->getAltAttribute() }}"
                                             loading="lazy">
                                    @endif
                                </a>
                            @livewire('front.add-to-favorites-button', ['contentType' => 'productSelect', 'productId' => $product_item->id])
                        </div>
                        <div data-layout
                            class="product-page__title-container {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }}">
                            <a href="{{ route('product.show', ['slug' => $product_item->slug]) }}">
                                <h5>{{ $product_item->name }}</h5>
                                <p>{{ $product_item->article }}</p>
                            </a>
                            <div>
                                @if ($product_item->getCountReviewsString() != "")
                                <img src="{{ asset('images/icons/star.svg') }}"
                                    alt="рейтинг"><span>{{ $product_item->getAverageReviewRatingString() }}</span>
                                <a><span>{{ $product_item->getCountReviewsString() }}</span></a>
                                @endif
                            </div>

                        </div>
                        <div data-layout
                            class="product-page__info-container {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }}">
                            <p>{{ $product_item->getUserPrice() }}</p>
                            @if ( $product_item->stock > 0)
                                <p style="color: #027a48;">{{ $product_item->getUserStock() }}</p>
                            @else
                                <p style="color: #6905ec;">{{ $product_item->getUserStock() }}</p>
                            @endif
                            <button class="product-page__add-cart">В корзину</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



        <div class="product-page__show">



        </div>
        <div class="product-page__pagination">
            <div class="product-page__pagination-content">
                {{ $products->links('vendor.pagination.custom') }}
                <div class="product-page__page-size" data-page-size>
                    <p class="product-page__page-select">
                        <span>Показывать по </span>
                        <button wire:click="toggleMenu" class="product-page__change-btn">
                            <span id="page-count">{{ $perPage }}</span>
                            <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
                        </button>
                    </p>
                    <ul class="product-page__page-count {{ $menuIsOpen === true ? '_active' : 'hidden' }}"
                        data-select-page>
                        @foreach ($perPageOptions as $option)
                            <li><button wire:click="changePerPage({{ $option }})" x-on:click="{{ $scrollIntoViewJsSnippet }}">
                                    {{ $option }}
                                </button>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

