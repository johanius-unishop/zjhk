<div>
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"> Аналоги для товара - <b>{{ $record ->name }}</b></div>
            <table class="table table-striped">
                <thead>
                    <th>Производитель</th>
                    <th>Наименование</th>
                    <th>Артикул</th>
                    <th>Действия</th>
                </thead>
                @foreach ($analogVendors as $analogVendor)
                <tr>
                    <td>{{ $analogVendor->name }}</td>
                    <td><input type="text" class="form-control" wire:model="analog_name.{{ $analogVendor->id }}" name="analog_name.{{ $analogVendor->id }}"></td>
                    <td><input type="text" class="form-control" wire:model="analog_article.{{ $analogVendor->id }}" name="analog_article.{{ $analogVendor->id }}"> </td>
                    <td>  <button type="button" class="btn  btn-danger" wire:click="delete({{  $analogVendor->id  }})"
                        wire:confirm="Вы действительно хотите очистить этот вариант?"><i class="fas fa-trash"></i></button> </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
