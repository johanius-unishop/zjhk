<div data-modal="account" class="modal">
    <div data-close="true" class="modal__overlay">
        <div class="modal__body">
            <span data-close="true" class="modal__close">&#10006;</span>
            @include('partials.login')
            @include('partials.registration')
            @include('partials.verify-email')
            @include('partials.password-reset-link')
        </div>
    </div>
</div>
