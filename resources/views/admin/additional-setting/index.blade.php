@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Дополнительные настройки сайта')
@section('content_header')
<h1>Дополнительные настройки сайта</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.additional-setting.create') }}" role="button">Добавить настройку</a>
</div>
<livewire:additional-setting-table />

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
