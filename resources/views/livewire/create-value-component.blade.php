<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            {{-- <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$formtitle}}</h1>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div> --}}

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$formtitle}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

            <div class="modal-body">

{{ @$productTypeProperty->name }}:
{{ @$productTypeProperty->id }}

                @if(session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <form wire:keydown.enter="{{ $editform ? 'update' : 'save' }}">
                    <div class="mb-3">
                        <label for="value" class="form-label">Значение характеристики</label>
                        <input wire:model="value" type="text" class="form-control value-input @error('value') is-invalid @enderror">
                        @error('value')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                @if($editform)
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  data-dismiss="modal" >Закрыть</button>
                <button wire:click="update" type="button" class="btn btn-primary">Записать</button>
                @else
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"  data-dismiss="modal">Закрыть</button>
                <button wire:click="save" type="button" class="btn btn-primary">Сохранить</button>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
    $('#exampleModal').on('shown.bs.modal', function () {
        $('.value-input').focus();
    });
});
</script>