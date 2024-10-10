@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('news'  ) }}
<h1> Новости</h1>

@foreach ($data['items'] as $items)
<div class="card shadow-sm">
    <a href=" {{ $items->front_url }} ">
        <img src="{{ $items->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $items->name }} image 1">
    </a>
    <div class="card-body">
        <a href=" {{ $items->front_url }} ">
            <h5 class="card-title"><b> {{ $items->name }}</b> </h5>
        </a>
        <p class="card-text"> {{ ($items->short_description) }} </p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">Смотреть </button>

            </div>
            {{-- <small class="text-body-secondary">9 mins</small> --}}
        </div>
    </div>
</div>

@endforeach
{{ $data['items'] ->links() }}
@stop
