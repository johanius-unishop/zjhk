@extends('layouts.app')

@section('title', 'Личный кабинет | Профиль')

@section('content')
    <main>
        <section class="account-profile">
            <div class="account-profile__container container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li><a href="#">Главная</a><img src="{{ asset('images/icons/arrow-right.svg') }}" alt="стрелка">
                        </li>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/cleave.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.6.0/addons/cleave-phone.ru.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var phoneNumberElement = document.getElementById('profile-phone');
            new Cleave(phoneNumberElement, {
                numericOnly: true,
                delimiters: ['+', '7 ', '(', ') ', ' - ', ' - '],
                blocks: [0, 0, 0, 3, 3, 2, 2],
            });
        });
    </script>
@endsection
