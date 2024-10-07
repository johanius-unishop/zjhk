@extends('layouts.front')


@section('content')
{{ Breadcrumbs::render('favourites'  ) }}
Избранное
<livewire:favourite-component />
@stop
