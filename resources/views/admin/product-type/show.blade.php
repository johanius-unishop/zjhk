@extends('admin')

@section('title', 'Тип товара')
@section('content_header')
<h1>Тип товара: {{ $parent_type->name }}</h1>
@stop

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-prperty-tab" data-toggle="pill" href="#custom-tabs-four-property" role="tab" aria-controls="custom-tabs-four-property" aria-selected="true">Характеристики</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-related-type-tab" data-toggle="pill" href="#custom-tabs-four-related-type" role="tab" aria-controls="custom-tabs-four-related-type" aria-selected="false">Совместимые типы товаров</a>
                    </li>
                    @if ($parent_type->composite)
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-composite-type-tab" data-toggle="pill" href="#custom-tabs-four-composite-type" role="tab" aria-controls="custom-tabs-four-composite-type" aria-selected="false">Типы товаров в комплектации</a>
                    </li>
                    @endif
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-property" role="tabpanel" aria-labelledby="custom-tabs-four-property-tab">
                        <div>
                        <livewire:product-type-property-component :parent_type="$parent_type->id"/>
                        </div>
                        <livewire:product-type-property-table :parent_type="$parent_type->id"/>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-related-type" role="tabpanel" aria-labelledby="custom-tabs-four-related-type-tab">
                        <div>
                        <livewire:related-product-type-component :parent_type="$parent_type->id" />    
                        </div>
                        <livewire:related-product-type-table :parent_type="$parent_type->id" />
                    </div>
                    @if ($parent_type->composite)
                    <div class="tab-pane fade" id="custom-tabs-four-composite-type" role="tabpanel" aria-labelledby="custom-tabs-four-composite-type-tab">
                        <div>
                        <livewire:product-type-composite-component :parent_type="$parent_type->id" />    
                        </div>
                        <livewire:product-type-composite-table :parent_type="$parent_type->id" />
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="py-3 form-row justify-content-center">
            <a class="btn btn-lg btn-success" href="{{ route('admin.product-type.index') }}" role="button"><i class="fa fa-arrow-left"></i> К типам товаров</a>
        </div>
    </div>
</div>

@stop

@push('css')
<!-- Добавьте сюда дополнительные стили -->
@livewireStyles
@endpush

@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush