@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Справочники')
@section('content_header')
<h1>Справочники</h1>
@stop
@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Настройки информационной системы: бренды, валюты, типы товаров, категории и т.д.</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>Валюты</h3>
                        <h4>Настройка внутреннего курса</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <a href="{{ route('admin.currency.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Производители</h3>
                        <h4>Информация о производителях</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <a href="{{ route('admin.vendor.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>   
            <div class="col-lg-3 col-6">
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>Тип товаров</h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Настройка типов и характеристик </h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.product_type.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>   
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Каталог</h3>
                        <h4>Структура каталога (категории)</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.category.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>     

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Доставка</h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Способы доставки товаров </h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.delivery.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Страны</h3>
                        <h4> Страны производства </h4>
                    </div>
                    <div class="icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <a href="{{ route('admin.country.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>TODO</h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4> Товары </h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.product.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>PDF</h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Типы PDF-файлов для товаров </h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.product_pdf_type.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Настройки сайта, основные параметры</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3>Настройки</h3>
                        <h4>Таблица Settings</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <a href="{{ route('admin.setting.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Работа с поставщиками</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $open_orders_count }}</h3>
                        <p>Заказы поставщикам</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $open_orders_count }}</h3>
                        <p>Формирование заказа поставщику</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.order.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Маркетплейсы, порталы, Яндекс (поиск по товарам и директ)</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>TODO </h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Маркетплейсы</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    {{-- <a href="{{ route('admin.user.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a> --}}
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>TODO </h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Порталы и сервисы Яндекса</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    {{-- <a href="{{ route('admin.user.index') }}" class="small-box-footer">
                    Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Аналоги и производители аналогов</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Аналоги</h3>
                        <p>Производители аналогов и аналоги</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <a href="{{ route('admin.analog-vendor.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
@parent
@endsection
