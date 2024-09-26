<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-12">
            <div class=" py-3 form-row justify-content-center"> Тип товара - <b>{{ $productType->name }}</b></div>
            <table class="table table-striped">
                <thead>
                    <th>id</th>
                    <th>Характеристика</th>
                    <th>Значение</th>
                </thead>
                @foreach ($props as $prop)
                <tr>
                    <td>{{ $prop->id }} </td>
                    <td> {{ $prop->name }}</td>
                    <td><div class="test" id ="{{ $prop->id }}"></div>

                        <button type="button" wire:click="editProperty({{$prop->id}})"  class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button type="button" wire:click="deleteProperty({{$prop->id}})"  class="btn btn-danger"><i class="fas fa-trash"></i></button>

                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить </button></div>
        </div>
    </div>


</div>
@script
<script>
    $wire.on('edit-property', (event ) => {
        // let refreshPosts = event.detail.rowId;
        console.log('test ' + event   );
        console.log(JSON.stringify(event));
        alert('test ' + event.rowId   );
        // let refreshPosts = event.detail.rowId;

        // alert('test ' + refreshPosts );
    });
</script>
@endscript
