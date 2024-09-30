@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Статические страницы')
@section('content_header')
<h1>Статические страницы</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.page.create') }}" role="button">Добавить</a>
</div>
<livewire:page-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
