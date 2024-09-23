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

<form action="{{ route('admin.product.store')  }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-12 ">
            <div class="card card-primary card-outline card-outline-tabs">
                <div class="card-header p-0 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Основное</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">SEO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Фото</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-files-tab" data-toggle="pill" href="#custom-tabs-four-files" role="tab" aria-controls="custom-tabs-four-files" aria-selected="false">Файлы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Характеристики</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-analog-tab" data-toggle="pill" href="#custom-tabs-four-analog" role="tab" aria-controls="custom-tabs-four-analog" aria-selected="false">Аналоги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-price-tab" data-toggle="pill" href="#custom-tabs-four-price" role="tab" aria-controls="custom-tabs-four-price" aria-selected="false">Торговля и цены</a>
                        </li> {{-- <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-five-settings-tab" data-toggle="pill"
                        href="#custom-tabs-five-settings" role="tab" aria-controls="custom-tabs-five-settings"
                        aria-selected="false">Видео </a>
                </li> --}}
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-four-tabContent">
                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="form-group">

                                        <label for="slug">ЧПУ </label>
                                        <input type="text" class="form-control" name="slug" value="{{ @$product->slug }}">
                                        @error('slug')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-6 ">
                                    <label for="parent" class="form-label">Категория товара</label>
                                    <div class="input-group">
                                        <select name="category_id" id="parent" class="form-control">
                                            <option value="">Корневая категория</option>
                                            @foreach ($parentCategories as $category)
                                            @include('admin.blocks.categories_parent_option_row', ['category' => $category, 'padding' =>
                                            ''])
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6 ">
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
                            <div class="row">
                                <div class="col-4 ">
                                    <div class="form-group">
                                        <label for="currency_id" class="form-label">Валюта</label>
                                        <select class="form-control  " id="currency_id" name="currency_id">
                                            <option value="0">Выберите валюту</option>
                                            @foreach ($currencies as $currency)
                                            <option value="{{ $currency->id }}" {{ $currency->id == @$product->currency_id ? 'selected' : '' }}>{{
                                        $currency->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 ">
                                    <label for="vendor_id" class="form-label">Производитель</label>
                                    <select class="form-control  " id="vendor_id" name="vendor_id">
                                        <option value="0">Выберите тип товара</option>
                                        @foreach ($vendors as $vendor)
                                        <option value="{{ $vendor->id }}" {{ $vendor->id ==@$product->vendor_id ? 'selected' : '' }}>{{
                                    $vendor->name }}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-3 col-6  ">
                                    <div class="form-group">
                                        <label for="article">Артикул</label>
                                        <input type="text" class="form-control" name="article" value="{{ $product->article }}">
                                        @error('article')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-3 col-6  ">
                                    <div class="form-group">
                                        <label for="name">Код товара </label>
                                        <input type="text" class="form-control" name="old_code" value="">
                                        @error('old_code')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="composite_product" id="composite_product" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->composite_product ? 'checked ' : ' ' !!}>
                                    <label class="form-check-label" for="exampleCheck1">Композитный товар </label>
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
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->published ? 'checked ' : ' ' !!}>
                                        <label class="form-check-label" for="exampleCheck1">Опубликовано </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                            <livewire:seo :record="@$product">

                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">

                            <livewire:gallery :record="$product" />

                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-files" role="tabpanel" aria-labelledby="custom-tabs-four-files-tab">
                            <livewire:product-file-upload-component :record="@$product" />
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            <livewire:test-component :record="@$product" />
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-analog" role="tabpanel" aria-labelledby="custom-tabs-four-analog-tab">
                            <livewire:analog-vendor-component :record="@$product" />
                        </div>
                        <div class="tab-pane fade" id="custom-tabs-four-price" role="tabpanel" aria-labelledby="custom-tabs-four-price-tab">
                            Марккетплейсы, цены и прочее

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="barcode">barcode </label>
                                        <input type="text" class="form-control" name="barcode" value="{{ @$product->barcode }}">
                                        @error('barcode')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="tn_ved">tn_ved </label>
                                        <input type="text" class="form-control" name="tn_ved" value="{{ @$product->tn_ved }}">
                                        @error('tn_ved')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-3">

                                    <div class="form-group">
                                        <label for="supplier_price">supplier_price</label>
                                        <input type="text" class="form-control" name="supplier_price" value="{{ @$product->supplier_price }}">
                                        @error('supplier_price')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="moq_supplier">moq_supplier</label>
                                        <input type="text" class="form-control" name="moq_supplier" value="{{ @$product->moq_supplier }}">
                                        @error('moq_supplier')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>





                                </div>

                                <div class="col-3">
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label for="package_weight">Вес упаковки (единица измерения???)</label>
                                        <input type="text" class="form-control" name="package_weight" value="{{ @$product->package_weight }}">
                                        @error('package_weight')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="package_width">Ширина упаковки(единица измерения)</label>
                                        <input type="text" class="form-control" name="package_width" value="{{ @$product->package_width }}">
                                        @error('package_width')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="package_height">Высота упаковки(единица измерения)</label>
                                        <input type="text" class="form-control" name="package_height" value="{{ @$product->package_height }}">
                                        @error('package_height')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="package_length">Длина упаковки(единица измерения)</label>
                                        <input type="text" class="form-control" name="package_length" value="{{ @$product->package_length }}">
                                        @error('package_length')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" py-3 form-row justify-content-center">
                <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>&nbsp;
                <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
                &nbsp;
                <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и закрыть</button>
            </div>
        </div>
    </div>

    </div>

</form>




@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

{{-- Push extra scripts --}}

@push('js')
@include('admin.blocks.summernote')


@endpush
