<div class="product-page__pagination">
    <div class="product-page__pagination-content">
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
                            <li data-pagination><button onclick="window.location.href='{{ $url }}'">{{ $page }}</button></li>
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
    <div class="product-page__page-size" data-page-size>
        <div>
            <p class="product-page__page-select">
                <span>Показывать по </span>
                <button class="product-page__change-btn">
                    <span id="page-count">8</span>
                    <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
                </button>
            </p>
            <ul class="product-page__page-count" data-select-page>
                <li><button data-per-page="8">8</button></li>
                <li><button data-per-page="12">12</button></li>
                <li><button data-per-page="16">16</button></li>
                <li><button data-per-page="20">20</button></li>
                <li><button data-per-page="24">24</button></li>
            </ul>
        </div>
    </div>
</div>
