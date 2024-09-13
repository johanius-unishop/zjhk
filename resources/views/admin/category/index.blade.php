@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Категории товаров')
@section('content_header')
<h1>Категории товаров</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.category.create') }}" role="button">Добавить</a>
</div>
<livewire:category-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
