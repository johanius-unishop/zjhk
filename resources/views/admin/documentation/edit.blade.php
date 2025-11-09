@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Административный раздел: Редактирование документа')
@section('content_header')
    <h1>Редактирование документа {{ $documentation->name }}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

    @include('admin.blocks.error')

    <div class="row">
        <div class="col-12 ">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Основное</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.documentation.update', $documentation->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="title">Название документа</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $documentation->title }}">
                                    @error('title')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="vendor_id" class="form-label">Бренд</label>
                                    <select class="form-control" id="vendor_id" name="vendor_id">
                                        <option value="0">---Выберите бренд---</option>
                                        @foreach ($vendors as $vendor)
                                            <option value="{{ $vendor->id }}"
                                                {{ $vendor->id == @$documentation->vendor_id ? 'selected' : '' }}>
                                                {{ $vendor->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="type_id" class="form-label">Тип документа</label>
                                    <select class="form-control" id="type_id" name="type_id">
                                        <option value="0">---Выберите тип документа---</option>
                                        @foreach ($documentationTypes as $type)
                                            <option value="{{ $type->id }}"
                                                {{ $type->id == @$documentation->type_id ? 'selected' : '' }}>
                                                {{ $type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="text">Описание документа</label>
                                    <textarea class="form-control" name="text" rows="2">{{ @$documentation->text }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="py-3 form-row justify-content-center">
                            <a class="btn btn-success mx-1" href="{{ route('admin.documentation.index') }}" role="button">
                                <i class="fa fa-arrow-left"></i> К списку
                            </a>
                            <button type="submit" name="action" value="save-exit" class="btn btn-primary mx-1">
                                Сохранить и закрыть
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Изображение для документа</h3>
                </div>
                <livewire:documentation-images-gallery :record="$documentation" />
            </div>
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Файл документа</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class=" col-12">
                            <livewire:product-files-component :record="$documentation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

@push('js')
    @include('admin.blocks.summernote')

    <script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
