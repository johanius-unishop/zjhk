@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Страны')
@section('content_header')
<h1>Страны</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

<livewire:country-component />
<livewire:country-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush

