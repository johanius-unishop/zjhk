@extends('layouts.app')

@section('title', 'Статьи')

@section('content')
    <main>
        <section class="articles section">
            <div class="articles__container container">
                @include('components.breadcrumbs')
                @livewire('front.articles', ['acceptsWebP' => $acceptsWebP])
            </div>
        </section>
    </main>
@endsection


@section('css')

@stop

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
