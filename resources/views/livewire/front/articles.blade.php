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
                                $article->getFirstMedia('previewImages') &&
                                $article->getFirstMedia('previewImages')->hasGeneratedConversion('webp'))
                            <img src="{{ $article->getFirstMedia('previewImages')->getUrl('webp') }}"
                                alt="Титульное изображение статьи {{ trim($article->name) }}" loading="lazy">
                        @elseif (
                            !$acceptsWebP &&
                                $article->getFirstMedia('previewImages') &&
                                $article->getFirstMedia('previewImages')->hasGeneratedConversion('jpeg'))
                            <img src="{{ $article->getFirstMedia('previewImages')->getUrl('jpeg') }}"
                                alt="Титульное изображение статьи {{ trim($article->name) }}" loading="lazy">
                        @else
                            <img src="{{ $article->getFirstMedia('previewImages') ? $article->getFirstMedia('previewImages')->getUrl() : asset('/images/default_image.jpg') }}"
                                alt="Титульное изображение статьи {{ trim($article->name) }}" loading="lazy">
                        @endif
                    </div>
                    <div>
                        <h5>{{ trim($article->name) }}</h5>
                        <p>{{ trim($article->short_description) }}</p>
                    </div>
                    <a href="{{ route('article.show', ['slug' => $article->slug]) }}"
                        class="articles__slider-item">Читать</a>
                </div>
            </div>
        @endforeach
    </div>
    @if (!$articles->isEmpty())
    <div class="product-page__show">

    </div>
    <div class="product-page__pagination">
        <div class="product-page__pagination-content">
            {{ $articles->links('vendor.pagination.custom') }}
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
    @endif
</div>
