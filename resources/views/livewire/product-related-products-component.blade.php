<div>
    @csrf
    @foreach($productRelatedTypes as $relatedType)
        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">{{ $relatedType->name }}</h3>
            </div>
            
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form wire:submit="handleClick({{ $relatedType->id }})" class="mb-2">
                            <div class="form-group">
                                <label for="searchable-select" class="mx-2">Добавить товар:</label>
                                <select id="searchable-select" wire:model.live="selectedProducts.{{ $relatedType->id }}" class="mx-2">
                                <option value="">-- Выберите товар--</option>
                                @foreach($arrayProducts as $value => $label)
                                    <option value="{{ $label }}">{{ $value }}</option>
                                @endforeach
                                </select>
                                <button type="submit" class="btn btn-outline-success btn-sm mx-2">Добавить товар</button>
                            </div>
                        
                        </form>    
                        
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Изображение товара</th>
                                    <th>Товар</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($addedProducts[$relatedType->id] as $addedProduct)
                                <tr>
                                    <td>
                                        <figure class="figure">
                                            @if ($addedProductImages[$addedProduct->id])
                                                <a class="my-image-links" data-gall="gallery01" data-maxwidth="1600px" data-ratio="16x9" href="#" data-href="{{ $addedProductImages[$addedProduct->id]->getUrl() }}">
                                                    <img width="50%" height="50%" src="{{ $addedProductImages[$addedProduct->id]->getUrl('thumb') }}" class="img-fluid my-link" alt="{{ $addedProductImages[$addedProduct->id]->getFullUrl() }}">
                                                </a>
                                            @else
                                                <p>Нет изображения</p>
                                            @endif
                                        </figure>
                                    </td>
                                    <td>
                                        {{ $addedProduct->name }} @if(!empty($addedProduct->article)) ({{ $addedProduct->article }}) @endif
                                    </td>
                                    <td>
                                    <a class="btn btn-outline-danger btn-sm " wire:confirm="Вы действительно хотите убрать этот товар из группы?" wire:click="delete({{ $addedProduct->id }})" href="#"><i class="fa fa-trash"></i></a>
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
                <input type="text" class="form-control" wire:model.live="name" id="name">
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
