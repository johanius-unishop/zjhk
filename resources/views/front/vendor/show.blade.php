@extends('layouts.app')

@section('title')
    @if ($vendor->short_name == 'ZJHK')
        Производитель {{ $vendor->name }}
    @else
        {{ $vendor->name }}
    @endif
@endsection
@section('content')

<h1> Производитель</h1>










@stop
