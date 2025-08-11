<div class="product-desc__complectation">
    @if (!empty($data['compositionSet']))
        <h5 class="product-desc__complectation-title">Комплектация</h5>
        <div class="product-desc__complectation-wrapper">
            @foreach ($data['compositionSet'] as $element)
                @if ($element['qty'] > 1)
                    <p>{{ $element['type'] }}:
                        <a href="{{ $element['link'] }}">
                            {{ $element['model'] }}
                            @if ($element['article'] !== '' && $element['article'] != $element['model'])
                                ({{ $element['article'] }})
                            @endif
                        </a> - {{ $element['qty'] }} шт.
                    </p>
                @else
                    <p>{{ $element['type'] }}:
                        <a href="{{ $element['link'] }}">
                            {{ $element['model'] }}
                            @if ($element['article'] !== '' && $element['article'] != $element['model'])
                                ({{ $element['article'] }})
                            @endif
                        </a>
                    </p>
                @endif
            @endforeach
        </div>
    @endif
</div>
