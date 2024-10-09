@extends('layouts.front')

@section('content')
{{ Breadcrumbs::render('vendors'  ) }}
<h1> Производители</h1>

@foreach ($data['items'] as $item)
<div class="card shadow-sm">
    <a href=" {{ $item->front_url }} ">
        <img src="{{ $item->getFirstMediaUrl('images' , 'thumb')  }}" loading="lazy" decoding="async" alt="{{ $item->name }} image 1">
    </a>
    <div class="card-body">
        <a href=" {{ $item->front_url }} ">
            <h5 class="card-title"><b> {{ $item->name }}</b> </h5>
        </a>
        <p class="card-text"> {{ ($item->short_description) }} </p>
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
