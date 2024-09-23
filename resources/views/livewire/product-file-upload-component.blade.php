<div wire:poll.visible>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Технические характеристики
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 py-3">
                    @if (count((array) $fileSpecifications) >= 1)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="col-6">Имя</th>
                                <th>Размер</th>
                                <th>Загружено</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fileSpecifications as $fileSpecification)
                            <tr>
                                <td>{{ $fileSpecification['file_name'] }}</td>
                                <td> {{ $fileSpecification['human_readable_size'] }}</td>
                                <td>{{ $fileSpecification['created_at'] }} </td>
                                <td>
                                    <button class="btn btn-success" wire:click="download({{ $fileSpecification['id']}})"><i class="fa fa-download"></i></button> &nbsp;<button type="button" class="btn  btn-danger" wire:click="delete({{  $fileSpecification['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?"><i class="fas fa-trash"></i></button>
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
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <label for="fileSpecification">Файл характеристики</label>
                            <input type="file" wire:model="fileSpecification" name="fileSpecification" {{ $multiple==true ? 'multiple' : '' }}>
                            @error('fileSpecification') <div class="alert alert-danger"> {{ $message }}</div> @enderror
                            <a class="btn {{ $flag==0 ? 'btn-primary ' : 'btn-danger' }} "  wire:click="uploadFileSpecification" href="#"> Загрузить файл </a>
                            wire:loading.attr="disabled"
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-primary  ">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-edit"></i>
                Габаритный чертеж
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12  py-3">
                    @if (count((array) $fileDimensionalDrawings) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="col-6">Имя</th>
                                <th>Размер</th>
                                <th>Загружено</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fileDimensionalDrawings as $fileDimensionalDrawing)
                            <tr>
                                <td>{{ $fileDimensionalDrawing['file_name'] }}</td>
                                <td> {{ $fileDimensionalDrawing['human_readable_size'] }}</td>
                                <td>{{ $fileDimensionalDrawing['created_at'] }} </td>
                                <td>
                                    <button class="btn btn-success" wire:click="download({{ $fileDimensionalDrawing['id']}})"><i class="fa fa-download"></i></button> &nbsp;<button type="button" class="btn  btn-danger" wire:click="delete({{  $fileDimensionalDrawing['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?"><i class="fas fa-trash"></i></button>
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
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <label for="fileDimensionalDrawing">Файл габаритного чертежа</label>
                            <input type="file" wire:model="fileDimensionalDrawing" name="fileDimensionalDrawing" {{ $multiple==true ? 'multiple' : '' }}>
                            @error('fileDimensionalDrawing') <div class="alert alert-danger"> {{ $message }}</div> @enderror
                            <a class="btn {{ $flag==0 ? 'btn-primary ' : 'btn-danger' }} " wire:loading.attr="disabled" wire:click="upload_dimensional_drawing" href="#"> Загрузить файл </a>
                        </div>
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
                <div class="col-12 py-3">
                    @if (count((array) $fileOverviewInformations) > 0)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col" class="col-6">Имя</th>
                                <th>Размер</th>
                                <th>Загружено</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fileOverviewInformations as $file_overviewInformation)
                            <tr>
                                <td>{{ $file_overviewInformation['file_name'] }}</td>
                                <td> {{ $file_overviewInformation['human_readable_size'] }}</td>
                                <td>{{ $file_overviewInformation['created_at'] }} </td>
                                <td>
                                    <button class="btn btn-success" wire:click="download({{ $file_overviewInformation['id']}})"><i class="fa fa-download"></i></button> &nbsp;<button type="button" class="btn  btn-danger" wire:click="delete({{  $file_overviewInformation['id']  }})" wire:confirm="Вы действительно хотите удалить этот каталог?"><i class="fas fa-trash"></i></button>
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
                    <div class="col-md-12 text-center">
                        <div class="form-group">
                            <label for="file_overview_information">Файл характеристики</label>
                            <input type="file" wire:model="file_overview_information" name="file_overview_information" {{ $multiple==true ? 'multiple' : '' }}>
                            @error('file_overview_information') <div class="alert alert-danger"> {{ $message }}</div> @enderror
                            <a class="btn  btn-primary  "  wire:click="upload_overview_information" href="#"> Загрузить файл </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
