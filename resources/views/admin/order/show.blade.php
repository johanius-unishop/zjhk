@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Состав заказа поставщику')
@section('content_header')
<h1>Состав заказа поставщику {{ $parent_order->order_number }} от {{ $parent_order->order_date }}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:order-composition-table :parent_order="$parent_order->id"/>
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