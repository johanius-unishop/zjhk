@extends('admin')

{{-- Customize layout sections --}}

@section('title', '{{ $productType->name }} -> {{ $productTypeProperty->name }}')
@section('content_header')
<h1>Тип товара "{{ $productType->name }}", ID: {{ $productType->id }}</h1>
<h2> Характеристика типа товара "{{ $productTypeProperty->name }}", ID: {{ $productTypeProperty->id }}</h2>
@stop

{{-- Content body: main page content --}}
@section('content')

<livewire:product-type-property-value-component :parent_property="$productTypeProperty->id" />
<livewire:product-type-property-value-table :parent_property="$productTypeProperty->id" />


                        
<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product-type.show',  $productType->id ) }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
</div>
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
