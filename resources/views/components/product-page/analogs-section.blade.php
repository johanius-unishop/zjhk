<section class="product-desc__analog">
    <div class="product-desc__container container">
        <div class="product-desc__analog-wrapper">
            <h2 class="product-desc__analog-title">Аналоги</h2>
            @auth
                <div class="product-desc__analog-product-wrapper">
                <p class="product-desc__technical-row">
                    <span>DEGSON</span> <span>CKA 03VS</span>
                </p>
                <p class="product-desc__technical-row">
                    <span>HARTING</span> <span>H3A-MTG-PG11</span>
                </p>
                <p class="product-desc__technical-row">
                    <span>Phoenix</span> <span>D3A-TE-2g-PG25</span>
                </p>
            </div>
            @else
                <div class="product-desc__analog-invite">
                <img src="img/icons/attention.svg" alt="войдите">
                <p class="product-desc__analog-text">
                    <button data-modal-link="account"><span>Войдите</span>,</button>
                    чтобы увидеть европейские аналоги к данному товару.
                </p>
            </div>
            @endauth
        </div>
        @include('components.product-page.reviews-and-questions-section')
    </div>
</section>
