<div class="product-desc__complectation">
    <h5 class="product-desc__complectation-title">Комплектация</h5>
    <div class="product-desc__complectation-wrapper">
        @foreach ($data['compositeSet'] as $element)
            <p>{{ $element['type'] }} {{ $element['model'] }} {{ $element['article'] }} - {{ $element['qty'] }} шт.</p>
        @endforeach
    </div>
</div>
