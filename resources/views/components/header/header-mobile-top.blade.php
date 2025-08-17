<div class="header-mobile__top">
    <div class="header__container container">
        <div class="header-mobile__top-wrapper">
            <div class="header-mobile__contacts">
                <a class="header-mobile__phone-link" href="tel:{{ $mainContacts['companyMainPhonePurified'] }}">
                    <img src={{ asset('images/icons/phone-stroke.svg') }}  alt="телефон">
                    <span>{{ $mainContacts['companyMainPhone'] }}</span>
                </a>
                <a class="header-mobile__email-wrapper" href="mailto:{{ $mainContacts['companyMainEmail'] }}">
                    <img src={{ asset('images/icons/envelope-stroke.svg') }}  alt="почта">
                    <span>{{ $mainContacts['companyMainEmail'] }}</span>
                </a>
            </div>
        </div>
    </div>
</div>
