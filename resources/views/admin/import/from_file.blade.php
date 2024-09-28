@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Импорт товаров из файла')
@section('content_header')
<h1>Импорт товаров из файла</h1>
@stop
@section('content')
@include('admin.blocks.error')


<div class="row">
    <div class="col-md-12">

        <form action="{{ route('admin.from_file') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="file">Файл</label>
                <input type="file" name="file" id="file"  accept="text/csv" class="form-control">
            </div>
            <div class="form-group">
                <label for="delimiter">Разделитель</label>
                <input type="text" name="delimiter" id="delimiter" class="form-control">
            </div>
            <div class="form-group">
                <label for="enclosure">Округление</label>
                <input type="text" name="enclosure" id="enclosure" class="form-control">
            </div>
            <div class="form-group">
                <label for="enclosure">ТЕСТ </label>
                <input type="checkbox" class="form-check-input"  checked name="test" id="test" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет">
            </div>
            <div class=" py-3 form-row justify-content-center">
                <button type="submit" class="btn btn-primary">Начать загрузку</button>
            </div>
    </div>
    @endsection

    {{-- Push extra CSS --}}

    @push('css')
    {{-- Add here extra stylesheets --}}


    @endpush

    {{-- Push extra scripts --}}

    @push('js')
    @endpush
