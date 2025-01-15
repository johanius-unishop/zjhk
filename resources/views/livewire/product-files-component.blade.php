<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Тип файла</th>
                        <th>Файл</th>
                        <th>Действия</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Спецификация</td>
                        <td>
                            @if(isset($mediaFiles['specification']) && !empty($mediaFiles['specification']))
                                <span class="me-2"><i class="fas fa-file-pdf"></i></span>
                                <a href="{{ $mediaFiles['specification']['url'] }}" target="_blank">{{ basename($mediaFiles['specification']['url']) }}</a>
                            @else
                                <form wire:submit.prevent="uploadFile('specification')">
                                    
                                    <div class="d-flex align-items-center gap-2 d-md-flex justify-content-md">
                                        <input type="file" wire:model="newFile" accept="application/pdf">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Добавить файл</button>
                                    </div>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if(isset($mediaFiles['specification']) && !empty($mediaFiles['specification']))
                                <button wire:click="deleteFile('specification')" class="btn btn-outline-danger btn-sm">Удалить файл</button>
                            @else
                                
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Габаритный чертеж</td>
                        <td>
                            @if(isset($mediaFiles['dimensionalDrawing']) && !empty($mediaFiles['dimensionalDrawing']))
                                <span class="me-2"><i class="fas fa-file-pdf"></i></span>
                                <a href="{{ $mediaFiles['dimensionalDrawing']['url'] }}" target="_blank">{{ basename($mediaFiles['dimensionalDrawing']['url']) }}</a>
                            @else
                                <form wire:submit.prevent="uploadFile('dimensionalDrawing')">
                                    <div class="d-flex align-items-center gap-2 d-md-flex justify-content-md">
                                        <input type="file" wire:model="newFile" accept="application/pdf">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Добавить файл</button>
                                    </div>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if(isset($mediaFiles['dimensionalDrawing']) && !empty($mediaFiles['dimensionalDrawing']))
                                <button wire:click="deleteFile('dimensionalDrawing')" class="btn btn-outline-danger btn-sm">Удалить файл</button>
                            @else
                                
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>Обзор серии</td>
                        <td>
                            @if(isset($mediaFiles['overviewInformation']) && !empty($mediaFiles['overviewInformation'])) 
                                <span class="me-2"><i class="fas fa-file-pdf"></i></span>
                                <a href="{{ $mediaFiles['overviewInformation']['url'] }}" target="_blank">{{ basename($mediaFiles['overviewInformation']['url']) }}</a>
                            @else
                                <form wire:submit.prevent="uploadFile('overviewInformation')">
                                    <div class="d-flex align-items-center gap-2 d-md-flex justify-content-md">
                                        <input type="file" wire:model="newFile" accept="application/pdf">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Добавить файл</button>
                                    </div>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if(isset($mediaFiles['overviewInformation']) && !empty($mediaFiles['overviewInformation']))
                                <button wire:click="deleteFile('overviewInformation')" class="btn btn-outline-danger btn-sm">Удалить файл</button>
                            @else
                                
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>3D-модель</td>
                        <td>
                            @if(isset($mediaFiles['3dModel']) && !empty($mediaFiles['3dModel']))
                                <span class="me-2"><i class="fas fa-cube"></i></span>
                                <a href="{{ $mediaFiles['3dModel']['url'] }}" target="_blank">{{ basename($mediaFiles['3dModel']['url']) }}</a>
                            @else
                                <form wire:submit.prevent="uploadFile('3dModel')">
                                    <div class="d-flex align-items-center gap-2 d-md-flex justify-content-md">
                                        <input type="file" wire:model="newFile" accept=".rar,.zip,.stp">
                                        <button type="submit" class="btn btn-outline-success btn-sm">Добавить файл</button>
                                    </div>
                                </form>
                            @endif
                        </td>
                        <td>
                            @if(isset($mediaFiles['3dModel']) && !empty($mediaFiles['3dModel']))
                                <button wire:click="deleteFile('3dModel')" class="btn btn-outline-danger btn-sm">Удалить файл</button>
                            @else
                                
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>