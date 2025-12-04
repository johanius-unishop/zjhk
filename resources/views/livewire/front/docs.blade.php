<div class="docs__content">
    <div class="news__title">
        <h2>Документация</h2>
        <p>Здесь вы можете скачать техническую спецификацию изделий, каталоги на русском языке</p>
    </div>
    <div class="docs__filter-container">
        <div>
            <label for="vendor">Бренд</label>
            <select wire:model.live="selectedVendor" class="filter__select" name="vendor" id="vendor">
                <option value="">Выбрать</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}">
                        {{ $vendor->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="type">Тип документации</label>
            <select wire:model.live="selectedType" class="filter__select" name="type" id="type">
                <option value="">Выбрать</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="card__item-wrapper">
        @foreach ($docs as $doc)
            <div class="news__item">
                <div>
                    <div>
                        @if (
                            $acceptsWebP &&
                                $doc->getFirstMedia('images') &&
                                $doc->getFirstMedia('images')->hasGeneratedConversion('webp-images'))
                            <img src="{{ $doc->getFirstMedia('images')->getUrl('webp-images') }}"
                                alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                loading="lazy">
                        @elseif (
                            !$acceptsWebP &&
                                $doc->getFirstMedia('images') &&
                                $doc->getFirstMedia('images')->hasGeneratedConversion('jpeg-images'))
                            <img src="{{ $doc->getFirstMedia('images')->getUrl('jpeg-images') }}"
                                alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                loading="lazy">
                        @else
                            <img src="{{ $doc->getFirstMedia('images') ? $doc->getFirstMedia('images')->getUrl() : asset('/images/default_image.jpg') }}"
                                alt="Обложка PDF материала: {{ $doc->vendor->name }} {{ $doc->title }}"
                                loading="lazy">
                        @endif
                    </div>
                    <div class="doc__description">
                        <h5>{{ $doc->title }}</h5>
                        <p>{{ $doc->text }}</p>
                    </div>
                    <a href="{{ $doc->getMedia('files')->first()->getFullUrl() }}" download>Скачать</a>
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
                        <li>
                            <button wire:click="changePerPage({{ $option }})" wire:loading.attr="disabled">
                                {{ $option }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
