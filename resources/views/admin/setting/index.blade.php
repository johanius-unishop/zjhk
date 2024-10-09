@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Настройки сайта')
@section('content_header')
<h1>Настройки сайта</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:setting-component />

@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
