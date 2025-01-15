{{--<div wire:poll.visible>
    <div>
        @if ($record->pdf_path && file_exists(public_path($record->pdf_path)))
            
        @else
            
        @endif
    </div>
</div>--}}



<div wire:poll.visible>
    <div class="row">
        @if(isset($file)) <!-- Проверка наличия файла -->
        
            <div class="col-md-2 mb-4">
                <figure class="figure">
                    <p><i class="fa fa-file-pdf"></i> <a href="{{ $file->getUrl() }}">{{ $file->file_name }}</a></p>
                    <table>
                        <tr>
                            <td>Размер:</td>
                            <td>{{ $file->human_readable_size }}</td>
                        </tr>
                        <tr>
                            <td>Загружено:</td>
                            <td>{{ $file->created_at }}</td>
                        </tr>
                    </table>
                    <figcaption class="figure-caption">
                        @if(Auth::user()->cannot('manage product')) <!-- Условие для проверки прав доступа -->
                            @if($file->created_at->diffInDays(now()) < 1) <!-- Разрешаем удаление только за последние сутки -->
                                <a class="btn btn-danger" wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $file->id }})" href="#"><i class="fa fa-trash"></i></a>
                            @endif
                        @else
                            <a class="btn btn-danger" wire:confirm="Вы действительно хотите удалить этот файл?" wire:click="delete({{ $file->id }})" href="#"><i class="fa fa-trash"></i></a>
                        @endif
                        <a class="btn btn-success" wire:click="download({{ $file->id }})" href="#"><i class="fa fa-download"></i></a>
                    </figcaption>
                </figure>
            </div>
        
        @else <!-- Если файл отсутствует -->
            <div class="col-md-12 text-center">
                <p class="error-message">PDF-файл не прикреплён.</p>
            </div>
        @endif

        @if(!isset($file)) <!-- Отображаем форму загрузки, если файл ещё не загружен -->
            @if($flag == 0) <!-- Условие для отображения формы загрузки -->
                <div>
                    <input type="file" wire:model="up_file" name="up_file">
                    @error('up_file') <span class="error">{{ $message }}</span> @enderror
                    <a class="btn {{ $flag == 0 ? 'btn-primary' : 'btn-danger' }}" wire:loading.attr="disabled" wire:click="uploadPdf" href="#">Загрузить PDF</a>
                </div>
            @else
                <div class="col-md-12 text-center">
                    Загрузка...
                </div>
            @endif
        @endif
    </div>
</div>

@push('css')
<!-- Добавляем стили -->
<style>
    .error-message {
        color: red;
    }
</style>
@endpush