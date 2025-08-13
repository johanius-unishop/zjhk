@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Заказы поставщикам')
@section('content_header')
<h1>Заказы поставщикам</h1>
@stop

{{-- Content body: main page content --}}

@section('content')


<livewire:order-component />
<livewire:order-table />
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