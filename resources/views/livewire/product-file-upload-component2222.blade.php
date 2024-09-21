<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Выберите тип файла</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-5 col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Технические характеристики</a>
                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Габаритный чертеж</a>
                        <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Обзорная информация</a>
                    </div>
                </div>
                <div class="col-7 col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        {{-- @foreach ($file_specifications as $file_specification)

                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <a href="{{ $file_specification->getUrl() }}" target="_blank">
                                        <img src="{{ $file_specification->getUrl('thumbnail') }}" class="img-fluid" alt="{{ $file_specification->getName() }}">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endforeach --}}




                            @if (count((array) $file_specifications) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Имя</th>
                                        <th>Размер</th>
                                        <th>Файл </th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($file_specifications as $file_specification)
                                    <tr>
                                        <td>{{ $file_specification['name'] }}</td>
                                        <td>{{ $file_specification['size'] }} </td>
                                        <td>
                                            <button class="btn btn-success" wire:click="download({{ $file_specification['id']}})"><i class="fa fa-download"></i></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn  btn-danger" wire:click="delete({{  $file_specification['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?">Удалить</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="col-md-12 text-center">
                                Файлов не найдено
                            </div>
                            @endif


                            @error('file')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <label for="file">Файл характеристики</label>
                            <div wire:ignore class="input-group">
                                <div class="custom-file"> <label class="custom-file-label" for="file">Выберите файл </label>

                                    <input type="file" class="custom-file-input" wire:model="file_specification" name="file" id="file">
                                    {{-- {{ $flag==1 ? 'disabled' : '' }} --}}
                                    <a class="btn btn-primary" wire:click="upload_file_specification" href="#"> Загрузить файл </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                файлы
                <div class="form-group">
                    <label for="dimensionalDrawingInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" wire:model="file_specification" id="dimensionalDrawingInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Выберите файл</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" wire:click="upload_file_specification">Upload</span>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                файлы
            </div>
        </div>
    </div>
</div>
