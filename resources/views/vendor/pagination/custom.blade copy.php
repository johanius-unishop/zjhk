<div class="paginator">
    @if ($paginator->onFirstPage())
        <span class="disabled">«</span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}">«</a>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <span class="dots">{{ $element }}</span>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <strong class="active-page">{{ $page }}</strong>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}">»</a>
    @else
        <span class="disabled">»</span>
    @endif
</div>


<div class="product-page__pagination">
    <div class="product-page__pagination-content">
        {{ $data['products']->links() }}
        <button>
            <img src="./img/icons/tick-grey.svg" alt="влево">
            <img src="./img/icons/tick-black.svg" style="display: none; transform:rotateZ(180deg)" alt="влево">
        </button>
        <ul class="product-page__page-list">
            <li data-pagination><button class="_active">1</button></li>
            <li data-pagination><button>2</button></li>
            <li data-pagination><button>3</button></li>
            <li data-pagination><button>4</button></li>
            <li data-pagination><button>5</button></li>
            <li data-pagination><button>...</button></li>
            <li data-pagination><button>21</button></li>
        </ul>
        <button>
            <img src="./img/icons/tick-grey.svg" style="display: none; transform:rotateZ(180deg)" alt="вправо">
            <img src="./img/icons/tick-black.svg" alt="вправо">
        </button>
    </div>
    <div class="product-page__page-size" data-page-size>
        <div>
            <p class="product-page__page-select">
                <span>Показывать по </span>
                <button class="product-page__change-btn">
                    <span id="page-count">6</span>
                    <img src="./img/icons/tick-black.svg" alt="список страниц">
                </button>
            </p>
            <ul class="product-page__page-count" data-select-page>
                <li><button data-page="6">6</button></li>
                <li><button data-page="12">12</button></li>
                <li><button data-page="24">24</button></li>
                <li><button data-page="36">36</button></li>
                <li><button data-page="48">48</button></li>
            </ul>
        </div>
    </div>
</div>



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
                    <span id="page-count">6</span>
                    <img src="./img/icons/tick-black.svg" alt="список страниц">
                </button>
            </p>
            <ul class="product-page__page-count" data-select-page>
                <li><button data-page="6">6</button></li>
                <li><button data-page="12">12</button></li>
                <li><button data-page="24">24</button></li>
                <li><button data-page="36">36</button></li>
                <li><button data-page="48">48</button></li>
            </ul>
        </div>
    </div>
</div>
