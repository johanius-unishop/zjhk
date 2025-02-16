<div>  
    @if (!empty($productWithoutModel))
    <div class="row">
        <div class="col-12">
            <div class="py-3 form-row justify-content-center">
                @if ($productWithoutModel->count())
                    <p>3D-модель отсутствует у {{ $productWithoutModel->count() }} товаров.</p>
                @else
                    <p>Нет товаров без 3D-модели.</p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Действия</th> <!-- Заголовки столбцов -->
                </thead>
                @foreach ($productWithoutModel as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->article }}</td>
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