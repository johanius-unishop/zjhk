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
                        @if (isset($data['filter']) && !empty($data['filter']))
                            <button class="product-page__open-filter">Показать фильтр</button>
                            <aside class="product-page__filter filter">
                                <form class="filter__item">
                                    <div>
                                        <label for="type">Тип резьбы</label>
                                        <select class="filter__select" name="type" id="type">
                                            <option placeholder>Выбрать</option>
                                            <option value="1">Характеристика 1</option>
                                            <option value="2">Характеристика 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="material">Материал контактов</label>
                                        <select class="filter__select" name="material" id="material">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                            <option value="">Характеристика 3</option>
                                            <option value="">Характеристика 4</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="surface">Покрытие контактов</label>
                                        <select class="filter__select" name="surface" id="surface">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                            <option value="">Характеристика 3</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="qty">Количество контактов</label>
                                        <select class="filter__select" name="qty" id="qty">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="current">Номинальный ток</label>
                                        <select class="filter__select" name="current" id="current">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="voltage">Номинальное напряжение</label>
                                        <select class="filter__select" name="voltage" id="voltage">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                            <option value="">Характеристика 3</option>
                                            <option value="">Характеристика 4</option>
                                            <option value="">Характеристика 5</option>
                                            <option value="">Характеристика 6</option>
                                            <option value="">Характеристика 7</option>
                                            <option value="">Характеристика 8</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="temp">Диапазон рабочих температур</label>
                                        <select class="filter__select" name="temp" id="temp">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="join">Присоединение проводников</label>
                                        <select class="filter__select" name="join" id="join">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                            <option value="">Характеристика 3</option>
                                            <option value="">Характеристика 4</option>
                                            <option value="">Характеристика 5</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="cut">Поперечное сечение проводников</label>
                                        <select class="filter__select" name="cut" id="cut">
                                            <option placeholder>Выбрать</option>
                                            <option value="">Характеристика 1</option>
                                            <option value="">Характеристика 2</option>
                                        </select>
                                    </div>
                                    <div class="filter__btn-container">
                                        <button class="filter__btn-impl">Применить</button>
                                    </div>
                                    <div class="filter__btn-container">
                                        <button type="button" class="filter__btn-cancel">Очистить все</button>
                                    </div>
                                </form>
                            </aside>
                        @endif
                        <div class="product-page__layout">
                            @livewire('front.product-select.change-view', ['layoutType' => session()->get('layoutType', 'card')])
                            @livewire('front.product-select.products', [
                                'elements' => $data['products'],
                                'layoutType' => session()->get('layoutType', 'card'),
                            ])

                            <div class="product-page__show">
                                <button>Показать еще</button>
                            </div>
                            <div class="product-page__pagination">
                                <div class="product-page__pagination-content">
                                    {{ $data['paginatedProducts']->links() }}
                                    <div class="product-page__page-size" data-page-size>
                                        <div>
                                            <p class="product-page__page-select">
                                                <span>Показывать по </span>
                                                <button class="product-page__change-btn">
                                                    <span id="page-count">{{ $data['perPage'] }}</span>
                                                    <img src="{{ asset('images/icons/tick-black.svg') }}"
                                                        alt="список страниц">
                                                </button>
                                            </p>
                                            <ul class="product-page__page-count" data-select-page>
                                                <li><button
                                                        onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 8]) }}'">8</button>
                                                </li>
                                                <li><button
                                                        onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 12]) }}'">12</button>
                                                </li>
                                                <li><button
                                                        onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 16]) }}'">16</button>
                                                </li>
                                                <li><button
                                                        onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 20]) }}'">20</button>
                                                </li>
                                                <li><button
                                                        onclick="window.location='{{ request()->fullUrlWithQuery(['per_page' => 24]) }}'">24</button>
                                                </li>
                                            </ul>
                                        </div>
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

        const favouriteLabel = document.querySelectorAll('.product-page__label')
        const toggleLayoutBtn = document.querySelectorAll('.toggle__layout')

        const pageSizeElArr = document.querySelectorAll('.product-page__page-count')
        const changePageBtn = document.querySelector('.product-page__change-btn')
        const pageNumberArr = document.querySelectorAll('.product-page__page-list > li > button')
        const addCartBtnArr = document.querySelectorAll('.product-page__add-cart')
        const removeFilterBtn = document.querySelector('.product-page__open-filter')
        const filterLayout = document.querySelector('.product-page__filter')
        const layoutElArr = document.querySelectorAll('[data-layout]')


        const changeLayoutIcon = (currentBtn) => {
            const hasActiveClass = currentBtn.firstElementChild.matches('.change__img._active')

            if (!hasActiveClass) {
                addClass(currentBtn.firstElementChild, '_active')
                const typeOfLayout = currentBtn.getAttribute('id')
                if (typeOfLayout === 'list-layout') {
                    layoutElArr.forEach((element) => {
                        removeClass(element, 'card-layout')
                        addClass(element, 'list-layout')
                    })
                } else {
                    layoutElArr.forEach((element) => {
                        removeClass(element, 'list-layout')
                        addClass(element, 'card-layout')
                    })
                }

                toggleLayoutBtn.forEach((btn) => {
                    if (btn !== currentBtn) {
                        removeClass(btn.firstElementChild, '_active')
                    }
                })
            }
        }

        favouriteLabel.forEach((item) => {
            item.addEventListener('click', () => toggleClass(item, '_active'))
        })

        addCartBtnArr.forEach((btn) => {
            btn.addEventListener('click', () => {
                toggleClass(btn, '_cart')
                if (btn.classList.contains('_cart')) {
                    btn.textContent = 'В корзине'
                } else {
                    btn.textContent = 'В корзину'
                }
            })
        })

        toggleLayoutBtn.forEach((btn) => {
            btn.addEventListener('click', () => changeLayoutIcon(btn))
        })

        const changePageNumber = () => {
            pageNumberArr.forEach((pageNumberEl) => {
                pageNumberEl.addEventListener('click', () => {
                    for (let page of pageNumberArr) {
                        removeClass(page, '_active')
                    }
                    addClass(pageNumberEl, '_active')
                })
            })
        }

        changePageNumber()

        const closePagination = (e) => {
            if (!isTargetElement(changePageBtn, e.target)) {
                removeClass(changePageBtn, '_active')
                removeClass(changePageBtn?.parentElement.nextElementSibling, '_active')
            }
        }

        changePageBtn?.addEventListener('click', (e) => {
            toggleClass(changePageBtn, '_active')
            toggleClass(changePageBtn?.parentElement.nextElementSibling, '_active')
            e.stopPropagation()
        })

        removeFilterBtn?.addEventListener('click', () => {
            toggleClass(filterLayout, '_active')
            toggleClass(removeFilterBtn, '_active')
            if (removeFilterBtn.classList.contains('_active')) {
                removeFilterBtn.textContent = 'Скрыть фильтр'
            } else {
                removeFilterBtn.textContent = 'Показать фильтр'
            }
        })


        pageSizeElArr.forEach((el) => {
            el.addEventListener('click', (e) => {
                if (e.target.hasAttribute('data-page')) {
                    const pageValue = e.target.getAttribute('data-page')
                    const pageCountElValue = el.previousElementSibling.lastElementChild.firstElementChild
                    if (pageValue === pageCountElValue) {
                        return
                    } else pageCountElValue.textContent = pageValue
                } else return
            })
        })

        document.addEventListener('click', (e) => {
            e.stopPropagation()
            closePagination(e)
        })
    </script>
@endsection
