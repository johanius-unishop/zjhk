@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Создание новой подкатегории товаров')
@section('content_header')
<h1>Создание новой подкатегории товаров</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
 


<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.category.index') }}" role="button"> <i
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
