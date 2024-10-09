@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('vendor' ,$data['vendor']) }}
<h1> Производитель</h1>



<h5 class="card-title"><b> {{ $data['vendor']->name }}</b> </h5>
{!! ( $data['vendor']->body_description) !!}
<p class="card-text"> {{ $data['vendor']->created_at  }} </p>

@if ( count( (array) $data['products'] ) > 0 )

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($data['products'] as $product)
            @include('front.block.show_product' , ['product' => $product])

            @endforeach

        </div>
    </div>
</div>

@endif



{{ $data['products'] ->links() }}



@stop
