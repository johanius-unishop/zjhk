@extends('layouts.app')

@section('content')
{{ Breadcrumbs::render('categories' , $data['breadcrumbs'] , $data['category']  ) }}
Категория товаров ()

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($data['childrens'] as $children)


            @include('front.block.show_category' , ['children' => $children])


            @endforeach
        </div>
    </div>
</div>
Товары

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            @foreach ($data['products'] as $product)


            @include('front.block.show_product' , ['product' => $product])

            @endforeach
            {{ $data['products']->links() }}
        </div>
    </div>
</div>




@stop


@push('css')
@endpush

@push('js')
@endpush
