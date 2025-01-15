<form wire:submit.prevent="save">
    @csrf
    <h2>Загрузка заказа поставщику:</h2>
    <div class="row">
        <div class="col-6">
            <div class="form-group">
                <label for="xls_file">Выберите файл XLS/XLSX:</label>
                <input type="file" id="xls_file" wire:model="xls_file" accept=".xlsx,.xls">
                @error('xls_file') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="input-group">
                <span class="input-group-append">
                    <button type="submit" class="btn btn-primary btn-flat">Загрузить</button>             
                </span>
            </div>
        </div>
        <div class="col-6">
        @if(session('order_error_message'))
            <div class="alert alert-danger">
                <strong>{{ session('order_error_message') }}</strong>
            <ul>
                @foreach(session('missingProducts') as $product)
                    <li>{{ $product }}</li>
                @endforeach
            </ul>
            <strong>Сначала добавьте эти товары в прайс-лист и прогрузите его!</strong>
        <div>
        @endif    
        </div>
    </div>
</form>
