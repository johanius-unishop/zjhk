@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Характеристики товаров без назначенных значений')
@section('content_header')
<h1>Характеристики товаров без назначенных значений</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-type-properties-without-values-component/>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
