<div>  
    @if (!empty($productWithoutPropertyValues))
    <div class="row">
        <div class="col-12">
            <div class="py-3 form-row justify-content-center">
                @if ($productWithoutPropertyValues->count())
                    <p>Характеристики не заполнены у {{ $productWithoutPropertyValues->count() }} товаров.</p>
                @else
                    <p>Нет товаров с незаполненными характеристиками.</p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Тип товара</th>
                    <th>Действия</th> <!-- Заголовки столбцов -->
                </thead>
                @foreach ($productWithoutPropertyValues as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->article }}</td>
                        <td>
                            @if ($product->product_type)
                                {{ $product->product_type->name }}
                            @else
                                Не назначен тип товара
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.product.edit', ['product' => $product->id]) }}">
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