@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Создание валюты')
@section('content_header')
<h1>Создание валюты</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

@include('admin.blocks.error')

<form action="{{ route('admin.currency.store')  }}" method="POST">
    @csrf
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
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="name">Название новой валюты</label>
                                        <input type="text" class="form-control" name="name" value="{{  old('name') }}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="charcode">Символьное обозначение</label>
                                        <input type="text" class="form-control" name="charcode" value="{{  old('charcode')  }}">
                                        @error('charcode')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="internal_rate">Внутренний курс валюты</label>
                                        <input type="text" class="form-control" name="internal_rate" value="{{  old('internal_rate') }}">
                                        @error('internal_rate')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="auto_multiplier">Множитель для расчета внутреннего курса</label>
                                        <input type="text" class="form-control" name="auto_multiplier" value="{{  old('auto_multiplier') }}">
                                        @error('auto_multiplier')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12 mb-3">
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input" name="auto_calc_cbrf" id="auto_calc_cbrf" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$currency->auto_calc_cbrf ? 'checked' : '' !!}>
                                        <label class="form-check-label" for="auto_calc_cbrf">Автоматический расчет внутреннего курса</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-3 form-row justify-content-center">
                <a class="btn   btn-success " href="{{ route('admin.currency.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a> &nbsp;
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
