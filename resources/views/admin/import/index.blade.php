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
        <div class="container">
            <div class="row">
                <!-- Первый блок -->
                <div class="col-sm-6 col-12 px-2">
                    <div class="small-box bg-primary px-3">
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
                                <i class="fas fa-rubble-sign"></i>
                            </div>

                            <button type="submit" class="small-box-footer">
                                Экспортировать <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
                
                <!-- Второй блок -->
                <div class="col-sm-6 col-12 px-2">
                    <div class="small-box bg-success px-3">
                        <!-- small card -->
                        <form action="{{ route('admin.import.import_products_properties_values_from_xls') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="inner">
                                <label for="xls_file1" class="form-label mb-1 mt-3">Файл Excel</label>
                                <input type="file" name="xls_file1" accept=".xlsx,.xls" class="form-control mb-2">
                            </div>

                            <div class="icon">
                                <i class="fas fa-rubble-sign"></i>
                            </div>

                            <button type="submit" class="small-box-footer">
                                Импортировать <i class="fas fa-arrow-circle-right"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
@parent
@endsection