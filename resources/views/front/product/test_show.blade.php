АНАЛОГИ
{{ Breadcrumbs::render('home') }}
<table class="table table-striped">

    @foreach ($analogs as $analog => $value)
    <tr>
        <td>{{ $analog }}</td>
        <td>{{  $value }}
        </td>
    </tr>
    @endforeach
</table>
