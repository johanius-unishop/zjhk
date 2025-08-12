<h2>Загрузка заказа поставщику:</h2>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="xls_file">Выберите файл XLS/XLSX:</label>
                <input type="file" id="xls_file" wire:model.live="xls_file" accept=".xlsx,.xls">
                @error('xls_file') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="input-group">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-flat">Загрузить</button>             
                </span>
            </div>
        </div>
    </div>
</form>
