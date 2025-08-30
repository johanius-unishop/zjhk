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
                            <div class="swiper product-page-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($product_item->getMedia('images') as $product_image)
                                        <div class="swiper-slide"><img src="{{ $product_image->getUrl() }}"
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
                        <div data-layout
                            class="product-page__title-container {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }}">
                            <h5>{{ $product_item->name }}</h5>
                            <p>{{ $product_item->article }}</p>
                            <div>
                                <img src="{{ asset('images/icons/star.svg') }}"
                                    alt="рейтинг"><span>{{ $product_item->getAverageReviewRatingString() }}</span>
                                <a><span>{{ $product_item->getCountReviewsString() }}</span></a>
                            </div>
                        </div>
                        <div data-layout
                            class="product-page__info-container {{ $layoutType === 'card' ? 'card-layout' : 'list-layout' }}">
                            <p>{{ $product_item->getUserPrice() }}</p>
                            <p>{{ $product_item->getUserStock() }}</p>
                            <button class="product-page__add-cart">В корзину</button>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>



        <div class="product-page__show">
            <button id="load-more-button">
                Показать ещё
            </button>
        </div>
        <div class="product-page__pagination">
            <div class="product-page__pagination-content">
                {{ $products->links() }}
                <div class="product-page__page-size" data-page-size>
                    <p class="product-page__page-select">
                        <span>Показывать по </span>
                        <button wire:click="toggleMenu" class="product-page__change-btn">
                            <span id="page-count">{{ $perPage }}</span>
                            <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
                        </button>
                    </p>
                    <ul class="product-page__page-count"
                        x-bind:class="{ '_active': open, 'hidden': !open }" data-select-page>
                        <li><button
                                onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 8, 'reset_page' => $perPage != 8]) }}'">8</button>
                        </li>
                        <li><button
                                onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 12, 'reset_page' => $perPage != 12]) }}'">12</button>
                        </li>
                        <li><button
                                onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 16, 'reset_page' => $perPage != 16]) }}'">16</button>
                        </li>
                        <li><button
                                onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 20, 'reset_page' => $perPage != 20]) }}'">20</button>
                        </li>
                        <li><button
                                onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 24, 'reset_page' => $perPage != 24]) }}'">24</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
