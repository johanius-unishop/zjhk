@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары')
@section('content_header')
<h1>Товары</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<a class="btn btn-info" href="{{ route('admin.product_statistic') }}" role="button">Статистика</a>


<a class="btn btn-primary" href="{{ route('admin.product.create') }}" role="button">Добавить</a>

<livewire:product-table />
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
