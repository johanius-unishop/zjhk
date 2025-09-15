<section class="product-desc__analog">
    <div class="product-desc__container container">
        <div class="product-desc__analog-wrapper">
            <h2 class="product-desc__analog-title">Аналоги</h2>
            @auth
                <div class="product-desc__analog-product-wrapper">
                    @foreach ($data['analogs'] as $analog_vendor => $analog)
                        <p class="product-desc__analog-row">
                            <span>{{ $analog_vendor }}</span> <span>{{ $analog }}</span>
                        </p>
                    @endforeach
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
        @livewire('front.product-reviews-and-questions-section', [
                        'product' => $data['product'],
                        'acceptsWebP' => $data['acceptsWebP']
                    ])
    </div>
</section>
