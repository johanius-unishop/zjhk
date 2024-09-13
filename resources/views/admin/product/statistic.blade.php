@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары')
@section('content_header')
<h1>Товары</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['total'] }}</h3>
                <p>Всего:</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            {{-- <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i> --}}
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['with_filter'] }}</h3>
                <p>Без фильтра:</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            {{-- <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i> --}}
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['without_seo'] }}</h3>
                <p>Без seo</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            {{-- <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i> --}}
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $data['without_media'] }}</h3>
                <p>Без картинок</p>

            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.product_without_media') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $data['without_description'] }}</h3>
                <p>Без описания</p>

            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.product_without_description') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
</div>

<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i
            class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')

@endpush
