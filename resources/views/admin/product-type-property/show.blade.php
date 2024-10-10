@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Тип товара')
@section('content_header')
<h1>Тип товара {{ $productType->name }}</h1>
<h2> Характеристика типа товара {{ $productTypeProperty->name }}</h2>
@stop

{{-- Content body: main page content --}}
@section('content')
{{-- <a class="btn btn-primary" href="{{ route('admin.product_type_property.createNew', $parent_category) }}" role="button">Добавить</a> --}}

<livewire:product-type-prorety-values-component :productTypeProperty="$productTypeProperty" />

<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product_type.show',  $productType->id ) }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop

{{-- Push extra CSS --}}
@push('css')
{{-- Add here extra stylesheets --}}
@endpush

{{-- Push extra scripts --}}
@push('js')
@endpush
