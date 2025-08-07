<div class="product-desc__complectation">
    <h5 class="product-desc__complectation-title">Комплектация</h5>
    <div class="product-desc__complectation-wrapper">
        @foreach ($data['compositionSet'] as $element)
            <p>{{ $element['type'] }}: <a href="/products/{{ $element['slug'] }}">{{ $element['model'] }}</a>  ({{ $element['article'] }}) - {{ $element['qty'] }} шт.</p>
        @endforeach
    </div>
</div>
