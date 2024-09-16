@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Производители аналогов')
@section('content_header')
<h1>Производители аналогов</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.analog-vendor.create') }}" role="button">Добавить</a>
</div>
<livewire:analog-vendor-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
