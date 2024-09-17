@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Тип товара')
@section('content_header')
<h1>Тип товара {{ $parent_category->name }}</h1>
@stop

{{-- Content body: main page content --}}
@section('content')
<a class="btn btn-primary" href="{{ route('admin.product-type.create') }}" role="button">Добавить</a>
{{-- <livewire:product-type-list-table /> --}}

<livewire:product-type-property-table  :parent_category="$parent_category->id"/>

<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product-type.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop

{{-- Push extra CSS --}}
@push('css')
{{-- Add here extra stylesheets --}}
@endpush

{{-- Push extra scripts --}}
@push('js')
@endpush
