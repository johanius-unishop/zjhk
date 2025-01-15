<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"><strong>Товары без цены от производителя:</strong></div>
            <table class="table table-striped">
                <thead>
                    
                    <th>Модель</th>
                    <th>Артикул</th>
                    <th>Производитель</th>

                </thead>
                @foreach ($productsWithoutSupplierPrice as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->article }}</td>
                    <td>@if ($product->vendor) {{ $product->vendor->short_name }} @else Не указан производитель!!! @endif</td>
                </tr>
                @endforeach
            </table>
            Цены поставщика необходимо загружать через прайс-лист, данная таблица является информационной, необходимо запросить цены у производителя.
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="exit" type="button" class="btn btn-primary">Назад</button>
            </div>
        </div>
    </div>   
</div>