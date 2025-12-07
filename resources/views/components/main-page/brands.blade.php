<section class="brands">
    <div class="brands__container container">
        <div class="brands__title-container">
            <h2 class="brands__title">Бренды</h2>
            <a href="{{ route('vendors') }}">
                <button class="title-btn btn">Показать все</button>
            </a>
        </div>
        <div class="brands__body">
            <div class="swiper brands-slider">
                <div class="swiper-wrapper brand">
                    @foreach ($vendors as $vendor)
                        <div class="swiper-slide brand">
                            <a href="{{ route('vendors.show', ['vendor' => $vendor->slug]) }}" class="brands__slider-item">
                                @if (
                                    $acceptsWebP &&
                                        $vendor->getFirstMedia('vendorLogo') &&
                                        $vendor->getFirstMedia('vendorLogo')->hasGeneratedConversion('webp'))
                                    <img src="{{ $vendor->getFirstMedia('vendorLogo')->getUrl('webp') }}"
                                        alt="Логотип бренда {{ trim($vendor->short_name) ?: $vendor->name }}"
                                        loading="lazy">
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
                            </a>
                        </div>
                        @endforeach
                </div>
            </div>
            <div class="swiper-button-prev brands"></div>
            <div class="swiper-button-next brands"></div>
        </div>
    </div>
</section>
