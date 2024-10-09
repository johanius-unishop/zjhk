@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('news'  ) }}
<h1> Производитель</h1>



<h5 class="card-title"><b> {{ $vendor->name }}</b> </h5>
{!! ($vendor->body_description) !!}
<p class="card-text">  {{ $vendor->created_at  }} </p>





@stop
