<div>  
    @if (!empty($productTypePropertiesWithoutValues))
    <div class="row">
        <div class="col-12">
            <div class="py-3 form-row justify-content-center">
                @if ($productTypePropertiesWithoutValues->count())
                    <p>Характеристики, не имеющие вариантов значений  {{ $productTypePropertiesWithoutValues->count() }} товаров.</p>
                @else
                    <p>Нет характеристик без вариантов значений.</p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <th>Тип товара</th>
                    <th>Характеристика</th>
                    <th>Действия</th> <!-- Заголовки столбцов -->
                </thead>
                @foreach ($productTypePropertiesWithoutValues as $property)
                    <tr>
                        <td>{{ $property->productType->name }}</td>
                        <td>{{ $property->name }}</td>
                        <td>
                            <a href="{{ route('admin.product_type_property.show', ['product_type_property' => $property->id]) }}">
                                <button type="button" class="btn btn-primary">Редактировать</button>
                                
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    @endif
</div>