<form action="{{ route('admin.import.new_order') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h2>Формирование нового заказа поставщика</h2>
    
    <div class="row">
        <!-- Поле для выбора вендора -->
        <div class="col-md-3">
            <div class="form-group">
                <label for="vendor_id">Выберите производителя</label>
                <select class="form-control" wire:model="vendor_id" id="vendor_id" name="vendor_id">
                    <option value="0">-- Выберите производителя --</option>
                    @foreach($vendors as $vendor)
                        <option value="{{ $vendor->id }}">{{ $vendor->short_name ?? $vendor->name }}</option>
                    @endforeach
                </select>
                @error('vendor_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="form-group">
                <label for="amount">Введите сумму нового заказа в рублях</label>
                <input type="number" class="form-control" wire:model="amount" id="amount" step="50000" name="amount">
                @error('amount')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col text-left">
            <button type="submit" class="btn btn-primary">
                Сформировать
            </button>
            </div>
    </div>
</form>
