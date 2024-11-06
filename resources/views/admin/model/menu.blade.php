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
        <h3 class="card-title">Товары и связанные с ними характеристики</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>Валюты</h3>
                        {{-- <h3>{{ @$price_segment_count }}</h3> --}}
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
                        <h3>TODO </h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Клиенты. Любимые и не очень любимые </h4>
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
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Характеристики товаров</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>TODO</h3>
                        {{-- <h3>{{ @$product_count }}</h3> --}}
                        <h4>Типы товаров </h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <a href="{{ route('admin.product_type.index') }}" class="small-box-footer">
                        Перейти <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>TODO</h3>
                {{-- <h3>{{ @$product_style_count }}</h3> --}}
                <h4>Курсы валют</h4>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            {{-- <a href="{{ route('admin.currency_rate.index') }}" class="small-box-footer">
            Перейти <i class="fas fa-arrow-circle-right"></i>
            </a> --}}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>TODO</h3>
                {{-- <h3>{{ @$vendor_count }}</h3> --}}
                <h4> Производители</h4>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.vendor.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>TODO</h3>
                {{-- <h3>{{ @$vendor_count }}</h3> --}}
                <h4> Производители АНАЛОГОВ </h4>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.analog-vendor.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
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
</div>


<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>TODO</h3>
                {{-- <h3>{{ @$product_count }}</h3> --}}
                <h4> Категории </h4>
            </div>
            <div class="icon">
                <i class="fas fa-newspaper"></i>
            </div>
            <a href="{{ route('admin.category.index') }}" class="small-box-footer">
                Перейти <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>

    </div>




</div>
@endsection

@section('scripts')
@parent
@endsection
