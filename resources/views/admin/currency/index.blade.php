@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Валюты системы')
@section('content_header')
<h1>Валюты системы</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.currency.create') }}" role="button">Добавить</a>
</div>
<livewire:currency-table />
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
