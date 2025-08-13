@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без указания типа')
@section('content_header')
<h1>Товары без определения типа</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-currency-component :products-without-currency="$productsWithoutCurrency" :currencies="$currencies"/>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScriptConfig 
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush