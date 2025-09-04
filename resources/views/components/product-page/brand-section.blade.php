<div class="product-desc__brand">
    @if ($data['product']->vendor && trim($data['product']->vendor->short_name))
        <h3>{{ $data['product']->vendor->short_name }} <img src="{{ asset('images/icons/attention-gray.svg') }}"
                alt="логотип"></h3>
        <a href="#">Все товары бренда</a>
        @if (
            $data['acceptsWebP'] &&
                $data['product']->vendor->getFirstMedia('vendorLogo') &&
                $data['product']->vendor->getFirstMedia('vendorLogo')->hasGeneratedConversion('webp-thumb'))
            <img class="product-desc__logo"
                src="{{ $data['product']->vendor->getFirstMedia('vendorLogo')->getUrl('webp-thumb') }}"
                alt="Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
        @elseif (
            !$data['acceptsWebP'] &&
                $data['product']->vendor->getFirstMedia('vendorLogo') &&
                $data['product']->vendor->getFirstMedia('vendorLogo')->hasGeneratedConversion('thumb'))
            <img class="product-desc__logo"
                src="{{ $data['product']->vendor->getFirstMedia('vendorLogo')->getUrl('thumb') }}"
                alt="Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
        @else
            <img class="product-desc__logo"
                src="{{ $data['product']->vendor->getFirstMedia('vendorLogo') ? $data['product']->vendor->getFirstMedia('vendorLogo')->getUrl() : asset('/images/default_image.jpg') }}"
                alt=" Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
        @endif

    @endif
</div>

<div class="product-desc__country">
    @if ($data['product']->vendor && $data['product']->vendor->country && trim($data['product']->vendor->country->name))
        <p>
            @if (
                $data['acceptsWebP'] &&
                    $data['product']->vendor->country->getFirstMedia('countryFlag') &&
                    $data['product']->vendor->country->getFirstMedia('countryFlag')->hasGeneratedConversion('webp-thumb'))
                <img src="{{ $data['product']->vendor->country->getFirstMedia('countryFlag')->getUrl('webp-thumb') }}"
                    alt="Миниатюра флага страны {{ $data['product']->vendor->country->name }}" loading="lazy"> <span>Страна производства:
                {{ $data['product']->vendor->country->name }}</span>
            @elseif (
                !$data['acceptsWebP'] &&
                    $data['product']->vendor->country->getFirstMedia('countryFlag') &&
                    $data['product']->vendor->country->getFirstMedia('countryFlag')->hasGeneratedConversion('thumb'))
                <img src="{{ $data['product']->vendor->country->getFirstMedia('countryFlag')->getUrl('thumb') }}"
                    alt="Миниатюра флага страны {{ $data['product']->vendor->country->name }}" loading="lazy"> <span>Страна производства:
                {{ $data['product']->vendor->country->name }}</span>
            @else
                <img src="{{ $data['product']->vendor->country->getFirstMedia('countryFlag') ? $data['product']->vendor->country->getFirstMedia('countryFlag')->getUrl() : asset('/images/default_image.jpg') }}"
                    alt=" Миниатюра флага страны {{ $data['product']->vendor->country->name }}" loading="lazy">
            @endif
        </p>
    @endif

    @if ($data['product']->vendor && isset($data['product']->vendor->warranty) && trim($data['product']->vendor->warranty))
        <p><img src="{{ asset('images/icons/protect.svg') }}" alt="гарантия"> <span>Гарантия производителя:
                {{ $data['product']->vendor->warranty }}</span></p>
    @endif
</div>
