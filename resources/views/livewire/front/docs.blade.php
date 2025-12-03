<div class="docs__content">
    <div class="news__title">
        <h2>Документация</h2>
        <p>Здесь вы можете скачать техническую спецификацию изделий, каталоги на русском языке</p>
    </div>
    <div class="docs__filter-container">
        <div>
            <label for="vendor">Бренд</label>
            <select wire:model="selectedVendor" class="filter__select" name="vendor" id="vendor">
                <option value="">Выбрать</option>
                @foreach ($vendors as $vendor)
                    <option value="{{ $vendor->id }}">{{ $vendor->name }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="type">Тип документации</label>
            <select wire:model="selectedType" class="filter__select" name="type" id="type">
                <option value="">Выбрать</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="card__item-wrapper">
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-1.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-2.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-3.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-4.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-1.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-2.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-3.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>
        <div class="news__item">
            <div>
                <div>
                    <img src="./img/products/doc-4.jpg" alt="документация">
                </div>
                <div>
                    <h5>Промышленные прямоугольные разъемы “Тип A”</h5>
                    <p>Корпусы и кожухи прямоугольных промышленных разъёмов
                        3A, 10A, 16A, 32A</p>
                </div>
                <a href="#">Скачать</a>
            </div>
        </div>

    </div>
    <div class="product-page__show">
        <button>Показать еще</button>
    </div>
    <div class="product-page__pagination">
        <div class="product-page__pagination-content">
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
</div>
