<div class="product-desc__brand">
    @if($data['product']->vendor && trim($data['product']->vendor->short_name))
        <h3>{{ $data['product']->vendor->short_name }} <img src="{{ asset('images/icons/attention-gray.svg') }}" alt="логотип"></h3>
        <a href="#">Все товары бренда</a>
        <img class="product-desc__logo" src="{{ asset('images/icons/partner-logo.svg') }}" alt="логотип">
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
