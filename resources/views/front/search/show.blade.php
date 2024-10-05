@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('search_result'  ) }}


<h1 class="font-bold text-3xl"> Результат поиска "{{ $searchTerm }}"</h1>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @foreach ($search_result as $product)
    @include('front.block.show_product' , ['product' => $product])
    @endforeach
</div>

{{ $search_result->links() }}

@stop
