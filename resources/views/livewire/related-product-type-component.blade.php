<form wire:submit="save">
    @csrf
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
</form>