@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<h1>Панель управления</h1>
@stop

@section('content')
<p>Проверка связи.</p>

Версия Laravel {{app()->version()}}



<div class="row">
    <div class="col-md-6 col-sm-6 col-12">
        <div class="info-box bg-gradient-info">
            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Sitemap</span>
                @if ($sitemap_exists)
                <span class="info-box-number">Ссылок: {{ $sitemap_urls }}</span>
                <span class="info-box-number">Создан: {{ date("Y-m-d H:i:s", $sitemap_stats['mtime']) }} </span>
                <span class="info-box-number">Размер файла: {{ $sitemap_stats['size'] }} </span>
                @else
                <span class="info-box-number">Файл не существует</span>
                @endif
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-sync"></i> {{ $sitemap_button }}
                    </button>
                </span>
            </div>
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-6 col-sm-6 col-12">
        <div class="info-box bg-gradient-warning">
            <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Статистика проблем на сайте:</span>
                @if ($no_product_type_count > 0)
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-type') }}">Товары без типа товаров: {{ $no_product_type_count }}</a>
                </span>
                @endif
                {{-- @if ($no_vendor_count> 0) --}}

                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-property-values') }}">Товары без значений характеристик: {{ $product_without_property_values_count }}</a>
                </span>

                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-with-photo-problem') }}">Проблемы с изображением у товаров: {{ $product_with_photo_problem_count }}</a>
                </span>

                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-model') }}">Товары без 3D-модели: {{ $product_without_3d_count }}</a>
                </span>
                
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-vendor') }}">Товары без бренда: {{ $no_vendor_count }}</a>
                </span>
                
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-category') }}">Товары без категории: {{ $no_category_count }}</a>
                </span>
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-currency') }}">Товары без валюты: {{ $no_currency_count }}</a>
                </span>
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-supplier-price') }}">Товары без цены от поставщика: {{ $no_supplier_price_count }}</a>
                </span>
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-without-tnved') }}">Не указан ТН ВЭД: {{ $no_tn_ved_count }}</a>
                </span>
                <span class="info-box-number">
                    <a href="{{ route('admin.product-type.index') }}">Количество типов товаров без характеристик: {{ $product_types_without_properties }}</a>
                </span>
                <span class="info-box-number">
                    <a href="{{ route('admin.problem.product-type-properties-without-values') }}">Количество характеристик без доступных значений: {{ $product_type_properties_without_values }}</a>
                </span>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%"></div>
                </div>
                <span class="progress-description">

                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-sync"></i> {{ $sitemap_button }}
                    </button>
                </span>
            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Важно</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Вы действительно хотите запустить регенерацию sitemap.xml?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <a class="btn btn-danger" href="{{ route('admin.regenerate_sitemap') }}" role="button"> Регенерация
                    sitemap</a>
            </div>
        </div>
    </div>
</div>



@stop

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
<script>
    console.log("Hi, I'm using the Laravel-AdminLTE package!");

</script>
@stop
