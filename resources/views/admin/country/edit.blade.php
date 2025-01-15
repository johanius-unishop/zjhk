@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Редактирование страны')
@section('content_header')
<h1>Редактирование страны</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

@include('admin.blocks.error')


<form action="{{ route('admin.country.update', $country->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{ $country->id }}">

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
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control" name="name" value="{{ @$country->name }}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <livewire:country-flag-gallery :record="$country" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-3 form-row justify-content-center">
                <a class="btn   btn-success " href="{{ route('admin.country.index') }}" role="button"> <i class="fa fa-arrow-left "></i> Отменить</a> &nbsp;
                <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
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
