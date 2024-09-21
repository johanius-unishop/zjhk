<div>
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Технические характеристики
            </h3>
        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-12   py-3">
                    @if (count((array) $file_specifications) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Размер</th>
                                <th>Файл </th>
                                <th>Загружено</th>
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
                            @error('file_specification') <span class="error">{{ $message }}</span> @enderror
                            <input type="file" class="custom-file-input" wire:model.defer="file_specification" name="file_specification" id="file_specification">
                            {{-- {{ $flag==1 ? 'disabled' : '' }} --}}
                        </div>
                        <a class="btn btn-primary" wire:click="upload_file_specification" href="#"> Загрузить файл </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Габаритный чертеж
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12  py-3">
                    @if (count((array) $file_dimensionalDrawings) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Размер</th>
                                <th>Файл </th>
                                <th>Загружено</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($file_dimensionalDrawings as $file_dimensionalDrawing)


                            <tr>
                                <td>{{ $file_dimensionalDrawing['file_name'] }}</td>
                                <td> {{ $file_dimensionalDrawing['human_readable_size'] }}</td>
                                <td>
                                    <button class="btn btn-success" wire:click="download({{ $file_dimensionalDrawing['id']}})"><i class="fa fa-download"></i></button>
                                </td>
                                <td>{{ $file_dimensionalDrawing['created_at'] }} </td>
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
                            @error('file_dimensional_drawing') <span class="error">{{ $message }}</span> @enderror
                            <input type="file" class="custom-file-input" wire:model="file_dimensional_drawing" name="file_dimensional_drawing" id="file_dimensional_drawing">
                            {{-- {{ $flag==1 ? 'disabled' : '' }} wire:ignore --}}
                        </div>
                        <a class="btn btn-primary" wire:click="upload_dimensional_drawing" href="#"> Загрузить файл </a>
                    </div>
                </div>
            </div>

        </div>
    </div>






    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Обзорная информация
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12   py-3">
                    @if (count((array) $file_overviewInformations) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Размер</th>
                                <th>Файл </th>
                                <th>Загружено</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($file_overviewInformations as $file_overviewInformation)


                            <tr>
                                <td>{{ $file_overviewInformation['file_name'] }}</td>
                                <td> {{ $file_overviewInformation['human_readable_size'] }}</td>
                                <td>
                                    <button class="btn btn-success" wire:click="download({{ $file_overviewInformation['id']}})"><i class="fa fa-download"></i></button>
                                </td>
                                <td>{{ $file_overviewInformation['created_at'] }} </td>
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

                    <label for="file_overviewInformation">Файл обзорной информации</label>
                    <div wire:ignore class="input-group">
                        <div class="custom-file"> <label class="custom-file-label" for="file_overview_information">Выберите файл </label>
                            @error('file_overview_information') <span class="error">{{ $message }}</span> @enderror
                            <input type="file" class="custom-file-input" wire:model="file_overview_information" name="file_overview_information" id="file_overview_information">
                            {{-- {{ $flag==1 ? 'disabled' : '' }} wire:ignore --}}
                        </div>
                        <a class="btn btn-primary" wire:click="upload_overview_information" href="#"> Загрузить файл </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
