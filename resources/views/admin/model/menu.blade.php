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
                        <h4>Валюты</h4>
                        <h5>Настройка внутреннего курса</h5>
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
                        <h4>Производители</h4>
                        <h5>Информация о производителях</h5>
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
                        <h4>Тип товаров</h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5>Настройка типов и характеристик </h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.product-type.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h4>Каталог</h4>
                        <h5>Структура каталога (категории)</h5>
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
                        <h4>Доставка</h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5>Способы доставки товаров </h5>
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
                        <h4>Страны</h4>
                        <h5> Страны производства </h5>
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
                        <h4>TODO</h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5> Товары </h5>
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
                        <h4>PDF</h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5>Типы PDF-файлов для товаров </h5>
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
        <h3 class="card-title">Настройки сайта, основные параметры, дополнительные параметры</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>Настройки</h4>
                        <h5>Таблица Settings</h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <a href="{{ route('admin.setting.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h4>Доп. настройки</h4>
                        <h5>Таблица Additional Settings</h5>
                    </div>
                    <div class="icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>
                    <a href="{{ route('admin.additional-setting.index') }}" class="small-box-footer">
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
                        <h4>{{ $open_orders_count }}</h4>
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
                        <h4>{{ $open_orders_count }}</h4>
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
                        <h4>TODO </h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5>Маркетплейсы</h5>
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
                        <h4>TODO </h4>
                        {{-- <h4>{{ @$product_count }}</h4> --}}
                        <h5>Порталы и сервисы Яндекса</h5>
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
                        <h4>Аналоги</h4>
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
