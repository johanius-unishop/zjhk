@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('search_result'  ) }}


<h1 class="font-bold text-3xl"> Результат поиска "{{ $searchTerm }}"</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @foreach ($search_result as $product)
    <div class="col">
        <div class="card shadow-sm">
            <div class="text-center">
                <a href="{{ $product->front_url }} ">
                    <img src="{{ $product->getFirstMediaUrl('images' , 'thumb')  }}" class="  mx-auto d-block" loading="lazy" decoding="async"  title="{{ $product->name }}"  alt="{{ $product->name }} image 1">

                </a>
            </div>
            <div class="card-body">
                <a href=" {{ $product->front_url }} ">
                    <h5 class="card-title"><b> {{ $product->name }}</b> </h5>
                </a>
                <p class="card-text"> {!! ($product->short_description) !!} </p>
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

{{ $search_result->links() }}

@stop
