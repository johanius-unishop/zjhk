@if ($paginator->onFirstPage())
    <button>
        <img src="{{ asset('images/icons/tick-grey.svg') }}" alt="влево">
    </button>
@else
    <button wire:click="previousPage" wire:loading.attr="disabled">
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
                        <button
                            onclick="window.location.href='{{ $url }}'">{{ $page }}</button>
                    </li>
                @endif
            @endforeach
        @endif
    @endforeach

</ul>


@if ($paginator->onLastPage())
    <button>
        <img src="{{ asset('images/icons/tick-grey.svg') }}" style="transform:rotateZ(180deg)" alt="вправо">
    </button>
@else
     <button wire:click="nextPage" wire:loading.attr="disabled">
        <img src="{{ asset('images/icons/tick-black.svg') }}" alt="вправо">
    </button>
@endif
</div>
