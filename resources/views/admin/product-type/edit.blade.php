@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Редактирование типа товаров')
@section('content_header')
<h1>Редактирование типа товаров</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

@include('admin.blocks.error')

<form action="{{ route('admin.product_type.update', $product_type->id) }}" method="POST">

    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{ $product_type->id }}">
    <div class="row">
        <div class="col-12 ">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Основное</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">

                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <div class="tab-content" id="custom-tabs-four-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="name">Название</label>
                                                <input type="text" class="form-control" name="name" value="{{ $product_type->name  }}">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label for="name_plural">Множественное число</label>
                                                <input type="text" class="form-control" name="name_plural" value="{{$product_type->name_plural}}">
                                                @error('name_plural')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="composite" id="composite" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product_type->composite ? 'checked ' : ' ' !!}>
                                        <label class="form-check-label" for="exampleCheck1">Композитный</label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-3 form-row justify-content-center">
                <a class="btn   btn-success " href="{{ route('admin.product_type.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a> &nbsp;
                <button type="submit" class="btn btn-primary">Сохранить</button> &nbsp;
                <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и
                    закрыть</button>
            </div>
        </div>
    </div>
</form>
@stop

@push('css')
@endpush

@push('js')
@endpush
