@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Типы товаров')
@section('content_header')
<h1>Типы товаров</h1>
@stop

{{-- Content body: main page content --}}
@section('content')
<a class="btn btn-primary" href="{{ route('admin.product-type.create') }}" role="button">Добавить</a>
<livewire:product-type-table />


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
