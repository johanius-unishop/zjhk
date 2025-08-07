@php
    // Определяем переменную для хранения состояния заполнения характеристик
    $hasData = false;

    // Проверяем каждую характеристику на непустоту
    if (!empty($data['product']->weight)) {
        $hasData = true;
    }
    if (!empty($data['product']->length)) {
        $hasData = true;
    }
    if (!empty($data['product']->width)) {
        $hasData = true;
    }
    if (!empty($data['product']->height)) {
        $hasData = true;
    }
@endphp

<!-- Блок будет выводиться только если хотя бы одна характеристика заполнена -->
@if ($hasData)
    <div class="product-desc__pack">
        <h5 class="product-desc__pack-title">Весогабаритные характеристики</h5>
        <div class="product-desc__pack-wrapper">
            <!-- Каждая характеристика выводится только если она не пустая -->
            @if (!empty($data['product']->weight))
                <p>Вес, кг: {{ $data['product']->weight }}</p>
            @endif

            @if (!empty($data['product']->length))
                <p>Длина, мм: {{ $data['product']->length }}</p>
            @endif

            @if (!empty($data['product']->width))
                <p>Ширина, мм: {{ $data['product']->width }}</p>
            @endif

            @if (!empty($data['product']->height))
                <p>Высота, мм: {{ $data['product']->height }}</p>
            @endif
        </div>
    </div>
@endif
