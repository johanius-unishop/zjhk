@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('news'  ) }}
<h1> Новости</h1>



<h5 class="card-title"><b> {{ $news->name }}</b> </h5>
{!! ($news->body_description) !!}
<p class="card-text">  {{ $news->created_at  }} </p>





@stop
