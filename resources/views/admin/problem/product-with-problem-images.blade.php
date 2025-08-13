@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары с проблемами изображений')
@section('content_header')
<h1>Товары с проблемами изображений</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-with-problem-images-component/>
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