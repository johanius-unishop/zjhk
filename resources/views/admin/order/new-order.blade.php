@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Создание нового заказа поставщик')
@section('content_header')
<h1>Создание нового заказа поставщику</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

<livewire:new-order-component />

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
