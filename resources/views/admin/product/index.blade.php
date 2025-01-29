@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Товары')
@section('content_header')
<h1>Товары</h1>
@stop

{{-- Content body: main page content --}}

@section('content')
<div class="custom-form">
    <form action="{{ route('admin.import.import_price_from_xls') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2>Загрузка прайс-листа:</h2>
        <input type="file" name="xls_file" accept=".xlsx,.xls" class="form-control">
        <button type="submit" class="btn btn-primary mt-3">Загрузить прайс-лист</button>
    </form>
</div>
   

<livewire:product-table />
@stop

{{-- Push extra CSS --}}

@push('css')
{{-- Add here extra stylesheets --}}
<style>
        .custom-form {
            
            max-width: 100%;
            text-align: left;
            margin: auto;
            padding-top: 10px;
        }
        
        h2 {
            text-align: left;
            margin-bottom: 20px;
        }
        
        input[type="file"] {
            display: block;
            width: 50%;
            margin-top: 5px;
            margin-bottom: 5px;
        }
        
        button {
            width: 50%;
            margin-top: 5px;
            margin-bottom: 5px;
        }
    </style>

@endpush

{{-- Push extra scripts --}}

@push('js')
@livewireScripts
<script src="{{ asset('js/powergrid.js') }}"></script>
@endpush
