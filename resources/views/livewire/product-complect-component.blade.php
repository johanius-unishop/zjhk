<div>
    {{-- Success is as dangerous as failure. --}}

    тест композитного товара
    <table>
        <tr>
            <th>Название</th>
            <th>Составноq товар </th>


            <th>Цена</th>
            <th>Количество</th>

        </tr>

        @foreach($product->type->composites as $composite)
        <tr>
            <td> {{ $composite->name }}</td>
            <td>{{ $composite->name }}</td>


            <td>Цена</th>
            <td>Количество</td>

        </tr>
        @endforeach
    </table>
</div>
