<header id="header" class="header">
    @can('admin-content')
        @include('components.header.header-admin')
    @endcan
    @include('components.header.header-top')
    @include('components.header.header-bottom')
</header>
<div id="header-mobile" class="header-mobile">
    @include('components.header.header-mobile-top')
    @include('components.header.header-mobile-bottom')
</div>
