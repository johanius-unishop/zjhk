@extends('admin')
@section('title', 'Товары')
@section('content_header')
<h1>Редактирование товара {{ $product->name }}</h1>
<a class="btn btn-primary" href="{{ $product->front_url }}" role="button" target="_blank"><i class="fas fa-globe"></i>
    Просмотреть на сайте</a>

@stop

@section('content')
@include('admin.blocks.error')

<div class="col-12 ">
    <div class="card card-primary card-outline card-outline-tabs">
        <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                        href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home"
                        aria-selected="true">Основное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                        href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile"
                        aria-selected="false">SEO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                        href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages"
                        aria-selected="false">Изображения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                        href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings"
                        aria-selected="false">Варианты продуктов </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-five-settings-tab" data-toggle="pill"
                        href="#custom-tabs-five-settings" role="tab" aria-controls="custom-tabs-five-settings"
                        aria-selected="false">Архивная информация </a>
                </li>
                @if (config('app.programming_level') >= 2)
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-six-settings-tab" data-toggle="pill"
                        href="#custom-tabs-six-settings" role="tab" aria-controls="custom-tabs-six-settings"
                        aria-selected="false">Файлы для загрузки </a>
                </li>
                @endif
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                    aria-labelledby="custom-tabs-four-home-tab">
                    <form action="{{ route('admin.product.update', $product->id) }}" method="POST">

                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-6  bg-success color-palette">
                                <div class="form-group">
                                    <label for="name">Модель</label>
                                    <input type="text" class="form-control" name="model" value="{{ $product->model }}">
                                    @error('model')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 bg-success color-palette">
                                <div class="form-group">
                                    <label for="name">Код товара </label>
                                    <input type="text" class="form-control" name="old_code" id="old_code"
                                        value="{{ $product->old_code }}">
                                    @error('old_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <label for="price">Цена</label>
                                <input type="number" class="form-control" name="price" id="price"
                                    value="{{ $product->price }}">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="price_discount">Цена скидка</label>
                                <input type="number" class="form-control" name="price_discount" id="price_discount"
                                    value="{{ $product->price_discount }}">
                                @error('price_discount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="in_stock">Наличие</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="in_stock" id="in_stock"
                                        data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да"
                                        data-off="Нет" {!! @$product->in_stock ? '
                                    checked ' : ' ' !!} >
                                    <label class="form-check-label" for="exampleCheck1">В наличии </label>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="price_segment_id">Ценовой сегмент</label>
                                    </br>{{ @$product->vendor->price_segment->name }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-6">

                                <div class="form-group">
                                    <label for="product_subtype_id">Вид продукта</label>
                                    <select class="form-control  " id="product_subtype_id" name="product_subtype_id">
                                        <option value="0">Выберите вид ..</option>
                                        @foreach($subtypes as $group => $cars)
                                        <optgroup label="{{$group}}">
                                            @foreach($cars as $car => $tt)
                                            <option value="{{$car}}" {{ @$item->product_subtype_id == $car ? 'selected'
                                                :
                                                '' }} >{{$tt }}</option>
                                            @endforeach
                                        </optgroup>
                                        @endforeach
                                    </select>

                                    @error('product_subtype_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-6">

                                <div class="form-group">
                                    <label for="product_type_id">Тип товара</label>
                                    <select class="form-control select2  " name="product_type_id" id="product_type_id"
                                        style="width: 100%;">
                                    </select>

                                </div>
                            </div> --}}
                            {{-- <div class="col-lg-3 col-6">

                                <div class="form-group">
                                    <label for="product_subtype_id">Подтип товара</label>
                                    <select class="form-control select2  " name="product_subtype_id"
                                        id="product_subtype_id" style="width: 100%;">
                                    </select>

                                </div>
                            </div> --}}
                            <div class="col-lg-3 col-6">

                                <div class="form-group">
                                    <label for="filter_id">Фильтр продукта</label>
                                    <select class="form-control " name="filter_id">
                                        @foreach ($product_filters as $filter)
                                        <option value="{{ $filter->id }}" {{ $filter->id ==
                                            $product->filter_id ? 'selected' : '' }}>{{
                                            $filter->name }}
                                        </option>

                                        @endforeach
                                    </select>
                                    @error('filter_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">

                                <div class="form-group">
                                    <label for="vendor_id">Производитель</label>
                                    <select class="form-control select2 vendors" name="vendor_id" id="vendor_id"
                                        style="width: 100%;">
                                    </select>
                                    <span>Доставка: {{ @$product->vendor->making_time }}</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="product_style_id">Стиль</label>
                                    <select class="form-control" name="product_style_id">
                                        <option value="">Выберите стиль</option>
                                        </option>
                                        @foreach ($product_styles as $product_style)
                                        <option value="{{ $product_style->id }}" {{ $product_style->id ==
                                            $product->product_style_id ? 'selected' : '' }}>{{
                                            $product_style->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="product_location_id">Расположение</label>
                                    <select class="form-control" name="product_location_id">
                                        <option value="">Выберите расположение</option>
                                        </option>
                                        @foreach ($product_locations as $product_location)
                                        <option value="{{ $product_location->id }}" {{ $product_location->id ==
                                            $product->product_location_id ? 'selected' : '' }}>{{
                                            $product_location->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                        </div>
                        <div class="form-group">
                            <label for="body_description">Описание</label>
                            <textarea class="form-control" name="body_description" row="5"
                                id="summernote">{{ $product->body_description }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="active" id="active"
                                        data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да"
                                        data-off="Нет" {!! @$product->active ? '
                                    checked ' : ' ' !!} >
                                    <label class="form-check-label" for="exampleCheck1">Активная </label>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="is_moderated"
                                        id="is_moderated" data-toggle="toggle" data-onstyle="success"
                                        data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->is_moderated ?
                                    '
                                    checked ' : ' ' !!} >
                                    <label class="form-check-label" for="exampleCheck1">Модерировано </label>
                                </div>
                            </div>
                        </div>
                        <div class=" py-3 form-row justify-content-center">
                            <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
                            &nbsp;
                            <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и
                                закрыть</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                    aria-labelledby="custom-tabs-four-profile-tab">
                    <livewire:seo :record="$product">

                </div>
                <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-four-messages-tab">
                    <livewire:gallery :record="$product" :multiple=true />

                </div>
                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-four-settings-tab">
                    <livewire:product-variant-component :record="$product" />
                </div>

                <div class="tab-pane fade" id="custom-tabs-five-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-five-settings-tab">
                    Архивная информация

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Значение</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Код продукта</td>
                                <td>{{ $product->old_code }}</td>
                            </tr>
                            <tr>
                                <td>Ссылка на продукт в магазине</td>
                                <td><a href="{{ $product->front_url  }}" target="_blank">{{ $product->front_url }}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Строка данных all.db </td>
                                <td> {{ $product->old_data }}</td>
                            </tr>
                            <tr>
                                <td>Строка данных map.db </td>
                                <td> {{ $product->old_map }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if (config('app.programming_level') >= 2)
                <div class="tab-pane fade" id="custom-tabs-six-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-six-settings-tab">

                    <livewire:product-files-component :record="$product" />
                </div>
                @endif
            </div>
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
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/summernote/summernote.min.css') }}">
@endpush

{{-- Push extra scripts --}}

@push('js')
<script src="{{ asset('vendor/summernote/summernote.min.js') }}"></script>
<script>
    $(function () {
      // Summernote
      $('#summernote').summernote({
        height:300,
        lang:'ru-RU',
        minHeight:500,
        maxHeight:800,
        placeholder: 'Введите текст'
      })

    })
</script>


<script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#vendor_id").select2({
            ajax: {
                url: "/api/v1/admin/fabric",
                dataType: 'json',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                },
                initSelection: function(element, callback) {
                    var data = [];
                },
                processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name,
                                id: item.id,
                                // position: item.position,
                            }
                        }),
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                },
                cache: false
            },
            placeholder: 'Поиск производителя',
            minimumInputLength: 1,
        });
    });

    // $(document).ready(function() {
    //     $("#product_type_id").select2({
    //         ajax: {
    //             url: "/api/v1/admin/product_type",
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(params) {
    //                 return {
    //                     q: params.term, // search term
    //                     page: params.page
    //                 };
    //             },
    //             initSelection: function(element, callback) {
    //                 var data = [];
    //             },
    //             processResults: function(data, params) {
    //                 params.page = params.page || 1;
    //                 return {
    //                     results: $.map(data, function(item) {
    //                         return {
    //                             text: item.name,
    //                             id: item.id,
    //                             // position: item.position,
    //                         }
    //                     }),
    //                     pagination: {
    //                         more: (params.page * 30) < data.total_count
    //                     }
    //                 };
    //             },
    //             cache: false
    //         },
    //         placeholder: 'Поиск производителя',
    //         minimumInputLength: 1,
    //     });
    // });
    // $(document).ready(function() {
    //     $("#product_subtype_id").select2({
    //         ajax: {
    //             url: "/api/v1/admin/product_subtype",
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(params) {
    //                 return {
    //                     q: params.term, // search term
    //                     page: params.page
    //                 };
    //             },
    //             initSelection: function(element, callback) {
    //                 var data = [];
    //             },
    //             processResults: function(data, params) {
    //                 params.page = params.page || 1;
    //                 return {
    //                     results: $.map(data, function(item) {
    //                         return {
    //                             text: item.name,
    //                             id: item.id,
    //                             // position: item.position,
    //                         }
    //                     }),
    //                     pagination: {
    //                         more: (params.page * 30) < data.total_count
    //                     }
    //                 };
    //             },
    //             cache: false
    //         },
    //         placeholder: 'Поиск подтипа',
    //         minimumInputLength: 1,
    //     });
    // });


var productTypeSelect = $('#product_type_id');
$.ajax({
    type: 'GET',
    url: "/api/v1/admin/product_type/by_id?product_type_id={{ $product->product_type_id }}",

}).then(function (data) {
    // create the option and append to Select2
    var option = new Option(data.name, data.id, true, true);
    productTypeSelect.append(option).trigger('change');

    // manually trigger the `select2:select` event
    productTypeSelect.trigger({
        type: 'select2:select',
        params: {
            data: data
        }
    });
});



var productSubtypeSelect = $('#product_subtype_id');
$.ajax({
    type: 'GET',
    url: "/api/v1/admin/product_subtype/by_id?product_subtype_id={{ $product->product_subtype_id }}&product_type_id={{ $product->product_type_id }}",

}).then(function (data) {
    // create the option and append to Select2
    var option = new Option(data.name, data.id, true, true);
    productSubtypeSelect.append(option).trigger('change');

    // manually trigger the `select2:select` event
    productSubtypeSelect.trigger({
        type: 'select2:select',
        params: {
            data: data
        }
    });
});



// Fetch the preselected item, and add to the control
var vendorSelect = $('#vendor_id');
$.ajax({
    type: 'GET',
    url: "/api/v1/admin/fabric/by_id?vendor_id={{ $product->vendor_id }}",

}).then(function (data) {
    // create the option and append to Select2
    var option = new Option(data.name, data.id, true, true);
    vendorSelect.append(option).trigger('change');

    // manually trigger the `select2:select` event
    vendorSelect.trigger({
        type: 'select2:select',
        params: {
            data: data
        }
    });
});

</script>
@endpush
