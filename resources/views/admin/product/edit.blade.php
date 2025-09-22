@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Редактирование товара '.$product->name )
@section('content_header')
<h1>Редактирование товара {{ $product->name }}</h1>
<a class="btn btn-primary" href="{{ $product->front_url }}" role="button" target="_blank"><i class="fas fa-globe"></i>
    Просмотреть на сайте</a>@stop
@section('content')
@include('admin.blocks.error')


<div class="row">
    <div class="col-12 ">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Основное</a>
                    </li>
                    @if ($product->composite_product)
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-complect-tab" data-toggle="pill" href="#custom-tabs-four-complect" role="tab" aria-controls="custom-tabs-four-complect" aria-selected="false">Состав комплекта</a>
                    </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-related-products-tab" data-toggle="pill" href="#custom-tabs-four-related-products" role="tab" aria-controls="custom-tabs-four-related-products" aria-selected="false">Сопутствующие товары</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <form action="{{ route('admin.product.update', $product->slug) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="name">Код товара </label>
                                        <input type="text" class="form-control" name="id" id="id" value="{{ @$product->id }}" disabled>
                                        @error('id')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="barcode">Штрих-код</label>
                                        <input type="text" class="form-control" name="barcode" id="barcode" value="{{ @$product->barcode }}">
                                        @error('barcode')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="tn_ved">ТН ВЭД</label>
                                        <input type="text" class="form-control" name="tn_ved" id="tn_ved" value="{{ @$product->tn_ved }}">
                                        @error('tn_ved')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <label for="parent" class="form-label">Категория</label>
                                    <div class="input-group">
                                        <select name="category_id" id="parent" class="form-control">
                                        <option value="">--Выберите категорию--</option>
                                        @foreach ($parentCategories as $category)
                                        @include('admin.blocks.product_categories_parent_option_row', ['category' => $category, 'padding' =>
                                        ''])
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <label for="product_name">Наименование товара</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name" value="{{
                                            trim(
                                                // Определяем название типа товара
                                                ($product->productType ? $product->productType->name : '') . ' '
                                                // Определяем название бренда
                                                . (
                                                    $product->vendor && $product->vendor->short_name
                                                    ? $product->vendor->short_name
                                                    : ($product->vendor ? $product->vendor->name : '')
                                                ) . ' '
                                                // Определяем название товара
                                                . $product->name
                                                // Добавляем артикул в скобках, если он отличается от названия товара
                                                . ($product->name != $product->article ? ' (' . $product->article . ')' : '')
                                            )
                                        }}" disabled>
                                        @error('product_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-group">
                                            <label for="name">Модель</label>
                                            <input type="text" class="form-control" name="name" id="name" value="{{ $product->name }}" disabled>
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="article">Артикул</label>
                                        <input type="text" class="form-control" name="article" id="article" value="{{ $product->article }}">
                                        @error('article')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <label for="vendor_id" class="form-label">Производитель</label>
                                    <select class="form-control  " id="vendor_id" name="vendor_id">
                                        <option value="0">Выберите производителя</option>
                                        @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->id }}" {{ $vendor->id == @$product->vendor_id ? 'selected' : '' }}>{{$vendor->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <b>Цены</b>
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="supplier_price">Закупочная цена</label>
                                        <input type="text" class="form-control" name="supplier_price" value="{{ @$product->supplier_price }}" disabled>
                                        @error('supplier_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="currency_id" class="form-label">Валюта</label>
                                        <select class="form-control" id="currency_id" name="currency_id" disabled>
                                            <option value="0">Выберите валюту</option>
                                            @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ $currency->id == @$product->currency_id ? 'selected' : '' }}>{{
                                            $currency->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label for="exampleCheck1">Автоматический расчет цены </label>
                                            <input type="checkbox" class="form-check-input" name="auto_price" id="auto_price" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->auto_price ? 'checked ' : ' ' !!}>
                                        </div>
                                    </div>
                                    <label for="auto_price_coef">Коэффициент</label>
                                    <input type="text" class="form-control" name="auto_price_coef" value="{{ @$product->auto_price_coef }}">
                                    @error('auto_price_coef')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="price">РРЦ</label>
                                        <input type="text" class="form-control" name="price" value="{{ @$product->price }}">
                                        @error('price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="special_price">Специальная цена</label>
                                        <input type="text" class="form-control" name="special_price" value="{{ @$product->special_price }}">
                                        @error('special_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            Остатки и склад
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="stock">Наличие</label>
                                        <input type="text" class="form-control" name="stock" id="stock" value="{{ @$product->stock }}">
                                        @error('stock')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="pieces_per_pack">Количество в заводской упаковке</label>
                                        <input type="text" class="form-control" name="pieces_per_pack" id="pieces_per_pack" value="{{ @$product->pieces_per_pack }}">
                                        @error('pieces_per_pack')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="moq_supplier">Мин. количество для заказа</label>
                                        <input type="text" class="form-control" name="moq_supplier" value="{{ @$product->moq_supplier }}">
                                        @error('moq_supplier')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <div class="form-group">
                                        <label for="minimum_stock"> Минимальный остаток</label>
                                        <input type="text" class="form-control" name="minimum_stock" id="minimum_stock" value="{{ @$product->minimum_stock }}">
                                        @error('minimum_stock')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="ordered">Заказано</label>
                                        <input type="text" class="form-control" name="ordered" id="ordered" value="{{ @$ordered }}" disabled>
                                        @error('ordered')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="priority"> Приоритет</label>
                                        <input type="text" class="form-control" name="priority" id="priority" value="{{ @$product->priority }}">
                                        @error('priority')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            Статус товара
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->published ? 'checked ' : ' ' !!}>
                                        <label class="form-check-label" for="exampleCheck1">Опубликовано </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group"> <label for="short_description">Краткое описание</label>
                                        <textarea class="form-control" name="short_description" row="3">{{ $product->short_description  }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description">Описание</label>
                                        <textarea class="form-control" name="body_description" row="5" id="summernote">{{ $product->body_description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="composite_product" id="composite_product" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->composite_product ? 'checked ' : ' ' !!}>
                                        <label class="form-check-label" for="exampleCheck1">Композитный товар </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-4">
                                    <label for="country_id" class="form-label">Страна происхождения</label>
                                    <select class="form-control" id="country_id" name="country_id">
                                        <option value="0">--Выберите страну происхождения--</option>
                                        @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" {{ $country->id == @$product->country_id ? 'selected' : '' }}>{{$country->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-4 col-4">
                                    <label for="country_id" class="form-label">Родина бренда</label>
                                    <input type="text" class="form-control" id="vendor_country_id" name="vendor_country_id" value="{{ @$product->vendor->country->name }}">
                                </div>
                            </div>
                            Характеристики
                            <div class="row">
                                <div class=" col-12">
                                    <h3>Вес и габаритные размеры</h3>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="form-group">
                                        <label for="weight">Вес, грамм</label>
                                        <input type="text" class="form-control" name="weight" value="{{ @$product->weight }}">
                                        @error('weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="width">Ширина, мм</label>
                                        <input type="text" class="form-control" name="width" value="{{ @$product->width }}">
                                        @error('width')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="height">Высота, мм</label>
                                        <input type="text" class="form-control" name="height" value="{{ @$product->height }}">
                                        @error('height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="length">Длина мм</label>
                                        <input type="text" class="form-control" name="length" value="{{ @$product->length }}">
                                        @error('length')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-6">
                                    <div class="form-group">
                                        <label for="package_weight">Вес упакованного товара, грамм</label>
                                        <input type="text" class="form-control" name="package_weight" value="{{ @$product->package_weight }}">
                                        @error('package_weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="package_width">Ширина упакованного товара, мм</label>
                                        <input type="text" class="form-control" name="package_width" value="{{ @$product->package_width }}">
                                        @error('package_width')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="package_height">Высота упакованного товара, мм</label>
                                        <input type="text" class="form-control" name="package_height" value="{{ @$product->package_height }}">
                                        @error('package_height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="package_length">Длина упакованного товара, мм</label>
                                        <input type="text" class="form-control" name="package_length" value="{{ @$product->package_length }}">
                                        @error('package_length')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-12">
                                    <label for="product_type_id" class="form-label">Тип товара</label>
                                    <select class="form-control  " id="product_type_id" name="product_type_id">
                                        <option value="0">Выберите тип товара</option>
                                        @foreach ($productTypes as $productType)
                                        <option value="{{ $productType->id }}" {{ $productType->id == @$product->product_type_id	 ? 'selected' : '' }}>{{
                                        $productType->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" py-3 form-row justify-content-center">
                                <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>&nbsp;
                                <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
                                &nbsp;
                                <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и закрыть</button>
                            </div>
                        </form>
                        <div class="card card-success mt-3">
                            <div class="card-header">
                                <h3 class="card-title"><strong>Характеристики товара </strong></h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-12">
                                        <livewire:test-component :record="@$product" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Изображения товара</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-12">
                                        <b> Изображения товара</b>
                                        <br>
                                        Добавьте изображения в формате JPEG или PNG. Главное фото – на одноцветном контрастном фоне. Размер главного фото – не менее 800рх по большей стороне, размер дополнительных фото – не менее 400рх по большей стороне.
                                        Максимальный размер фото 6500px на 6500px.
                                        <br>
                                        <div>
                                            <livewire:product-images-gallery :record="@$product" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Файлы</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class=" col-12">
                                        <livewire:product-files-component :id="@$product->id" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="custom-tabs-four-complect" role="tabpanel" aria-labelledby="custom-tabs-four-complect-tab">
                        <livewire:product-composite-elements-component :product="$product" />
                    </div>
                    <div class="tab-pane fade show" id="custom-tabs-four-related-products" role="tabpanel" aria-labelledby="custom-tabs-four-related-products-tab">
                        <livewire:product-related-products-component :product="$product" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endpush

{{-- Push extra scripts --}}

@push('js')
@include('admin.blocks.summernote')
<script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.15.0/Sortable.min.js"></script>


@endpush
