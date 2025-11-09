<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Файл</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            @if(isset($mediaFile['files']) && !empty($mediaFile['files']))
                                <span class="me-2"><i class="fas fa-file-pdf"></i></span>
                                <a href="{{ $mediaFile['files']['url'] }}" target="_blank">{{ basename($mediaFile['files']['url']) }}</a>
                            @else
                                <form wire:submit="uploadFile('files')">
                                    <div class="d-flex align-items-center gap-2 d-md-flex justify-content-md">
                                        <input type="file" wire:model.live="newFile" accept="application/pdf">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Добавить файл</button>
                                    </div>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if(isset($mediaFile['files']) && !empty($mediaFile['files']))
                                <button wire:click="deleteFile('files')" class="btn btn-outline-danger btn-sm">Удалить файл</button>
                            @else

                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
