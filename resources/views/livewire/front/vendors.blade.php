<div class="news__content">
    <div class="news__title-body">
        <h2>Новости</h2>
        <p>Информация о поставщиках и корпоративных событиях</p>
    </div>
    <div class="card__item-wrapper">
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/content/electro-2022.jpg" alt="новости">
                </div>
                <div>
                    <h5>Участие ООО «КевТек» в выставке ЭЛЕКТРО-2024</h5>
                    <p>Выставка состоится 6-9 июня 2024 года в Экспоцентрег. Москва</p>
                </div>
                <a href="#">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="product-page__show">

    </div>
    <div class="product-page__pagination">
        <div class="product-page__pagination-content">
            {{ $docs->links('vendor.pagination.custom') }}
            <div class="product-page__page-size" data-page-size>
                <p class="product-page__page-select">
                    <span>Показывать по </span>
                    <button wire:click="toggleMenu" class="product-page__change-btn">
                        <span id="page-count">{{ $perPage }}</span>
                        <img src="{{ asset('images/icons/tick-black.svg') }}" alt="список страниц">
                    </button>
                </p>
                <ul class="product-page__page-count {{ $menuIsOpen === true ? '_active' : 'hidden' }}"
                    data-select-page>
                    @foreach ($perPageOptions as $option)
                        <li>
                            <button wire:click="changePerPage({{ $option }})" wire:loading.attr="disabled">
                                {{ $option }}
                            </button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
