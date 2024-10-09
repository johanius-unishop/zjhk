@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Полезные статьи')
@section('content_header')
<h1>Полезные статьи</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.article.create') }}" role="button">Добавить</a>
</div>
<livewire:article-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
