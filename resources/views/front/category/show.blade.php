@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('categories' , $data['breadcrumbs'] , $data['category']  ) }}
Категория товаров ()

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            @foreach ($data['products'] as $product)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $product->name }} </text>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title"><b> {{ $product->name }}</b> </h5>

                        <p class="card-text"> {{ ($product->short_description) }} </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Корзина </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Избранное</button>
                            </div>
                            {{-- <small class="text-body-secondary">9 mins</small> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop


@push('css')
@endpush

@push('js')
@endpush
