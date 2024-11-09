@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Способы доставки')
@section('content_header')
<h1>Способы доставки</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.delivery.create') }}" role="button">Добавить</a>
</div>
<livewire:delivery-table />
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
