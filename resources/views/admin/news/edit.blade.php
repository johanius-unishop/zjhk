@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Редактирование статьи')
@section('content_header')
    <h1>Редактирование статьи</h1>
@stop

{{-- Content body: main article content --}}
@section('content')
    <div class=" py-3  ">
        <a class="btn btn-primary" href="{{ $article->front_url }}" role="button" target="_blank"><i class="fas fa-globe"></i>
            Просмотреть на сайте</a>
    </div>

    @include('admin.blocks.error')

    <div class="row">
        <div class="col-12 ">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Основное</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.article.update', $article->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $article->id }}">

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="name">Название статьи</label>
                                    <input type="text" class="form-control" name="name" value="{{ $article->name }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="slug">ЧПУ </label>
                                        <input type="text" class="form-control" name="slug"
                                            value="{{ @$article->slug }}">
                                        <div id="slugHelp" class="form-text">Заполняется автоматически.
                                            Ручное заполнение не желательно.</div>
                                        @error('slug')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="text">Краткое описание статьи</label>
                                            <textarea class="form-control" name="text" rows="2">{{ @$article->short_description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-3 form-row justify-content-center">
                                    <a class="btn btn-success mx-1" href="{{ route('admin.article.index') }}"
                                        role="button">
                                        <i class="fa fa-arrow-left"></i> К списку
                                    </a>
                                    <button type="submit" name="action" value="save-exit" class="btn btn-primary mx-1">
                                        Сохранить и закрыть
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Изображение для статьи</h3>
                </div>
                <livewire:article-images-gallery :record="$article" />
            </div>
        </div>
    </div>
@stop

@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

@push('js')
    @include('admin.blocks.summernote')
@endpush
