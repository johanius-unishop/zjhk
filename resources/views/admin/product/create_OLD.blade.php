@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Создание товара')
@section('content_header')
<h1>Создание товара</h1>
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
                {{-- <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill"
                        href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages"
                        aria-selected="false">Изображения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                        href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings"
                        aria-selected="false">Варианты продуктов </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-five-settings-tab" data-toggle="pill"
                        href="#custom-tabs-five-settings" role="tab" aria-controls="custom-tabs-five-settings"
                        aria-selected="false">Видео </a>
                </li> --}}
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                    aria-labelledby="custom-tabs-four-home-tab">
                    <form action="{{ route('admin.product.store')  }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Название</label>
                            <input type="text" class="form-control" name="name" value="{{  old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-6  bg-success color-palette">
                                <div class="form-group">
                                    <label for="name">Модель</label>
                                    <input type="text" class="form-control" name="model" value="">
                                    @error('model')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-6 bg-success color-palette">
                                <div class="form-group">
                                    <label for="name">Код товара </label>
                                    <input type="text" class="form-control" name="old_code" value="">
                                    @error('old_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <label for="price">Цена</label>
                                <input type="number" class="form-control" name="price" value="{{  old('price') }}">
                                @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="price_discount">Цена скидка</label>
                                <input type="number" class="form-control" name="price_discount"
                                    value="{{  old('price_discount') }}">
                                @error('price_discount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="in_stock">Наличие</label>

                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="in_stock" id="in_stock"
                                        data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да"
                                        data-off="Нет">
                                    <label class="form-check-label" for="exampleCheck1">В наличии </label>
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
                                            <option value="{{$car}}" {{ @$item->product_subtype_id == $car ? 'selected' :
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
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="filter_id">Фильтр продукта</label>
                                    @error('filter_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="vendor_id">Укажите производителя</label>
                                    <select class="form-control select2 vendors" name="vendor_id" style="width: 100%;">
                                    </select>
                                    @error('vendor_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    <label for="product_style_id">Стиль</label>
                                    <select class="form-control" name="product_style_id">
                                        <option value="">Выберите стиль</option>
                                        </option>
                                        @foreach ($product_styles as $product_style)
                                        <option value="{{ $product_style->id }}">{{
                                            $product_style->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('product_style_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="form-group">
                                    {{-- <label for="product_class_id">Товары по предметам</label>
                                    <select class="form-control" name="product_class_id">
                                        <option value="">Выберите по предметам</option>
                                        @foreach ($product_classes as $product_class)
                                        <option value="{{ $product_class->id }}">{{ $product_class->name }}</option>
                                        @endforeach

                                    </select> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="body_description">Описание</label>
                            <textarea class="form-control" name="body_description" row="5"
                                id="summernote">{{   old ('body_description' ) }}</textarea>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="published" id="published"
                                data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да"
                                data-off="Нет">
                            <label class="form-check-label" for="exampleCheck1">Опубликовано </label>
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
                    <livewire:seo :record="@$product">

                </div>
                {{-- <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel"
                    aria-labelledby="custom-tabs-four-messages-tab">

                    <livewire:gallery :record="$product" />

                </div>
                <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                    aria-labelledby="custom-tabs-four-settings-tab">
                    <livewire:product-variant-component :record="@$product" />

                </div> --}}
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
        $(".vendors").select2({
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
            // sorter: function(data) {
            //     return data.sort(function(a, b) {
            //         return a.position < b.position ? -1 : a.position > b.position ? 1 : 0;
            //     });
            // },
            placeholder: 'Поиск производителя',
            minimumInputLength: 1,
        });
    });
</script>
@endpush
