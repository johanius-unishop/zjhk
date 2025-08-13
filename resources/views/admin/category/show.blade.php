@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Категория товаров '.$parent_category->name)
@section('content_header')
<h1>Категория товаров {{ $parent_category->name}}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

<livewire:subcategory-component :parent_category="$parent_category->id" />
<livewire:subcategory-table :parent_category="$parent_category->id" />

<div class="py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success" href="{{ $parent_category->parent_id !== null ? route('admin.category.show', ['category' => $parent_category->parent_id]) : route('admin.category.index') }}" role="button"><i class="fa fa-arrow-left"></i> Назад</a>
</div>

@stop




{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
