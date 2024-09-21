<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                тест
            </h3>
        </div>
        <div class="card-body">
            {{-- <h4>Left Sided</h4> --}}
            <div class="row">
                <div class="col-5 col-sm-3">
                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="true">Технические характеристики</a>
                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Габаритный чертеж</a>
                        <a class="nav-link" id="vert-tabs-messages-tab" data-toggle="pill" href="#vert-tabs-messages" role="tab" aria-controls="vert-tabs-messages" aria-selected="false">Обзорная информация</a>
                        <a class="nav-link" id="vert-tabs-settings-tab" data-toggle="pill" href="#vert-tabs-settings" role="tab" aria-controls="vert-tabs-settings" aria-selected="false">Прочее</a>
                    </div>
                </div>
                <div class="col-7 col-sm-9">
                    <div class="tab-content" id="vert-tabs-tabContent">
                        <div class="tab-pane text-left fade show active" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">

                            @if (count((array) $file_specifications) > 0)
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Имя</th>
                                        <th>Размер</th>
                                        <th>Файл </th>
                                        <td>Загружено</td>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($file_specifications as $file_specification)
                                    <tr>
                                        <td>{{ $file_specification['file_name'] }}</td>
                                        <td> {{ $file_specification['human_readable_size'] }}</td>
                                        <td>
                                            <button class="btn btn-success" wire:click="download({{ $file_specification['id']}})"><i class="fa fa-download"></i></button>
                                        </td>
                                        <td>{{ $file_specification['created_at'] }} </td>
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

                            <label for="file_specification">Файл характеристики</label>
                            <div wire:ignore class="input-group">
                                <div class="custom-file"> <label class="custom-file-label" for="file">Выберите файл </label>

                                    <input type="file" class="custom-file-input" wire:model.defer="file_specification" name="file_specification" id="file_specification">
                                    {{-- {{ $flag==1 ? 'disabled' : '' }} --}}
                                </div>
                                <a class="btn btn-primary" wire:click="upload_file_specification" href="#"> Загрузить файл </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                            @if (count((array) $file_dimensionalDrawings) > 0)
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
                                    @foreach ($file_dimensionalDrawings as $file_dimensionalDrawing)
                                    <tr>
                                        <td>{{ $file_dimensionalDrawing['name'] }}</td>
                                        <td>{{ $file_dimensionalDrawing['size'] }} </td>
                                        <td>
                                            <button class="btn btn-success" wire:click="download({{ $file_dimensionalDrawing['id']}})"><i class="fa fa-download"></i></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn  btn-danger" wire:click="delete({{  $file_dimensionalDrawing['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?">Удалить</button>
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

                            <label for="file_dimensional_drawing">Файл габаритного чертежа</label>
                            <div wire:ignore class="input-group">
                                <div class="custom-file"> <label class="custom-file-label" for="file_dimensional_drawing">Выберите файл </label>

                                    <input type="file" class="custom-file-input" wire:ignore  wire:model.defer="file_dimensional_drawing" name="file_dimensional_drawing" id="file_dimensional_drawing">
                                    {{-- {{ $flag==1 ? 'disabled' : '' }} --}}
                                </div>
                                <a class="btn btn-primary" wire:click.prevent="upload_dimensional_drawing" href="#"> Загрузить файл </a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="vert-tabs-messages" role="tabpanel" aria-labelledby="vert-tabs-messages-tab">
                            @if (count((array) $file_dimensionalDrawings) > 0)
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
                                    @foreach ($file_overviewInformations as $file_overviewInformation)
                                    <tr>
                                        <td>{{ $file_overviewInformation['name'] }}</td>
                                        <td>{{ $file_overviewInformation['size'] }} </td>
                                        <td>
                                            <button class="btn btn-success" wire:click="download({{ $file_overviewInformation['id']}})"><i class="fa fa-download"></i></button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn  btn-danger" wire:click="delete({{  $file_overviewInformation['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?">Удалить</button>
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


                        </div>
                        <div class="tab-pane fade" id="vert-tabs-settings" role="tabpanel" aria-labelledby="vert-tabs-settings-tab">
                            Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
