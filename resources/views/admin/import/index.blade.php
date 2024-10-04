@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Импорт ')
@section('content_header')
<h1>Импорт</h1>
@stop
@section('content')
<livewire:admin-queue />



<a href="{{ route('admin.import.import_product_images') }}" class="btn btn-primary"
target="_blank">Импортировать productImages </a>
<a href="{{ route('admin.import.import_product_files') }}" class="btn btn-primary"
target="_blank">Импортировать productFiles </a>
@endsection

@section('scripts')
@parent


@endsection
