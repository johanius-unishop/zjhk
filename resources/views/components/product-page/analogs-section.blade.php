<section class="product-desc__analog">
    <div class="product-desc__container container">
        <h2 class="product-desc__analog-title">Аналоги</h2>
        <div class="product-desc__analog-invite">
            @auth
                <p>Показываем информацию об аналогах</p>
            @else
                <img src="{{ asset('images/icons/attention.svg') }}" alt="войдите">
                <p class="product-desc__analog-text">
                    <button data-modal-link="account"><span>Войдите</span>,</button>
                    чтобы увидеть информацию по аналогам к данному товару.
                </p>
            @endauth
        </div>
        @include('components.product-page.reviews-and-questions-section')
    </div>
</section>
