@extends('layouts.app')

@section('content')
    <main>
        @if (isset($data['childrens']) && !empty($data['childrens']))
            <section class="products">
                <div class="products__container container">
                    @include('components.catalog-section.breadcrumbs')
                    <div class="products__content">
                        <div class="products__title-container">
                            <h2>{{ $data['category']->name }}</h2>
                            <p>{{ $data['category']->description }}</p>
                        </div>
                        @if ($data['childrens']->count() > 0)
                            <div class="products__grid hide-subsequent-rows">
                                @foreach ($data['childrens'] as $subcategory)
                                    <a href="{{ config('app.url') . '/category/' . $subcategory->slug }}">
                                        <div class="products__item-wrapper">
                                            <div>
                                                @if (!empty($data['images'][0]))
                                                    <img src="{{ $data['images'][0]->getUrl() }}" alt="товар">
                                                @endif

                                            </div>
                                            <div>
                                                <h5>{{ $subcategory->name }}
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif

        @if (isset($data['products']) && !empty($data['products']))
            <section class="product-page">
                <div class="product-page__container container">
                    @include('components.catalog-section.breadcrumbs')
                    <div class="product-page__main-title">
                        <h2>{{ $data['category']->name }}</h2>
                        <p>{{ $data['category']->description }}</p>
                    </div>
                    <div class="product-page__content">
                        @livewire('front.product-select.filter', ['filter' => $data['filter']])
                        <div class="product-page__layout">
                            <div class="product-page__sort-container">
                                <div>

                                </div>
                                <div class="product-page__change-layout">

                                </div>
                            </div>
                            @include('front.product-select.products', ['elements' => $data['products']])


                            <div class="product-page__show">
                                <button id="load-more-button"
                                    data-next-page="{{ $data['products']->nextPageUrl() ? $data['products']->currentPage() + 1 : '' }}">
                                    Показать ещё
                                </button>
                            </div>
                            <div class="product-page__pagination">
                                <div class="product-page__pagination-content">
                                    {{ $data['products']->links() }}
                                    <div class="product-page__page-size" data-page-size>
                                        <p class="product-page__page-select">
                                            <span>Показывать по </span>
                                            <button class="product-page__change-btn">
                                                <span id="page-count">{{ $data['perPage'] }}</span>
                                                <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
                                            </button>
                                        </p>
                                        <ul class="product-page__page-count" data-select-page>
                                            <li><button
                                                    onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 8, 'reset_page' => $data['perPage'] != 8]) }}'">8</button>
                                            </li>
                                            <li><button
                                                    onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 12, 'reset_page' => $data['perPage'] != 12]) }}'">12</button>
                                            </li>
                                            <li><button
                                                    onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 16, 'reset_page' => $data['perPage'] != 16]) }}'">16</button>
                                            </li>
                                            <li><button
                                                    onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 20, 'reset_page' => $data['perPage'] != 20]) }}'">20</button>
                                            </li>
                                            <li><button
                                                    onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 24, 'reset_page' => $data['perPage'] != 24]) }}'">24</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        @endif



    </main>


@stop


@push('css')
@endpush


@section('scripts')
    @livewireScriptConfig
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const layoutElArr = document.querySelectorAll('[data-layout]');
            const currentLayoutType = "{{ session('layoutType') ?? 'card' }}";
            layoutElArr.forEach((element) => {
                element.classList.toggle('card-layout', currentLayoutType === 'card');
                element.classList.toggle('list-layout', currentLayoutType === 'list');
            });

            const swiperProduct = new Swiper('.product-page-slider', {
                modules: [EffectFade, Pagination],
                loop: false,
                grabCursor: false,
                pagination: {
                    el: '.swiper-pagination-product',
                    clickable: true,
                    renderBullet: function(index, className) {
                        return '<span class="' + className + '">' + '</span>'
                    }
                }
            })

            const btn = document.querySelector('.product-page__change-btn');
            const menu = document.querySelector('.product-page__page-count');

            // Обработчик клика по кнопке
            btn.addEventListener('click', () => {
                menu.classList.toggle('_active');
                menu.classList.toggle('hidden');
            })


        });

        document.addEventListener('livewire:init', () => {
            Livewire.on('updateLayout', (eventData) => {
                const layoutElArr = document.querySelectorAll('[data-layout]');
                const layoutType = eventData.layoutType;

                layoutElArr.forEach((element) => {
                    element.classList.toggle('card-layout', layoutType === 'card');
                    element.classList.toggle('list-layout', layoutType === 'list');
                });
            });
        });
    </script>
@endsection
