<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"><strong>Товары без указания ТН ВЭД:</strong></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>ТН ВЭД</th>

                </thead>
                @foreach ($productsWithoutTnved as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->article }}</td>
                    <td>
                    <input type="text" class="form-control" id="tnved_{{ $product->id }}" wire:model="tnved.{{ $product->id }}" value="{{ old('tnved.' . $product->id, $product->tn_ved) }}" placeholder="ТН ВЭД">
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