@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без указания ТН ВЭД')
@section('content_header')
<h1>Товары без указания ТН ВЭД</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:product-without-tnved-component :products-without-tnved="$productsWithoutTnved"/>
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