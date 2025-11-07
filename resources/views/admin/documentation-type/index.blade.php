@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Административный раздел: Тип документации')
@section('content_header')
<h1>Тип документации</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.documentation-type.create') }}" role="button">Добавить тип</a>
</div>
<livewire:documentation-type-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
