<div>
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"> Аналоги для товара <b>"{{ $record ->name }}"</b></div>
            <table class="table table-striped">
                <thead>
                    <th>Производитель</th>
                    <th>Наименование</th>
                    <th>Артикул</th>
                    <th>Действия</th>
                </thead>
                @foreach ($analogTable as $analogTableItem)

                {{-- {{   var_dump($analogTableItem);}} --}}
                <tr>
                    <td>{{ $analogTableItem['vendor_name'] }}</td>
                    {{-- <td><input type="text" class="form-control" wire:model="analogTable.{{$analogTableItem['vendor_id']  }}" name="analog_name.{{$analogTableItem['vendor_id'] }}" value="{{$analogTableItem['name'] }}"></td>
                    <td><input type="text" class="form-control" wire:model="analogTable.{{$analogTableItem['vendor_id']  }}.{{$analogTableItem['article']  }}" value="{{ $analogTableItem['article'] }}"> </td> --}}
                    <td><input type="text" class="form-control" wire:model="analogTable.{{$analogTableItem['vendor_id']}}.name" value="{{ $analogTableItem['name'] }}"> </td>
                    <td><input type="text" class="form-control" wire:model="analogTable.{{ $analogTableItem['vendor_id']}}.article" value="{{ $analogTableItem['article'] }}"> </td>
                    <td> <button type="button" class="btn  btn-danger" wire:click="delete({{ $analogTableItem['vendor_id'] }})" wire:confirm="Вы действительно хотите очистить этот вариант?"><i class="fas fa-trash"></i></button> </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">

                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить аналоги</button></div>
        </div>
    </div>
</div>
