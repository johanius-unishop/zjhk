<div class="news__content">
    <div class="news__title-body">
        <h2>Производители</h2>
        <p>Список производителей, продукция которых представлена нами в России</p>
    </div>
    <div class="card__item-wrapper">
        @foreach ($vendors as $vendor)
            <div class="news__item">
                <div>
                    <div>
                            @if (
                                $acceptsWebP &&
                                    $vendor->getFirstMedia('vendorLogo') &&
                                    $vendor->getFirstMedia('vendorLogo')->hasGeneratedConversion('webp'))
                                <img src="{{ $vendor->getFirstMedia('vendorLogo')->getUrl('webp') }}"
                                    alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}" loading="lazy">
                            @elseif (
                                !$acceptsWebP &&
                                    $vendor->getFirstMedia('vendorLogo') &&
                                    $vendor->getFirstMedia('vendorLogo')->hasGeneratedConversion('jpeg'))
                                <img src="{{ $vendor->getFirstMedia('vendorLogo')->getUrl('jpeg') }}"
                                    alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}"
                                    loading="lazy">
                            @else
                                <img src="{{ $vendor->getFirstMedia('vendorLogo') ? $doc->getFirstMedia('vendorLogo')->getUrl() : asset('/images/default_image.jpg') }}"
                                    alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}"
                                    loading="lazy">
                            @endif
                    </div>

                    <a href="{{ route('vendor.show', ['slug' => $vendor->slug]) }}"
                        class="brands__slider-item">Подробнее</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="product-page__show">

    </div>
    <div class="product-page__pagination">
        <div class="product-page__pagination-content">
            {{ $vendors->links('vendor.pagination.custom') }}
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
