@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без цены производителя')
@section('content_header')
<h1>Товары без цены производителя</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-supplier-price-component :products-without-supplier-price="$productsWithoutSupplierPrice"/>
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