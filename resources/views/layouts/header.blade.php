<header id="header" class="header">
    @include('components.header.header-top')
    @include('components.header.header-bottom')
</header>
<div id="header-mobile" class="header-mobile">
    @include('components.header.header-mobile-top')
    @include('components.header.header-mobile-bottom')
</div>

@push('scripts')
    <script src="{{ asset('js/header.js') }}"></script>
@endpush
