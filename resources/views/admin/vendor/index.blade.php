@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Производители')
@section('content_header')
<h1>Производители</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.vendor.create') }}" role="button">Добавить</a>
</div>
<livewire:vendor-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
