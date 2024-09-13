@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Контент')
@section('content_header')
    <h1>Контент</h1>
@stop
@section('content')


<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $news_count }}</h3>

                <p>Новости</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.news.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $blog_count }}</h3>
                <p>Статьи</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.blog.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3> {{ $page_count }}</h3>
                <p>Статические страницы</p>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.page.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3> {{ $df }} <sup style="font-size: 20px">свободно</sup></h3>

                <p>Файловый менеджер</p>
            </div>
            <div class="icon">
                <i class="fas fa-chart-pie"></i>
            </div>
            <a href="{{ route('elfinder.index') }}" class="small-box-footer">
                Смотреть <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->


@endsection

@section('scripts')
@parent
@endsection
