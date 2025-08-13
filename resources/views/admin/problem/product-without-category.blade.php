@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без указания категории')
@section('content_header')
<h1>Товары без определения категории</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-category-component :products-without-category="$productsWithoutCategory" :categories="$categories"/>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
