@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Аналоги производителя')
@section('content_header')
<h1>Аналоги производителя: {{ $parent_analog_vendor->name }}</h1>
@stop

{{-- Content body: main page content --}}
@section('content')

<div class="row">
    <div class="col-12 ">
        <div class="card card-primary card-outline card-outline-tabs">
            <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Таблица аналогов {{ $parent_analog_vendor->name }}</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">

                <div class="tab-content" id="custom-tabs-four-tabContent">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        {{-- <div class="tab-content" id="custom-tabs-four-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab"> --}}
                        
                        <livewire:analog-table :parent_analog_vendor="$parent_analog_vendor->id" />
                        {{-- </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="row">
    <div class="col-12 ">
        <div class=" py-3 form-row justify-content-center">
            <a class="btn .btn-lg btn-success " href="{{ route('admin.analog-vendor.index' ) }}" role="button"> <i class="fa fa-arrow-left "></i> К списку производителей аналогов</a>
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