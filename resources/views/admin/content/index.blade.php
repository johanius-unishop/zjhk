@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Контент')
@section('content_header')
    <h1>Контент</h1>
@stop
@section('content')

    <!--  .row -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>{{ $article_count }}</h4>
                    <p>Статьи</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ route('admin.article.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>{{ $news_count }}</h4>
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
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> {{ $page_count }}</h4>
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
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4> {{ $faq_count }}</h4>
                    <p>Faq (ЧаВо)</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ route('admin.faq.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>Тип документации</h4>
                    <p>Каталог, обзорная информация и т.д.</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ route('admin.documentation-type.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h4>Документация</h4>
                    <p>Файлы документации</p>
                </div>
                <div class="icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <a href="{{ route('admin.documentation.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>

    </div>
    <!-- /.row -->
@endsection

@section('scripts')
    @parent


@endsection
