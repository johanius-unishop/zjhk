<div class="header__top-admin">
    <div class="header__container container">
        <div class="header__admin-wrapper">
            <a href="{{ route('admin.dashboard') }}" class="header__admin-link">
                <span>Административный раздел</span>
            </a>
            <a href="{{ route('admin.dashboard') }}" class="header__admin-link">
                <span>{{ Auth::user()->email }}</span>
            </a>
        </div>
    </div>
</div>
