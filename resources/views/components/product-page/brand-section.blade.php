<div class="product-desc__brand">
    @if($data['product']->vendor)
        <h3>{{ $data['product']->vendor->short_name }} <img src="/images/icons/attention-gray.svg" alt="логотип"></h3>
        <a href="#">Все товары бренда</a>
        <img class="product-desc__logo" src="/images/icons/partner-logo.png" alt="логотип">
    @endif
</div>
<div class="product-desc__country">
    @if($data['product']->vendor && $data['product']->vendor->country)
        <p><img src="/images/icons/china_flag.svg" alt="страна"> <span>Страна производства:
                {{ $data['product']->vendor->country->name }}</span></p>
    @endif
    @if($data['product']->vendor && isset($data['product']->vendor->warranty))
        <p><img src="/images/icons/protect.svg" alt="гарантия"> <span>Гарантия производителя:
                {{ $data['product']->vendor->warranty }}</span></p>
    @endif
</div>
