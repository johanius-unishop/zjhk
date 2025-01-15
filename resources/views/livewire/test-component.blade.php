<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-left">{{ $productType->name }}: &nbsp;<b> {{ $product->name }} </b></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Характеристика</th>
                    <th>Значение</th>
                    
                </thead>
                @foreach ($productType->properties as $property)
                <tr wire:key="property_{{ $property->id }}">
                    <td @if($property->section) style="font-weight: bold;" @endif>{{ $property->name }}</td>
                    <td>
                        @if(!$property->section)
                        <select class="form-control" id="select_{{ $property->id }}" wire:model="selectedValues.{{ $property->id }}">
                            <option value="">Выберите вариант</option>
                            @foreach ($property->productTypePropertyValues as $value)
                                <option value="{{ $value->id }}" {{ $selectedValues[$property->id] == $value->id ? 'selected' : '' }}>
                                    {!! $value->value !!}
                                </option>
                            @endforeach
                        </select>
                        @endif
                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить </button>
            </div>
        </div>
    </div>   
</div>
