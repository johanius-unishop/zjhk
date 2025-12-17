@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Создание новости')
@section('content_header')
    <h1>Создание новости</h1>
@stop

{{-- Content body: main page content --}}
@section('content')
    @include('admin.blocks.error')

    <form action="{{ route('admin.news.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 ">
                <div class="card card-primary card-outline card-outline-tabs">
                    <div class="card-header p-0 border-bottom-0">
                        <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                    href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                                    aria-selected="true">Основное</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                    href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                                    aria-selected="false">SEO</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                aria-labelledby="custom-tabs-four-home-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Название новости</label>
                                            <input type="text" class="form-control" name="name"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <label for="slug">ЧПУ </label>
                                            <input type="text" class="form-control" name="slug"
                                                value="{{ @$category->slug }}">
                                            <div id="slugHelp" class="form-text">Заполняется автоматически. Ручное
                                                заполнение не желательно.</div>
                                            @error('slug')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="short_description">Краткое описание</label>
                                        <textarea class="form-control" name="short_description" row="5" id="summernote">{{ old('short_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="published" id="published"
                                                data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                                data-on="Да" data-off="Нет" {!! @$new->published ? 'checked ' : ' ' !!}>
                                            <label class="form-check-label" for="published">Опубликовано</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="homepage_visible" id="homepage_visible"
                                                data-toggle="toggle" data-onstyle="success" data-offstyle="danger"
                                                data-on="Да" data-off="Нет" {!! @$new->homepage_visible ? 'checked ' : ' ' !!}>
                                            <label class="form-check-label" for="homepage_visible">Показывать на главной</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                aria-labelledby="custom-tabs-four-profile-tab">
                                <livewire:seo :record="@$new">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" py-3 form-row justify-content-center">
                    <a class="btn btn-success" href="{{ route('admin.new.index') }}" role="button"> <i
                            class="fa fa-arrow-left "></i> К списку</a> &nbsp;
                    <button type="submit" class="btn btn-primary">Сохранить</button> &nbsp;
                    <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и
                        закрыть</button>
                </div>
            </div>
        </div>
    </form>
@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

@push('js')
    @include('admin.blocks.summernote')
@endpush
