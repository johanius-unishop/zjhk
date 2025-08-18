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

<link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.css') }}">


<link rel="stylesheet" href="{{ asset('vendor/bootstrap4-toggle/bootstrap4-toggle.min.css') }}">
{{-- просмотр фото --}}
<link href="{{ asset('vendor/venobox/venobox.min.css') }}" rel="stylesheet">
{{-- просмотр фото --}}
@stop

@yield('scripts')

@section('js')
@livewireScriptConfig()

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
