@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Тип товара')
@section('content_header')
<h1>Тип товара: {{ $parent_type->name }}</h1>
@stop

{{-- Content body: main page content --}}
@section('content')

<div class="row">
    <div class="col-12 ">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Характеристики </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Связаные типы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="custom-tabs-four-composite-tab" data-toggle="pill" href="#custom-tabs-four-composite" role="tab" aria-controls="custom-tabs-four-composite" aria-selected="false">Композиты </a>
                    </li>
                </ul>
            </div>
            <div class="card-body">

                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        {{-- <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab"> --}}
                        <div class=" py-3 form-row  ">
                            <a class="btn btn-primary" href="{{ route('admin.product_type_property.createNew', $parent_type) }}" role="button">Добавить характеристику</a>
                        </div>
                        <livewire:product-type-property-table :parent_type="$parent_type->id" />
                        {{-- </div>
                        </div> --}}
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                        <div class=" py-3 form-row  ">
                            <a class="btn btn-primary" href="{{ route('admin.product_type_property.createNew', $parent_type) }}" role="button">Добавить тип </a>
                        </div>
                        <livewire:related-product-type-component :parent_type="$parent_type->id" />

                    </div>



                    <div class="tab-pane fade" id="custom-tabs-four-composite" role="tabpanel" aria-labelledby="custom-tabs-four-composite-tab">
                        {{-- <livewire:product-type-composite-table :parent_type="$parent_type->id" /> --}}


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="row">
    <div class="col-12 ">
        <div class=" py-3 form-row justify-content-center">
            <a class="btn .btn-lg btn-success " href="{{ route('admin.product_type.index' ) }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
        </div>
    </div>
</div>


@stop



{{-- Push extra CSS --}}
@push('css')
{{-- Add here extra stylesheets --}}
@endpush

{{-- Push extra scripts --}}
@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
