@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <main>
        @if ($mainPageSettings['displayBannerSection'])
            @include('components.main-page.banner')
        @endif
        @if ($mainPageSettings['displayBenefitsSection'])
            @include('components.main-page.benefits')
        @endif
        @if ($mainPageSettings['displayPopularSection'])
            @include('components.main-page.popular')
        @endif
        @if ($mainPageSettings['displayAboutSection'])
            @include('components.main-page.about')
        @endif
        @if ($mainPageSettings['displayNewsSection'])
            @include('components.main-page.news')
        @endif
        @if ($mainPageSettings['displayArticlesSection'])
            @include('components.main-page.articles')
        @endif
        @if ($mainPageSettings['displayDocsSection'])
            @include('components.main-page.documents')
        @endif
        @if ($mainPageSettings['displayBrandsSection'])
            @include('components.main-page.brands')
        @endif
    </main>
@endsection

@section('css')

@stop

@yield('scripts')
<script src="{{ asset('js/home/bannersSlider.js') }}"></script>
<script src="{{ asset('js/home/newsSlider.js') }}"></script>
<script src="{{ asset('js/home/articlesSlider.js') }}"></script>
<script src="{{ asset('js/home/documentsSlider.js') }}"></script>
<script src="{{ asset('js/home/brandsSlider.js') }}"></script>

@section('js')


    @if ($errors->has('email') || $errors->has('password'))
        <script>
            $(function() {
                $('#loginModal').modal({
                    show: true
                });
            });
        </script>
    @endif

@stop
