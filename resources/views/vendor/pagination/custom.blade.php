@if ($paginator->onFirstPage())
    <button>
        <img src="{{ asset('images/icons/tick-grey.svg') }}" alt="влево">
    </button>
@else
    <button onclick="window.location.href='{{ $paginator->previousPageUrl() }}'">
        <img src="{{ asset('images/icons/tick-black.svg') }}" style="transform:rotateZ(180deg)" alt="влево">
    </button>
@endif

<ul class="product-page__page-list">
    @foreach ($elements as $element)
        @if (is_string($element))
            <li data-pagination><button>...</button></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li data-pagination><button class="_active">{{ $page }}</button></li>
                @else
                    <li data-pagination>
                        @php
                            // Разбираем текущий URL и получаем массив параметров
                            $parsedUrl = parse_url($url);
                            $queryParams = [];
                            parse_str($parsedUrl['query'], $queryParams);

                            // Удаляем параметр reset_page из массива параметров
                            unset($queryParams['reset_page']);

                            // Формируем новый URL без параметра reset_page
                            $newUrl = $parsedUrl['scheme'] . '://' . $parsedUrl['host'] . $parsedUrl['path'];
                            if (!empty($queryParams)) {
                                $newUrl .= '?' . http_build_query($queryParams);
                            }
                        @endphp

                        <button
                            onclick="window.location.href='{{ $newUrl }}'">{{ $page }}</button>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

</ul>


@if ($paginator->hasMorePages())
    <button onclick="window.location.href='{{ $paginator->nextPageUrl() }}'">
        <img src="{{ asset('images/icons/tick-black.svg') }}" alt="вправо">
    </button>
@else
    <button>
        <img src="{{ asset('images/icons/tick-grey.svg') }}" style="transform:rotateZ(180deg)" alt="вправо">
    </button>
@endif
</div>
