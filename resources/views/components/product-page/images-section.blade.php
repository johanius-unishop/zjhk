<div class="product-desc__slider">
    <div class="swiper thumbSwiper">
        <div class="swiper-wrapper">
            @foreach ($data['images'] as $mediaItem)
                <div class="swiper-slide">
                    <img src="{{ $mediaItem->getUrl() }}" alt="Изображение {{ $data['product']->name }}">
                </div>
            @endforeach
        </div>
    </div>
    <div class="swiper photoSwiper">
        <div class="swiper-wrapper">
            @foreach ($data['images'] as $mediaItem)
                <div class="swiper-slide">
                    <img src="{{ $mediaItem->getUrl() }}" alt="Изображение {{ $data['product']->name }}">
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination-thumb"></div>
    </div>
    <div class="swiper-button-next prod"></div>
    <div style="display: none;" class="swiper-button-prev prod"></div>
</div>
