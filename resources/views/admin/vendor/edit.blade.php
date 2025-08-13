@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Редактирование производителя')
@section('content_header')
<h1>Редактирование производителя {{ $vendor->short_name }}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ $vendor->front_url }}" role="button" target="_blank"><i class="fas fa-globe"></i>
        Просмотреть на сайте</a>
</div>

@include('admin.blocks.error')


    <input type="hidden" name="id" value="{{ $vendor->id }}">

    <div class="row">
        <div class="col-12 ">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Основное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">SEO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-logo-tab" data-toggle="pill" href="#custom-tabs-four-logo" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Логотип</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-catalogs-tab" data-toggle="pill" href="#custom-tabs-four-catalogs" role="tab" aria-controls="custom-tabs-four-catalogs" aria-selected="false">Каталоги производителя</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">

                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                            <form action="{{ route('admin.vendor.update', $vendor->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Название</label>
                                            <input type="text" class="form-control" name="name" value="{{ @$vendor->name }}">
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="short_name">Краткое название</label>
                                            <input type="text" class="form-control" name="short_name" value="{{ @$vendor->short_name }}">
                                            @error('short_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">

                                            <label for="slug">ЧПУ </label>
                                            <input type="text" class="form-control" name="slug" value="{{ @$vendor->slug }}">
                                            <div id="slugHelp" class="form-text">Заполняется автоматически. Ручное заполнение не желательно.</div>

                                            @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="country_id">Родина бренда</label>
                                            <select class="form-control" id="country_id" name="country_id">
                                                <option value="0">--Выберите страну--</option>
                                                @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" {{ $country->id == @$vendor->country_id ? 'selected' : '' }}>{{$country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="delivery_time">Срок поставки </label>
                                            <input type="text" class="form-control" name="delivery_time" value="{{ @$vendor->delivery_time }}">
                                            @error('delivery_time')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-6">
                                        <div class="form-group">
                                            <label for="warranty">Гарантия </label>
                                            <input type="text" class="form-control" name="warranty" value="{{ @$vendor->warranty }}">
                                            @error('warranty')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание</label>
                                    <textarea class="form-control" name="description" row="5" id="summernote">{{ $vendor->description }}</textarea>
                                </div>


                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$vendor->published ? 'checked ' : ' ' !!}>
                                    <label class="form-check-label" for="exampleCheck1">Опубликовано</label>
                                </div>
                                <div class=" py-3 form-row justify-content-center">
                                <a class="btn   btn-success " href="{{ route('admin.vendor.index') }}" role="button"> <i class="fa fa-arrow-left "></i> Отменить</a>  &nbsp;
                                        <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
                                    </div>

                            </form>
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <livewire:seo :record="@$vendor">
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-logo" role="tabpanel" aria-labelledby="custom-tabs-four-logo-tab">
                            <livewire:logo-vendor-gallery :record="$vendor" />
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-catalogs" role="tabpanel" aria-labelledby="custom-tabs-four-catalogs-tab">
                            <livewire:vendor-pdf-catalog-component :parent_vendor="$vendor" />
                            <livewire:vendor-pdf-catalog-table :parent_vendor="$vendor" />
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
@livewireScriptConfig 
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
