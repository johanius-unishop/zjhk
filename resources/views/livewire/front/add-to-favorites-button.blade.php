<div class="product-desc__cart-actions" wire:ignore.self>
    <button wire:click="toggleFavorite" class="product-page__label-btn">
        @if ($isInFavorites)
            Удалить из избранных
        @else
            <img class="product-page__label" src="{{ asset('images/icons/label-gray.svg') }}" alt="избранное">
            В избранное
        @endif
    </button>
    <button><img src="{{ asset('images/icons/share.svg') }}" alt="поделиться">
        Поделиться
    </button>
</div>
