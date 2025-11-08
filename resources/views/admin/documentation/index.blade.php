@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Административный раздел: Документация')
@section('content_header')
<h1>Документация</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.documentation.create') }}" role="button">Добавить документацию</a>
</div>
<livewire:documentation-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

{{--<script src="{{ asset('js/powergrid.js') }}"></script>--}}
@endpush
