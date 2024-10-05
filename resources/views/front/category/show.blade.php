@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('categories' , $data['breadcrumbs'] , $data['category']  ) }}
Категория товаров ()

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($data['childrens'] as $children)
            <div class="col">
                <div class="card shadow-sm text-bg-secondary">
                    <a href=" {{ $children->front_url }} ">
                        <img class="card-img-top" src="{{ $children->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $children->name }} image 1">
                    </a>
                    <div class="card-body">
                        <a href=" {{ $children->front_url }} ">
                            <h2 class="card-title"><b> {{ $children->name }}</b> </h2>
                        </a>
                    </div>
                </div>
            </div>
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
