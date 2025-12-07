@extends('layouts.front')

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
@stop
