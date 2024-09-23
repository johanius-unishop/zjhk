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
                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить </button></div>
        </div>
    </div>

    {{-- @foreach ($productType->props as $prop)
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="published" id="published" data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-on="Да" data-off="Нет" {!! @$prop->active ? '
                                    checked ' : ' ' !!} >
                            <label class="form-check-label" for="exampleCheck1">{{ $prop->name }}</label>
</div>
@endforeach --}}
</div>
