@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Faq (ЧаВо)')
@section('content_header')
<h1>Faq (ЧаВо)</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.faq.create') }}" role="button">Добавить</a>
</div>
<livewire:faq-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
