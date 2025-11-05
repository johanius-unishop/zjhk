<section class="popular">
    <div class="popular__container container">
        <div class="popular__wrapper">
            <h2 class="popular__title">
                Популярные товары
            </h2>
            <div class="popular__grid hide-subsequent-rows">
                @foreach ($popularProductsWithDetails as $popularProduct)
                    <a href="{{ route('product.show', ['slug' => $popularProduct->product->slug]) }}">
                        <div class="popular__item-wrapper">
                            <div>
                                @php
                                    $firstImage = $popularProduct->product->getMedia('images')->first(); // Получаем первое изображение продукта
                                    $altProduct = $popularProduct->product->getAltAttribute()
                                @endphp

                                @if ($firstImage)
                                    @if ($acceptsWebP && $firstImage->hasGeneratedConversion('webp-thumb'))
                                        <img src="{{ $firstImage->getUrl('webp-thumb') }}"
                                            alt="{{ $altProduct }}" loading="lazy">
                                    @elseif (!$acceptsWebP && $firstImage->hasGeneratedConversion('thumb'))
                                        <img src="{{ $firstImage->getUrl('thumb') }}"
                                            alt="{{ $altProduct }}" loading="lazy">
                                    @else
                                        <img src="{{ $firstImage->getUrl() }}"
                                            alt="{{ $altProduct }}" loading="lazy">
                                    @endif
                                @else
                                    <img src="{{ asset('/images/default_image.jpg') }}"
                                        alt="{{ $altProduct }}" loading="lazy">
                                @endif





                            </div>
                            <div>
                                <h5>{{ $popularProduct->product->name }}</h5>
                                <p>{{ $popularProduct->product->article }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
