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

тест Импорт



@endsection

@section('scripts')
@parent


@endsection
