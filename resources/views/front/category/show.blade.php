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
        @else
            <section class="product-page">
                <div class="product-page__container container">
                    @include('components.catalog-section.breadcrumbs')
                    <div class="product-page__main-title">
                        <h2>{{ $data['category']->name }}</h2>
                        <p>{{ $data['category']->description }}</p>
                    </div>
                    @livewire('front.products-select', [
                        'category' => $data['category'],
                        'filter' => $data['filter'],
                        'acceptsWebP' => $data['acceptsWebP'];
                    ])
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

        document.addEventListener('livewire:load', event => {
            console.log('Новая структура DOM построена!');

            // Тут можно разместить ваш JavaScript-код
            // Например, инициализация плагинов или другие действия

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
            console.log('сработало!')

        });
    </script>
@endsection
