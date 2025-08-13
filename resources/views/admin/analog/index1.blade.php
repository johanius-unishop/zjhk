@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Аналоги')
@section('content_header')
<h1>Аналоги производителя "{{ $analogVendor->name }}", ID: {{ $analogVendor->id }}</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class=" py-3  ">
    <a class="btn btn-primary" href="{{ route('admin.analog.createNew'), $parent_analog_vendor }}" role="button">Добавить</a>
</div>
<livewire:analog-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}

@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScriptConfig 
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush



<livewire:product-type-prorety-values-component :productTypeProperty="$productTypeProperty" />

<div class=" py-3 form-row justify-content-center">
    <a class="btn .btn-lg btn-success " href="{{ route('admin.product_type.show',  $productType->id ) }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a>
</div>
@stop


