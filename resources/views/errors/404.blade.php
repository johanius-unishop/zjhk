@extends('layouts.app')

@section('title', '404')

@section('content')
<main>
    <section class="error">
        <div class="error__container container">
            <div class="error__img-container">
                <img src="{{ asset('images/content/404.jpg') }} " alt="404">
            </div>
            <div class="error__content">
                <h3>Похоже, такой страницы не существует</h3>
                <div class="error__btn-container">
                    <a href="{{ route('home') }}">На главную</a>
                    <a href="{{ route('contact') }}" class="error-btn btn-link">Связаться с нами</a>
                    <button>Написать нам</button>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('css')


@stop

@yield('scripts')

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
