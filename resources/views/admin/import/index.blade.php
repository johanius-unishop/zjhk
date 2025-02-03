@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Экспорт и импорт данных')
@section('content_header')
<h1>Экспорт и импорт данных</h1>
@stop
@section('content')


<div class="card">
    <div class="card-header">
        <h3 class="card-title">Импорт/экспорт технических характеристик для товаров</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-6 col-12 small-box bg-primary">
                <!-- small card -->
                <form action="{{ route('admin.import.export_products_properties_values_to_xls') }}" method="POST">
                    @csrf

                    <div class="inner">
                        <label for="productType" class="form-label mb-1 mt-3">Тип товара</label>
                        <select class="form-control mb-2" id="productType" name="productType">
                            <option value="0">-- Выберите тип товара --</option>
                            @foreach ($productTypes as $productType)
                            <option value="{{ $productType->id }}">{{$productType->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="icon">
                        <i class="fas fa-ruble-sign"></i>
                    </div>

                    <button type="submit" class="small-box-footer">
                        Экспортировать <i class="fas fa-arrow-circle-right"></i>
                    </button>
                </form>
            </div>
            <div class="col-lg-6 col-12">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>Импорт из Excel</h3>
                        <h4>Загрузка характеристик товаров</h4>
                    </div>
                    <div class="icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <a href="{{ route('admin.vendor.index') }}" class="small-box-footer">
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