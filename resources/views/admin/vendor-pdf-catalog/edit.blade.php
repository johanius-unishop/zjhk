@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Редактирование каталога производителя')
@section('content_header')
<h1>Редактирование каталога производителя {{ $vendor_pdf_catalog->vendor->short_name }}</h1>
@endsection

{{-- Content body: main page content --}}

@section('content')

@include('admin.blocks.error')

<form action="{{ route('admin.vendor-pdf-catalog.update', $vendor_pdf_catalog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{ $vendor_pdf_catalog->id }}">
    
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $vendor_pdf_catalog->name) }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" rows="5" id="summernote">{{ old('description', $vendor_pdf_catalog->description) }}</textarea>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            <a href="{{ route('admin.vendor.index') }}" class="btn btn-success mr-2"><i class="fa fa-arrow-left"></i> Отменить</a>
            <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
        </div>
    </div>
</form>

<div class="card card-success mt-3">
    <div class="card-header">
        <h3 class="card-title">Обложка и PDF-файл каталога</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <label>Обложка для каталога</label>
                <livewire:vendor-pdf-catalog-gallery :record="$vendor_pdf_catalog->id" />
            </div>
            <div class="col-lg-3 col-6">
                <label>PDF-файл</label>
                <livewire:vendor-pdf-catalog-file :record="$vendor_pdf_catalog->id" />
            </div>
        </div>
    </div>
</div>


@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

@push('js')
@include('admin.blocks.summernote')
@livewireScriptConfig 
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush