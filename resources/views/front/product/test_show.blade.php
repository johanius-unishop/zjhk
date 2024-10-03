@extends('layouts.front')





@section('content')
{{ Breadcrumbs::render('front_product' , $data['breadcrumbs'] , $data['product']  ) }}
АНАЛОГИ

<table class="table table-striped">
    @foreach ($data['analogs'] as $analog => $value)
    <tr>
        <td>{{ $analog }}</td>
        <td>{{ $value }}
        </td>
    </tr>
    @endforeach
</table>
@stop
