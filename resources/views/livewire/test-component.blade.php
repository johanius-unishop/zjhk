<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"> Тип товара - <b>{{ $productType->name }}</b></div>
            <table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Характеристика</th>
                    <th>Значение</th>
                </thead>
                @foreach ($props as $prop)
                <tr>
                    <td>{{ $prop->id }} </td>
                    <td> {{ $prop->name }}</td>
                    <td>Значение

                        <button type="button" wire:click="editProperty({{$prop->id}} )"  class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button type="button" wire:click="deleteProperty({{$prop->id}})"  class="btn btn-danger"><i class="fas fa-trash"></i></button>

                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить </button></div>
        </div>
    </div>


</div>
