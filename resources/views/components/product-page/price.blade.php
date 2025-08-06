@php
    $formattedPrice =
        floor($data['product']->price) === $product->price
            ? number_format($product->price, 0, '', ' ')
            : number_format($product->price, 2, '.', ' ');
@endphp
<p>{{ $formattedPrice }} ₽</p>
