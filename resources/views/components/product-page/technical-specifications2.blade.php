<div class="product-desc__props-desc">
    <div class="product-desc__props-technical">
        <h5>Технические характеристики:</h5>
    </div>
    <div class="product-desc__technical-container">
        @foreach ($data['technical_data'] as $prop)
            @if ($prop['section'] === 1)
                <h5>{{ $prop['characteristic_name'] }}</h5>
            @elseif ($prop['section'] === 0)
                @if (!is_null($prop['characteristic_value']))
                    <p class="product-desc__technical-row">
                        <span>{{ $prop['characteristic_name'] }}</span> <span>{{ $prop['characteristic_value'] }}</span>
                    </p>
                @endif
            @endif
        @endforeach
    </div>
</div>
