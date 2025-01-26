<form wire:submit="save">
    @csrf
    <h2>Добавление новой страны</h2>
    
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="name">Название страны</label>
                <input type="text" class="form-control" wire:model="name" id="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="form-group">
                <label for="name_in_english">Название страны на английском</label>
                <input type="text" class="form-control" wire:model="name_in_english" id="name_in_english">
                @error('name_in_english')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="charcode">Символьный код</label>
                <input type="text" class="form-control" wire:model="charcode" id="charcode">
                @error('charcode')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col text-left">
            <button type="submit" class="btn btn-primary btn-flat">Сохранить!</button>
        </div>
    </div>
</form>
