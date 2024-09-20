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
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Основное</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">SEO</a>
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
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                    <form action="{{ route('admin.product.store')  }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="form-group">
                                    <label for="name">Название</label>
                                    <input type="text" class="form-control" name="name" value="{{  old('name') }}">
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
                                    <select name="category_id" id="category_id" class="form-control">
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
                                    @foreach ($product_types as $product_type)
                                    <option value="{{ $product_type->id }}" {{ $product_type->id ==
                                    @$product->product_type_id ? 'selected' : '' }}>{{
                                    $product_type->name }}
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
                                        <option value="{{ $product_type->id }}" {{ $product_type->id ==
                                    @$product->currency_id ? 'selected' : '' }}>{{
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
                                    <option value="{{ $vendor->id }}" {{ $vendor->id ==
                                    @$product->vendor_id ? 'selected' : '' }}>{{
                                    $vendor->name }}
                                    </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 col-6  ">
                                <div class="form-group">
                                    <label for="article">Артикул</label>
                                    <input type="text" class="form-control" name="article" value="{{  old('article') }}">
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
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group"> <label for="short_description">Краткое описание</label>
                                    <textarea class="form-control" name="short_description" row="3">{{ old ('short_description' ) }}</textarea>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="body_description">Описание</label>
                                    <textarea class="form-control" name="body_description" row="5" id="summernote">{{ old ('body_description' ) }}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет">
                                    <label class="form-check-label" for="exampleCheck1">Опубликовано </label>
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
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
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
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
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
    $(function() {
        // Summernote
        $('#summernote').summernote({
            height: 300
            , lang: 'ru-RU'
            , minHeight: 500
            , maxHeight: 800
            , placeholder: 'Введите текст'
        })

    })

</script>
<script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".vendors").select2({
            ajax: {
                url: "/api/v1/admin/fabric"
                , dataType: 'json'
                , delay: 250
                , data: function(params) {
                    return {
                        q: params.term, // search term
                        page: params.page
                    };
                }
                , processResults: function(data, params) {
                    params.page = params.page || 1;
                    return {
                        results: $.map(data, function(item) {
                            return {
                                text: item.name
                                , id: item.id,
                                // position: item.position,
                            }
                        })
                        , pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    };
                }
                , cache: false
            },
            // sorter: function(data) {
            //     return data.sort(function(a, b) {
            //         return a.position < b.position ? -1 : a.position > b.position ? 1 : 0;
            //     });
            // },
            placeholder: 'Поиск производителя'
            , minimumInputLength: 1
        , });
    });

</script>
@endpush
