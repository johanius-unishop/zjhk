<div class="header__bottom">
    <div class="header__container container">
        <div class="header__bottom-wrapper">
            <a href="{{ route('home') }}" class="header__logo-link">
                <img src={{ asset('images/icons/logo.svg') }} alt="логотип" class="header__logo">
            </a>
            <div class="header__search-wrapper">
                <button class="header__catalogue-btn btn">
                    <div class="header__stripes">
                        <span class="first"></span>
                        <span class="second"></span>
                        <span class="third"></span>
                    </div>
                    <p>Каталог</p>
                </button>
                @livewire('front.search-result')
                <div class="catalogue__layer">
                    <div class="catalogue__layer-scroll">
                        <div class="catalogue__container">
                            <div class="catalogue__wrapper">
                                @foreach ($categories_catalog[0]->children as $menu_level_1_item)
                                    <div class="catalogue__desc">
                                        <p>
                                            <img src={{ asset('images/icons/adapter.svg') }} alt="адаптер">
                                            <a href="{{ config('app.url') . "/category/" . $menu_level_1_item->slug }}"><span>{{ $menu_level_1_item->name }}</span></a>
                                            <img src={{ asset('images/icons/arrow-blue-right.svg') }} alt="стрелка">
                                        </p>
                                    </div>
                                    <div class="catalogue__content">
                                        @foreach ($menu_level_1_item->children as $menu_level_2_item)
                                            <div class="catalogue__row">
                                                <a href="{{ config('app.url') . "/category/" . $menu_level_2_item->slug }}"><h3 class="catalogue__title">{{ $menu_level_2_item->name }}</h3></a>
                                                <ul class="catalogue__category-grid">
                                                    @foreach ($menu_level_2_item->children as $menu_level_3_item)
                                                        <li>
                                                            <a href="{{ config('app.url') . "/category/" . $menu_level_3_item->slug }}">{{ $menu_level_3_item->name }}</a>
                                                            @if ($menu_level_3_item->children->count() > 0)
                                                                <ul>
                                                                    @foreach ($menu_level_3_item->children as $menu_level_4_item)
                                                                        <li>
                                                                            <a href="{{ config('app.url') . "/category/" . $menu_level_4_item->slug }}">{{ $menu_level_4_item->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="header__actions">
                <ul class="header__actions-list">
                    <li class="header__actions-item">
                        @auth()
                            <a href="{{ route('home') }}" style="display: flex">
                                <img src="{{ asset('images/icons/account.svg') }}" alt="Аккаунт">
                                <span>{{ Auth::user()->name }}</span>
                            </a>
                        @else
                            <a data-modal-link="account" href="#" style="display: flex" data-toggle="modal"
                                data-target="#loginModal" class="no-scroll-to-handle">
                                <img src="{{ asset('images/icons/login.svg') }}" alt="Логин">
                                <span>Войти</span>
                            </a>
                        @endauth
                    </li>
                    <li class="header__actions-item">
                        <span style="display: none">11</span>
                        <a href="#">
                            <img src={{ asset('images/icons/box-stroke.svg') }} alt="Заказы">
                            <span>Заказы</span>
                        </a>
                    </li>
                    <li class="header__actions-item">
                        <span style="display: none">33</span>
                        <a href="#">
                            <img src={{ asset('images/icons/bookmark.svg') }} alt="Избранное">
                            <span>Избранное</span>
                        </a>
                    </li>
                    <li class="header__actions-item">
                        <span style="display: none">5</span>
                        <a href="#">
                            <img src={{ asset('images/icons/cart.svg') }} alt="Корзина">
                            <span>Корзина</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
