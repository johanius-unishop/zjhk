<div wire:poll.visible>
    <div class="card">
        <div class="card-header bg-gray-dark color-palette">
            <h3 class="card-title">SEO :: {{ @$record->name }}</h3>
            <div class="card-tools">

            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body bg-secondary disabled color-palette">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" wire:model="title">
            </div>
            <div>
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="title">Keywords</label>
                <input type="text" class="form-control" id="keywords" name="keywords" wire:model="keywords">
                <div>
                    @error('keywords') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" wire:model="description"></textarea>
                <div>
                    @error('description') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="title">Canonical url</label>
                <input type="text" class="form-control" id="canonical_url" name="canonical_url"
                    wire:model="canonical_url">
                <div>
                    @error('canonical_url') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить SEO</button>

        </div>
    </div>
</div>
