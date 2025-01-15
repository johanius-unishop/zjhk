<div>
    @csrf
    @foreach($productCompositeTypes as $compositeType)
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">{{ $compositeType->name }}</h3>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form wire:submit.prevent="handleClick({{ $compositeType->id }})" class="mb-2">
                            <div class="form-group">
                                <label for="searchable-select" class="mx-2">Добавить компонент комплекта:</label>
                                <select id="searchable-select" wire:model="selectedElements.{{ $compositeType->id }}" class="mx-2">
                                <option value="">-- Выберите товар--</option>
                                @foreach($listProducts as $value => $label)
                                    <option value="{{ $label }}">{{ $value }}</option>
                                @endforeach
                                <input type="number" min="1" step="1" placeholder="Количество" wire:model="quantityElements.{{ $compositeType->id }}" class="mx-2" />
                                </select>
                                <button type="submit" class="btn btn-outline-success btn-sm mx-2">Добавить товар</button>
                            </div>
                        
                        </form>
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Изображение товара</th>
                                    <th>Компонент</th>
                                    <th>Количество</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($addedElements[$compositeType->id] as $addedElement)
                                <tr>
                                    <td style="width: 20%;">
                                        <figure class="figure">
                                            @if ($addedElementImages[$addedElement->id])
                                                <a class="my-image-links" data-gall="gallery01" data-maxwidth="1600px" data-ratio="16x9" href="#" data-href="{{ $addedElementImages[$addedElement->id]->getUrl() }}">
                                                    <img width="50%" height="50%" src="{{ $addedElementImages[$addedElement->id]->getUrl('thumb') }}" class="img-fluid my-link" alt="{{ $addedElementImages[$addedElement->id]->getFullUrl() }}">
                                                </a>
                                            @else
                                                <p>Нет изображения</p>
                                            @endif
                                        </figure>
                                    </td>
                                    <td style="width: 40%;">
                                        {{ $addedElement->name }} @if(!empty($addedElement->article)) ({{ $addedElement->article }}) @endif
                                    </td>
                                    <td style="width: 20%;">
                                        @if ($addedElementQuantities[$addedElement->id])
                                            {{ $addedElementQuantities[$addedElement->id] }}
                                        @else
                                            <p>Нет изображения</p>
                                        @endif
                                    </td>
                                    <td style="width: 20%;">
                                        <a class="btn btn-outline-danger btn-sm " wire:confirm="Вы действительно хотите удалить этот товар из состава комплекта?" wire:click="delete({{ $addedElement->id }})" href="#"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>







{{--

    <h2>Добавление нового совместимого типа товаров</h2>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name">Название совместимого типа товаров</label>
                <input type="text" class="form-control" wire:model="name" id="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-flat">Сохранить!</button>             
                </span>
            </div>
        </div>
    </div>
    --}}
