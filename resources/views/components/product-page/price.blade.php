@php
    $formattedPrice =
        floor($data['product']->price) === $data['product']>price
            ? number_format($data['product']>price, 0, '', ' ')
            : number_format($data['product']->price, 2, '.', ' ');
@endphp
<p>{{ $formattedPrice }} ₽</p>
