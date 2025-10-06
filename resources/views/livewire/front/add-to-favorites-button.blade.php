<div class="product-desc__cart-actions" wire:ignore.self>
    <!-- Button for adding or removing from favorites -->
    <button wire:click="toggleFavorite" class="product-page__label-btn {{ $isInFavorites ? '_active' : '' }}">
        <img class="product-page__label" src="{{ asset('images/icons/label-gray.svg') }}" alt="избранное">
        В избранное
    </button>

    <!-- Share button -->
    <button>
        <img src="{{ asset('images/icons/share.svg') }}" alt="поделиться">
        Поделиться
    </button>
</div>
