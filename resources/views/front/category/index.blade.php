@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('catalog') }}
Список Категория товаров ()



<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($childrens as $children)
            @include('front.block.show_category' , ['children' => $children])
            @endforeach
        </div>
    </div>
</div>
@stop
