<div class="header__search-field">
    <input wire:model.live="search" type="search" name="search" id="search" placeholder="Поиск по каталогу"
        autocomplete="off" class="header__search-input">
    <button class="header__search-submit">
        <img src={{ asset('images/icons/zoom-glass.svg') }} alt="поиск">
    </button>
    <div id="search__result" class="header__result" @if (!$visible) style="display: none" @endif>
        @if (!is_null($searchResults) && !$searchResults->isEmpty())
            <ul class="header__result-wrapper">
                @foreach ($searchResults as $item)
                    <li>
                        <a href="#">
                            <p>
                                @if (
                                    $acceptsWebP &&
                                        $item->getMedia('images')->first() &&
                                        $$item->getMedia('images')->first()->hasGeneratedConversion('search-webp-thumb'))
                                    <img src="{{ $item->getMedia('images')->first()->getUrl('search-webp-thumb') }}"
                                        alt="{{ $item->getAltAttribute() }}" loading="lazy">
                                @elseif (
                                    !$acceptsWebP &&
                                        $item->getMedia('images')->first() &&
                                        $item->getMedia('images')->first()->hasGeneratedConversion('search-thumb'))
                                    <img src="{{ $item->getMedia('images')->first()->getUrl('search-thumb') }}"
                                        alt="{{ $item->getAltAttribute() }}" loading="lazy">
                                @else
                                    <img src="{{ $item->getMedia('images')->first() ? $item->getMedia('images')->first()->getUrl() : asset('/images/default_image.jpg') }}"
                                        alt="{{ $item->getAltAttribute() }}" loading="lazy">
                                @endif
                                <span>{{ $item->name }}</span>
                                <span>{{ $item->article }}</span>
                            </p>
                            <span>{{ $item->getUserPrice() }}</span>
                        </a>
                        <div class="product__example">
                            <div class="product__example-wrapper">
                                <div>
                                    <img src={{ asset('images/products/item_photo.png') }} alt="товар">
                                    <button>
                                        <img src={{ asset('images/icons/label-gray.svg') }} alt="избранное">
                                        <img src={{ asset('images/icons/bookmark.svg') }} style="display: none"
                                            alt="избранное">
                                    </button>
                                </div>
                                <div class="product__title-container">
                                    <h5>HA-004-F</h5>
                                    <p>09200042711</p>
                                </div>
                                <div class="product__info-container">
                                    <p>380 ₽</p>
                                    <p>В наличии 192 шт.</p>
                                </div>
                                <p>
                                    Контактная вставка – розетка (“мама”), типоразмер 3A, винтовое соединение,
                                    3+PE
                                    (10A/400V)
                                </p>
                                <button class="product-page__add-cart">В корзину</button>

                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <a class="header__result-btn" href="#">Посмотреть все товары
                <span>({{ count($searchResults) }})</span></a>
        @endif
    </div>
</div>
