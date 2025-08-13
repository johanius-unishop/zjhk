@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Типы PDF-файлов')
@section('content_header')
<h1>Типы PDF-файлов</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-pdf-type-component />
<livewire:product-pdf-type-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
