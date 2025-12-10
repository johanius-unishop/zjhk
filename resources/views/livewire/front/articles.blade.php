<div class="articles__content">
    <div class="articles__title">
        <h2>Статьи</h2>
        <p>Здесь вы можете найти полезную информацию о наших товарах</p>
    </div>
    <div class="card__item-wrapper">
        @foreach ($articles as $article)
            <div class="articles__item">
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
                                alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}" loading="lazy">
                        @else
                            <img src="{{ $vendor->getFirstMedia('vendorLogo') ? $vendor->getFirstMedia('vendorLogo')->getUrl() : asset('/images/default_image.jpg') }}"
                                alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}" loading="lazy">
                        @endif
                    </div>
                    <div>
                        <h5>О промышленных прямоугольных разъёмах</h5>
                        <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                            3A, 10A, 16A, 32A</p>
                    </div>
                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}"
                        class="articles__slider-item">Читать</a>
                </div>
            </div>
        @endforeach
    </div>
    <div class="product-page__show">

    </div>
    <div class="product-page__pagination">
        <div class="product-page__pagination-content">
            {{ $articles->links('articles.pagination.custom') }}
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
