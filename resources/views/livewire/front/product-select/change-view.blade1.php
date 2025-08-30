<div class="product-page__sort-container">
    <div>

    </div>
    <div class="product-page__change-layout">
        <!-- Кнопка карточки -->
        <button wire:click="switchLayout" id="card-layout" class="toggle__layout">
            <img src="{{ asset('images/icons/block-gray.svg') }}" alt="Карточки"
                class="change__img {{ $layoutType === 'card' ? '_active' : '' }}">
        </button>

        <!-- Кнопка списка -->
        <button wire:click="switchLayout" id="list-layout" class="toggle__layout">
            <img src="{{ asset('images/icons/list.svg') }}" alt="Список"
                class="change__img {{ $layoutType === 'list' ? '_active' : '' }}">
        </button>
    </div>
</div>

