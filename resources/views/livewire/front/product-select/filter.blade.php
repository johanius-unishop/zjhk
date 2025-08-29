<aside class="product-page__filter filter">
    @if ($filter == 1)
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
    @endif
</aside>
