<div>
    {{-- Success is as dangerous as failure. --}}

    <h2> тест композитного товара</h2>
    <table class="table table-bordered">
        <tr>
            <th>Тип товара</th>
            <th>Наименование товара</th>


            <th>Цена</th>
            <th>Количество</th>
            <th>Действия</th>
        </tr>

        @foreach($product->type->composites as $composite)
        <tr>
            <td> {{ $composite->name }}</td>
            <td>{{ $composite->product->name }}</td>


            <td>Цена</th>
            <td><input type="number" wire:model="composite.quantity" class="form-control"></td>

            <td><button wire:click="saveComposite('{{ $composite->id }}')" class="btn btn-primary">сохранить</button><button wire:click="clearComposite('{{ $composite->id }}')" class="btn btn-primary">очистить </button></td>

        </tr>
        @endforeach
        <tr>
            <td colspan="2">Стоимость комплекта</td>
            <td><b>Сумма</b></td>
            <td colspan="2"> </td>
        </tr>
    </table>
</div>
