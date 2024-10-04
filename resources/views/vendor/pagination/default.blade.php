@if ($paginator->hasPages())
{{-- <div class="pagination"> --}}
    <div class="pagination-list">
        <a href="{{ $paginator->previousPageUrl() }}" class="btn" title="Назад"><span
                class="icon-arrow-left"></span></a>
        <ul>
            {{-- <li class="active"><a href="#" class="btn">1</a></li>
            <li><a href="#" class="btn">2</a></li>
            <li><a href="#" class="btn">3</a></li>
            <li><a href="#" class="btn">4</a></li>
            <li><a href="#" class="btn">5</a></li>
            <li><a href="#" class="btn">6</a></li>
            <li><a href="#" class="btn">7</a></li>
            <li><a href="#" class="btn">8</a></li>
            <li><a href="#" class="btn">...</a></li> --}}

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
            @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="active"><a href="{{ $url }}" class="btn">{{ $page }}</a></li>

            {{-- <li class="active" aria-current="page">><a href="#" class="btn">{{ $page }}<< /a>
            </li> --}}
            @else
            <li><a href="{{ $url }}" class="btn">{{ $page }}</a></li>
            @endif
            @endforeach
            @endif
            @endforeach



        </ul>
        <a href="{{ $paginator->nextPageUrl() }}" class="btn" title="Вперед"><span class="icon-arrow-right"></span></a>
    </div>
    {{-- <button type="button" class="btn btn-show-more">Показать еще</button> --}}
    {{--
</div> --}}
@endif


