@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Редактирование товара  '.$product->name  )
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
                            <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Изображения</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Характеристики</a>
                        </li>        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-four-analog-tab" data-toggle="pill" href="#custom-tabs-four-analog" role="tab" aria-controls="custom-tabs-four-analog" aria-selected="false">Аналоги</a>
                        </li>
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
                                    <label for="parent" class="form-label">Тип товара</label>
                                    <select class="form-control  " id="product_kind_id" name="product_kind_id">
                                        <option value="0">Выберите тип товара</option>
                                        @foreach ($product_types as $product_type)
                                        <option value="{{ $product_type->id }}" {{ $product_type->id ==
                                    @$product->product_kind_id	 ? 'selected' : '' }}>{{
                                    $product_type->name }}
                                        </option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 "> <label for=" " class="form-label">Тип товара</label>
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
                                        <textarea class="form-control" name="body_description" row="5" id="summernote">{{  $product->body_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет">
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
                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                            {{-- <livewire:product-variant-component :record="@$product" /> --}}
                            <livewire:test-component :record="@$product" />

                        </div>

                        <div class="tab-pane fade" id="custom-tabs-four-analog" role="tabpanel" aria-labelledby="custom-tabs-four-analog-tab">
                            {{-- <livewire:product-variant-component :record="@$product" /> --}}
                            <livewire:analog-vendor-component :record="@$product" />

                        </div>
                    </div>
                </div>
                <div class=" py-3 form-row justify-content-center">
                    <a class="btn .btn-lg btn-success " href="{{ route('admin.product.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>&nbsp;

                    <button type="submit" name="action" value="save" class="btn btn-primary">Сохранить</button>
                    &nbsp;
                    <button type="submit" name="action" value="save-exit" class="btn btn-primary">Сохранить и
                        закрыть</button>
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
