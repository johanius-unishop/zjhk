@extends('layouts.app')

@section('title', 'Производители')

@section('content')
    <main>
        <section class="news section">
            <div class="news__container container">
                @include('components.breadcrumbs')
                @livewire('front.vendors', ['acceptsWebP' => $acceptsWebP])
            </div>
        </section>
    </main>
@endsection

@section('css')


@stop

@yield('scripts')



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
