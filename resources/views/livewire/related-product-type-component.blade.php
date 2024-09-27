<div>
    {{-- The whole world belongs to you. --}}
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Наименование</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($relatedProductTypes as $relatedProductType)
                <tr>
                    <td> {{ $relatedProductType->id }}</td>
                    <td> {{ $relatedProductType->name }}</td>
                    <td>
                        <button type="button" wire:click="up" wire:model="rowId"  class="btn btn-success"><i class="fas fa-arrow-up"></i></button>
                        <button type="button" wire:click="down" wire:model="rowId"  class="btn btn-success"><i class="fas fa-arrow-down"></i></button>
                        <button type="button" wire:click="delete"  class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                    @empty


                    @endforelse
                </tr>
            </tbody>
        </table>

    </div>

    <div class="row">
        <div class=" col-6  ">
            <div class="form-group">
                <label for="name">Новый тип </label>
                {{-- <input type="text" class="form-control" name="old_code" id="old_code">
                @error('old_code')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror --}}

                <div class="input-group  ">
                    <input type="text" class="form-control"   wire:model="name" id="name">
                    <span class="input-group-append">
                    <button type="button" wire:click="save"  class="btn btn-info btn-flat" {{ $isDisabled==true ? 'disabled' : ''  }}>Сохранить!</button>
                    </span>
                    </div>

            </div>
        </div>
    </div>
</div>
