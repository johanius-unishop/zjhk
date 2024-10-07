@extends('admin')

{{-- @section('breadcrumbs')
{!! Breadcrumbs::render($breadcrumb, @$item) !!}
@endsection --}}

@section('title', 'Результаты поиска')
@section('content_header')
<h1>Результаты поиска</h1>
@stop
@section('content')
<h3> Вы искали по слову "{{$searchTerm}}" </h3>
<span class="count">найдено {{ $searchCount }}</span>
@foreach ($search_result as $item)


<div class="attachment-block clearfix">
    <a href="{{route('admin.product.edit', $item->id)}}">
        <img width="300px" height="200" class="attachment-img2" src="{{$item->getFirstMediaUrl('images' , 'thumb')}}" alt="attachment-img">
    </a>
    <div class="attachment-pushed">
        <h4 class="attachment-heading"><a href="{{route('admin.product.edit', $item->id)}}">{{$item->model}}</a></h4>
        <div class="attachment-text">
            {{$item->name}}
            <br> <a href="{{route('admin.product.edit', $item->id)}}">смотреть</a>
        </div>
    </div>
</div>

@endforeach
{{-- , ['searchTerm' => $searchTerm]->withQueryString() --}}
{{ $search_result->links('vendor.pagination.bootstrap-4' )}}
@endsection

{{-- Push extra CSS --}}
@push('css')
{{-- Add here extra stylesheets --}}
<style>
    .attachment-img2 {
        float: left;
        height: auto;
        padding: 15px;
        /* width: 300px;
        height: 200px; */
    }
</style>

@endpush
{{-- Push extra scripts --}}

@push('js')

@endpush
