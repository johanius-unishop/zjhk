<div>
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-left">
                <strong>Выберите параметры:</strong>
                <!-- Добавляем выпадающий список -->
                <select wire:model.live="selectedOption" class="form-control ml-3 mr-3 my-1">
                    <option value="0" selected>Товары без изображений</option>
                    <option value="1">Товары с 1 изображением</option>
                    <option value="2">Товары с 2 изображениями</option>
                    <option value="3">Товары с 3 изображениями</option>
                    <option value="4">Товары с 4 изображениями</option>
                    <option value="5">Товары с 5 изображениями</option>
                </select>
                <select wire:model.live="composite" class="form-control ml-3 mr-3 my-1">
                    <option value="0" selected>Все товары</option>
                    <option value="1">Простые товары</option>
                    <option value="2">Составные товары (комплекты)</option>
                </select>
                <input type="checkbox" wire:model.live="inStock" class="ml-3 mr-3 my-1"> Товары в наличии
            </div>
            <div class=" py-3 form-row justify-content-right">
                <button wire:click="accept_filter" type="button" class="btn btn-primary">Показать </button>
            </div>
        </div>
    </div>   
    @if (!empty($productWithProblemImages))
    <div class="row">
        <div class="col-12">
            <div class="py-3 form-row justify-content-center">
                @if ($productWithProblemImages->count())
                    <p>Условиям фильтра соответствует: {{ $productWithProblemImages->count() }} товаров.</p>
                @else
                    <p>Нет товаров, соответствующих условиям.</p>
                @endif
            </div>
            <table class="table table-striped">
                <thead>
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Действия</th> <!-- Заголовки столбцов -->
                </thead>
                @foreach ($productWithProblemImages as $product)
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