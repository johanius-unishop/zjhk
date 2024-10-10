<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row">
        <div class="col-12 ">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Добавить новое значение
            </button>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Значение </th>
                <th scope="col">Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach((object) $values as $product)
            <tr>
                <th scope="row">{{$loop->index+1}}</th>
                <td>{{$product->value }}</td>

                <td>
                    <button @click="$dispatch('edit-mode',{id:{{$product->id}}})" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-edit"></i></button>
                    <a class="btn btn-danger " wire:confirm="Вы действительно хотите удалить эту запись?" wire:click="delete({{ $product->id }})" href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <livewire:create-value-component :productTypeProperty="$productTypeProperty" >
</div>





<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('refresh-products', (event) => {
            // alert('product created/updated')
            // $this->dispatch('toast', message: 'Запись успешно создана (обновлена).', notify: 'success');

            var myModalEl = document.querySelector('#exampleModal')

            $("#exampleModal").modal('hide');
            this.dispatch('reset-modal');
            // var modal = bootstrap.Modal.getOrCreateInstance(myModalEl)
            // setTimeout(() => {
            //     // modal.hide();
            //     myModalEl.modal('hide') ;
            //     @this.dispatch('reset-modal');
            // }, 5000);
        })
        var mymodal = document.getElementById('exampleModal')
        mymodal.addEventListener('hidden.bs.modal', (event) => {
            @this.dispatch('reset-modal');
        })
    })

</script>
