<!-- Button for adding or removing from favorites -->
<button wire:click="toggleFavorite" class="product-page__label-btn">
    <img class="product-page__label"
        src="
        {{ $isInFavorites ? asset('images/icons/label-blue.svg') : asset('images/icons/label-gray.svg') }}
    "
        alt="избранное">
    @if ($contentType === 'productPage')
        В избранное
    @endif
</button>
