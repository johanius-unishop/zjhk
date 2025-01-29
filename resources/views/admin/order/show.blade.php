extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Состав заказа поставщику')
@section('content_header')
    <h1 class="page-title">Состав заказа поставщику "<span class="order-number">{{ $parent_order->order_number }}</span>" от <span class="order-date">{{ $parent_order->order_date }}</span></h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:order-composition-table :parent_order="$parent_order->id"/>
@stop

{{-- Push extra CSS --}}

@push('css')
<style>
    .page-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-align: center;
    }

    .order-number {
        font-weight: bold;
        color: #007bff;
    }

    .order-date {
        font-style: italic;
        color: #666;
    }
</style>
@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush