<div class="product-desc__short">
    @if ($data['product']->short_description && trim($data['product']->short_description))
        <p>Описание:</p>
        <p>{{ $data['product']->short_description }}</p>
    @endif
</div>
