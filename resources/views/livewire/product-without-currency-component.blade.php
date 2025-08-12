<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"><strong>Товары без указания валюты:</strong></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Валюта</th>

                </thead>
                @foreach ($productsWithoutCurrency as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->article }}</td>
                    <td>
                        <select class="form-control" id="select_{{ $product->id }}" wire:model.live="selectedCurrencies.{{ $product->id }}">
                            <option value="">-- Выберите валюту --</option>
                            @foreach ($currencies as $currency)
                                <option value="{{ $currency->id }}" {{ $product->currency_id == $currency->id ? 'selected' : '' }}>
                                    {!! $currency->charcode !!}
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