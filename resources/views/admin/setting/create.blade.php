@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Добавление новой настройки')
@section('content_header')
<h1>Добавление новой настройки'</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

@include('admin.blocks.error')

<form action="{{ route('admin.setting.store')  }}" method="POST">
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
                                        <label for="group">Группа</label>
                                        <input type="text" class="form-control" name="group" value="{{  old('group') }}">
                                        @error('group')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="key">Настройка</label>
                                        <input type="text" class="form-control" name="key" value="{{  old('key') }}">
                                        @error('key')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-12 mb-3">
                                    <div class="form-group">
                                        <label for="value">Значение</label>
                                        <input type="text" class="form-control" name="value" value="{{  old('value') }}">
                                        @error('value')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-3 form-row justify-content-center">
                <a class="btn btn-success" href="{{ route('admin.setting.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a> &nbsp;
                
                <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и закрыть</button>
            </div>
        </div>
    </div>
</form>
@stop

@push('css')
@endpush

@push('js')
@endpush