@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без 3D-моделей')
@section('content_header')
<h1>Товары без 3D-моделей</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-model-component/>
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