@extends('layouts.app')

@section('title', 'Личный кабинет | Профиль')

@section('content')
    <main>
        <section class="account-profile">
            <div class="account-profile__container container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li><a href="#">Главная</a><img src="./img/icons/arrow-right.svg" alt="стрелка"></li>
                        <li><span>Личный кабинет</span></li>
                    </ul>
                </div>
                <h2 class="account-profile__title">Личный кабинет</h2>
                @livewire('front.user-profile', [
                    'user' => $user,
                ])
            </div>
        </section>
    </main>
@endsection

@section('css')


@stop

@section('scripts')
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
