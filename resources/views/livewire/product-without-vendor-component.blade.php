<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"><strong>Товары без указания производителя:</strong></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Производитель</th>

                </thead>
                @foreach ($productsWithoutVendor as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->article }}</td>
                    <td>
                        <select class="form-control" id="select_{{ $product->id }}" wire:model="selectedVendors.{{ $product->id }}">
                            <option value="">-- Выберите производителя --</option>
                            @foreach ($vendors as $vendor)
                                <option value="{{ $vendor->id }}" {{ $product->vendor_id == $vendor->id ? 'selected' : '' }}>
                                    {!! $vendor->short_name !!}
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