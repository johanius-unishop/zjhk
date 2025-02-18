@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без технических характеристик<')
@section('content_header')
<h1>Товары без технических характеристик</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-property-values-component/>
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