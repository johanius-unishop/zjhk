@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары без описания ')
@section('content_header')
<h1>Товары без описания </h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<livewire:without-description-table />
<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i
            class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
