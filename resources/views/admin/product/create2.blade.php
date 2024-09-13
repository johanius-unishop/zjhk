@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Создание товара')
@section('content_header')
<h1>Создание товара</h1>
@stop
@section('content')

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
        <div class="col-lg-3 col-6">

            <div class="form-group">
                <label for="vendor_id">Укажите производителя</label>
                <select class="form-control select2 vendors" name="vendor_id" style="width: 100%;">
                </select>
            </div>

        </div>
        <div class="col-lg-3 col-6">

            <div class="form-group">
                <label for="price_segment_id">Укажите ценовой сегмент</label>
                <select class="form-control" name="price_segment_id">
                    <option value="">Выберите из списка</option>
                    @foreach ($price_segments as $price_segment)
                    <option value="{{ $price_segment->id }}">{{ $price_segment->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="form-group">
                <label for="product_location_id">Укажите расположение</label>
                <select class="form-control" name="product_location_id">
                    <option value="">Выберите из списка</option>
                    @foreach ($product_locations as $product_location)
                    <option value="{{ $product_location->id }}">{{ $product_location->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="form-group">
                <label for="product_class_id">Укажите класс продукта</label>
                <select class="form-control" name="product_class_id">
                    <option value="">Выберите из списка</option>
                    @foreach ($product_classes as $product_class)
                    <option value="{{ $product_class->id }}">{{ $product_class->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="body_description">Описание</label>
        <textarea class="form-control" name="body_description" row="5"
            id="summernote"></textarea>
    </div>


    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="active" id="active"   data-toggle="toggle"  data-onstyle="success"
        data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$product->active ? '
        checked ' : ' ' !!} >
        <label class="form-check-label" for="exampleCheck1">Активная </label>
    </div>


    <livewire:seo>

    <div class=" py-3 form-row justify-content-center">
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </div>
</form>
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">

<link rel="stylesheet" href="{{ asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endpush

{{-- Push extra scripts --}}

@push('js')

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
