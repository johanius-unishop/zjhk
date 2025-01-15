@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без указания типа')
@section('content_header')
<h1>Товары без определения типа</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-type-component :products-without-type="$productsWithoutType" :product-types="$productTypes"/>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush