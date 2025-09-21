<div class="header__search-field">
    <input wire:model.live="search" type="search" name="search" id="search" placeholder="Поиск по каталогу" autocomplete="off"
        class="header__search-input">
    <button class="header__search-submit">
        <img src={{ asset('images/icons/zoom-glass.svg') }} alt="поиск">
    </button>
    <div id="search__result" class="header__result" @if(!$visible) style="display: none" @endif>
        @dd({{count($searchResults)}})
        @if (!is_null($searchResults) && !$searchResults->isEmpty())
            <ul class="header__result-wrapper">
                @foreach ($searchResults as $searchResultsItem)
                    <li>
                        <a href="#">
                            <p><img src={{ asset('images/products/example.png') }} alt="пример товара">
                                <span>HA-003-F</span>
                                <span>09200032711</span>
                            </p>
                            <span>380 ₽</span>
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
            <a class="header__result-btn" href="#">Посмотреть все товары <span>({{count($searchResults)}})</span></a>
        @endif
    </div>
</div>
