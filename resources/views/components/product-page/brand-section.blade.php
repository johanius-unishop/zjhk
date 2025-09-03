<div class="product-desc__brand">
    @if($data['product']->vendor && trim($data['product']->vendor->short_name))
        <h3>{{ $data['product']->vendor->short_name }} <img src="{{ asset('images/icons/attention-gray.svg') }}" alt="логотип"></h3>
        <a href="#">Все товары бренда</a>
        @if ($data['acceptsWebP'] && $data['product']->vendor->getMedia('vendorLogo') && $data['product']->vendor->getMedia('vendorLogo')[0]->hasGeneratedConversion('webp-thumb'))
                        <img src="{{ $data['product']->vendor->getMedia('vendorLogo')[0]->getUrl('webp-thumb') }}"
                            alt="Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
                    @elseif (!$data['acceptsWebP'] && $data['product']->vendor->getMedia('vendorLogo')[0] && $data['product']->vendor->getMedia('vendorLogo')[0]->hasGeneratedConversion('thumb'))
                        <img src="{{ $data['product']->vendor->getMedia('vendorLogo')[0]->getUrl('thumb') }}"
                            alt="Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
                    @else
                        <img src="{{ $data['product']->vendor->getMedia('vendorLogo')[0] ? $data['product']->vendor->getMedia('vendorLogo')[0]->getUrl() : asset('/images/default_image.jpg') }}"
                            alt=" Миниатюра логотипа компании {{ $data['product']->vendor->short_name }}" loading="lazy">
                    @endif

    @endif
</div>

<div class="product-desc__country">
    @if($data['product']->vendor && $data['product']->vendor->country && trim($data['product']->vendor->country->name))
        <p><img src="{{ asset('images/icons/china_flag.svg') }}" alt="страна"> <span>Страна производства:
                {{ $data['product']->vendor->country->name }}</span></p>
    @endif

    @if($data['product']->vendor && isset($data['product']->vendor->warranty) && trim($data['product']->vendor->warranty))
        <p><img src="{{ asset('images/icons/protect.svg') }}" alt="гарантия"> <span>Гарантия производителя:
                {{ $data['product']->vendor->warranty }}</span></p>
    @endif
</div>
