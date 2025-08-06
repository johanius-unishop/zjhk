<div class="product-desc__props-technical">
    <h5>Технические характеристики:</h5>
</div>
<div class="product-desc__technical-container">
    @foreach ($data['technical_data'] as $tech)
        <p class="product-desc__technical-row">
            <span class="technical__title">{{ $tech['characteristic_name'] }}</span>
            <span class="technical-row__dots">
                .........................................................................................
            </span>
            <span class="technical__char">{{ $tech['characteristic_value'] }}</span>
        </p>
    @endforeach
</div>
</div>
