@extends('admin')

{{-- Customize layout sections --}}

@section('title', 'Курс валюты')
@section('content_header')
<h1>Курс валюты</h1>
@stop

{{-- Content body: main page content --}}

@section('content')

 


<a class="btn   btn-success " href="{{ route('admin.currency.index') }}" role="button"> <i class="fa fa-arrow-left "></i> К списку</a> &nbsp;

@stop

@push('css')
@endpush

@push('js')
@endpush
