<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            Тип товара - <b>{{ $productType->name }}</b>
            <table class="table table-striped">
                <thead>
                    <th>Характеристика</th>
                    <th>Значение</th>
                </thead>
                @foreach ($props as $prop)
                <tr>
                    <td>{{ $prop->name }}</td>
                    <td>Значение
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="form-group"> <label for="short_description">Характеристики </label>


            </div>
        </div>

        <div class="col-6">
            <div class="form-group"> <label for="short_description">Значения </label>


            </div>
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
