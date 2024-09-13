@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Категория товаров '.$parent_category->name)
@section('content_header')
<h1>Категория товаров {{ $parent_category->name}}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
 
<div class=" py-3 ">
    <a class="btn btn-primary" href="{{ route('admin.category.createNew', $parent_category->id) }}" role="button">Добавить</a>
</div>

<livewire:subcategory-table :parent_category="$parent_category->id" />

<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.category.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
