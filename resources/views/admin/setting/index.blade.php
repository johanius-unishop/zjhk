@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Настройки сайта')
@section('content_header')
<h1>Настройки сайта</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.setting.create') }}" role="button">Добавить настройку</a>
</div>
<livewire:setting-table />

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
