@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Импорт ')
@section('content_header')
<h1>Импорт</h1>
@stop
@section('content')


 тест Импорт


 <livewire:admin-queue />
@endsection

@section('scripts')
@parent


@endsection
