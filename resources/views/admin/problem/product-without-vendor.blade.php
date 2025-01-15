@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без указания производителя')
@section('content_header')
<h1>Товары без указания производителя</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-vendor-component :products-without-vendor="$productsWithoutVendor" :vendors="$vendors"/>
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