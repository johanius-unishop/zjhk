<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"><strong>Товары без определения типа:</strong></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Тип товара</th>

                </thead>
                @foreach ($productsWithoutType as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->article }}</td>
                    <td>
                        <select class="form-control" id="select_{{ $product->id }}" wire:model.live="selectedTypes.{{ $product->id }}">
                            <option value="">-- Выберите тип товара --</option>
                            @foreach ($productTypes as $product_type)
                                <option value="{{ $product_type->id }}" {{ $product->product_type_id == $product_type->id ? 'selected' : '' }}>
                                    {!! $product_type->name !!}
                                </option>
                            @endforeach
                        </select> 
                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary">Сохранить </button>
            </div>
        </div>
    </div>   
</div>