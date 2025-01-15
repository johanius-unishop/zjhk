<form wire:submit="save">
    @csrf
    <h2>Добавление новой характеристики</h2>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="name">Название характеристики</label>
                <input type="text" class="form-control" wire:model="name" id="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" wire:model="section" id="section">
                <label class="form-check-label" for="section">Является секцией</label>
                @error('section')
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
