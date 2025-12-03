@extends('layouts.app')

@section('title', 'Документация')

@section('content')
    <main>
        <section class="docs">
            <div class="docs__container container">
                @include('components.breadcrumbs')
                @livewire('front.docs', ['acceptsWebP' => $acceptsWebP])
            </div>
        </section>
    </main>


@endsection

@section('css')


@stop

@yield('scripts')

<script src="{{ asset('js/choices.js') }}"></script>

@section('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            console.log('инициализация');

            // Подписываемся на событие обновления компонента
            window.addEventListener('wired:update', () => {

                console.log('обновление');
            });
        });
    </script>

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
