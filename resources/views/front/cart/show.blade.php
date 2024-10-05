@extends('layouts.front')


@section('content')
{{ Breadcrumbs::render('cart') }}
Корзина

<livewire:cart-component />

@stop
