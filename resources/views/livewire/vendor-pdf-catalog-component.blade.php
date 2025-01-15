<div>
    @csrf
        <h2>Добавление нового каталога</h2>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    
                    <label for="name">Название каталога</label>
                    <input type="text" class="form-control" wire:model.defer="name" id="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <span class="input-group-append">
                        <a class="btn btn-primary" wire:loading.attr="disabled" wire:click="addCatalog" href="#"> Добавить каталог </a>
                    </span>
                </div>
            </div>
        </div>
</div>
