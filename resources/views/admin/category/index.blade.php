@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Категории товаров')
@section('content_header')
<h1>Категории товаров</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

<livewire:category-table/>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
