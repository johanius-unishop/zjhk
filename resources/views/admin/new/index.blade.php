@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Новости')
@section('content_header')
<h1>Новости</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.new.create') }}" role="button">Добавить</a>
</div>
<livewire:news-table />
@stop

{{-- Push extra CSS --}}
@push('css')
@endpush

{{-- Push extra scripts --}}
@push('js')
@endpush
