<div class="product-desc__slider">
    <div class="swiper thumbSwiper">
        <div class="swiper-wrapper">
            @foreach ($data['images'] as $mediaItem)
                <div class="swiper-slide">
                    @if ($data['acceptsWebP ']&& $mediaItem && $mediaItem->hasGeneratedConversion('webp-thumb'))
                        <img src="{{ $mediaItem->getUrl('webp-thumb') }}"
                            alt="Миниатюра изображения товара {{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @elseif (!$data['acceptsWebP ']&& $mediaItem && $mediaItem->hasGeneratedConversion('thumb'))
                        <img src="{{ $mediaItem->getUrl('thumb') }}"
                            alt="Миниатюра изображения товара {{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @else
                        <img src="{{ $mediaItem ? $product_image->getUrl() : asset('/images/default_image.jpg') }}"
                            alt="{{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @endif
                </div>
            @endforeach
        </div>
    </div>
    <div class="swiper photoSwiper">
        <div class="swiper-wrapper">
            @foreach ($data['images'] as $mediaItem)
                <div class="swiper-slide">
                    @if ($data['acceptsWebP ']&& $mediaItem && $mediaItem->hasGeneratedConversion('medium-webp'))
                        <img src="{{ $mediaItem->getUrl('medium-webp') }}"
                            alt="Изображение товара {{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @elseif (!$data['acceptsWebP ']&& $mediaItem && $mediaItem->hasGeneratedConversion('medium'))
                        <img src="{{ $mediaItem->getUrl('medium') }}"
                            alt="Изображение товара {{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @else
                        <img src="{{ $mediaItem ? $product_image->getUrl() : asset('/images/default_image.jpg') }}"
                            alt="{{ $data['product']->getAltAttribute() }}" loading="lazy">
                    @endif
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination-thumb"></div>
    </div>
    <div class="swiper-button-next prod"></div>
    <div style="display: none;" class="swiper-button-prev prod"></div>
</div>
