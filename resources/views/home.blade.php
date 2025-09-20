@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
<main>
   @include('components.main-page.banner')
   @include('components.main-page.benefits')
   @include('components.main-page.popular')
   @include('components.main-page.about')
   @include('components.main-page.news')
   @include('components.main-page.articles')
   @include('components.main-page.documents')
   @include('components.main-page.brands')
</main>
@endsection

@section('css')

@stop

@yield('scripts')
<script src="{{ asset('js/home/newsSlider.js') }}"></script>
<script src="{{ asset('js/home/articlesSlider.js') }}"></script>
<script src="{{ asset('js/home/documentsSlider.js') }}"></script>
<script src="{{ asset('js/home/brandsSlider.js') }}"></script>

@section('js')


@if($errors->has('email') || $errors->has('password'))
<script>
   $(function() {
      $('#loginModal').modal({
         show: true
      });
   });
</script>
@endif

@stop
