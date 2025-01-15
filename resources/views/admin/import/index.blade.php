@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Импорт данных')
@section('content_header')
<h1>Импорт</h1>
@stop
@section('content')
<livewire:admin-queue />

<form action="{{ route('admin.import.import_price_from_xls') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Загрузка прайс-листа:</h2>
    <input type="file" name="xls_file" accept=".xlsx,.xls">
    <button type="submit">Загрузить прайс-лист</button>
</form>

<form action="{{ route('admin.import.import_order_from_xls') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Загрузка заказа поставщику:</h2>
    <input type="file" name="xls_file" accept=".xlsx,.xls">
    <button type="submit">Загрузить заказ</button>
</form>



<a href="{{ route('admin.import.import_product_images') }}" class="btn btn-primary"
target="_blank">Импортировать productImages </a>
<a href="{{ route('admin.import.import_product_files') }}" class="btn btn-primary"
target="_blank">Импортировать productFiles </a>



@if(Session::has('filteredMissingModels'))
{{ dump(Session::get('filteredMissingModels')) }}
<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ошибка импорта</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Session::get('filteredMissingModels') }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function(){
        $('#errorModal').modal('show');
    });
</script>
@endpush
@endif
@endsection



@section('scripts')
@parent


@endsection
