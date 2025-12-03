@extends('layouts.app')

@section('title', 'Документация')

@section('content')
    <main>
        <section class="docs">
            <div class="docs__container container">
                @include('components.breadcrumbs')
                @livewire('front.documentations1', 'acceptsWebP' => $acceptsWebP)
            </div>
        </section>
    </main>


@endsection

@section('css')


@stop

@yield('scripts')

<script src="{{ asset('js/choices.js') }}"></script>

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
