<div class="product-desc__complectation">
    <h5 class="product-desc__complectation-title">Комплектация</h5>
    <div class="product-desc__complectation-wrapper">
        @foreach ($data['compositionSet'] as $element)
        <p>{{ $element->productType->name }} {{ $element->name }} {{ $element->productType->article }}</p>
        @endforeach
    </div>
</div>
