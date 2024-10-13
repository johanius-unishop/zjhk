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
                    <th>Действия</th>
                </thead>
                @foreach ($props as $prop)
                <tr>
                    <td>{{ $prop->id }}</td>
                    <td>{{ $prop->name }}</td>
                    <td>
                        <select class="form-control" id="select_{{ $prop->id }}">
                            <option value="0">Выберите вариант</option>
                        </select>
                     </td>
                    <td>
                        <button type="button" wire:click="editProperty({{$prop->id}})" class="btn btn-success"><i class="fas fa-edit"></i></button>
                        <button type="button" wire:click="deleteProperty({{$prop->id}})" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class=" py-3 form-row justify-content-center">
                <button wire:click="save" type="button" class="btn btn-primary" {{ $isDisabled==true ? 'disabled' : ''
                }}>Сохранить </button>
            </div>
        </div>
    </div>


    @foreach ($props as $prop)

    @push('js')
    <script>
        $(document).ready(function() {
            $('#select_{{ $prop->id }}').select2({
                tags: true
                , ajax: {
                    url: "/api/v1/admin/property_list"
                    , dataType: 'json'
                    , delay: 250
                    , data: function(params) {
                        return {
                            productType: {
                                {
                                    $productType - > id
                                }
                            }
                            , propertyId: {
                                {
                                    $prop - > id
                                }
                            }
                            , productId: {
                                {
                                    $product - > id
                                }
                            }
                            , q: params.term, // search term
                            page: params.page
                        };
                    }
                    , processResults: function(data, params) {
                        params.page = params.page || 1;
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.value
                                    , id: item.id,
                                    // position: item.position,
                                }
                            })
                            , pagination: {
                                more: (params.page * 30) < data.total_count
                            }
                        };
                    }
                    , cache: false
                }
                , placeholder: 'Select an option'
            , });
            // $('#select_{{ $prop->id }}').on('change', function(e) {
            //     alert("Changed: " + this.id);
            // });

            // Fetch the preselected item, and add to the control
            // var studentSelect_{{$prop->id}} = $('#select_{{ $prop->id }}');
            $.ajax({
                type: 'GET'
                , url: '/api/v1/admin/property_list/by_id?property_id={{ $prop->id }}&product_id={{ $product->id }}'

            }).then(function(data) {
                // create the option and append to Select2
                var option = new Option(data.value, data.id, true, true);
                $('#select_{{ $prop->id }}').append(option).trigger('change');
                // manually trigger the `select2:select` event
                $('#select_{{ $prop->id }}').trigger({
                    type: 'select2:select'
                    , params: {
                        data: data
                    }
                });
            });




            $('#select_{{ $prop->id }}').on('select2:select', function(e) {
                event.preventDefault();
                var data = e.params.data;
                // alert("Changed: " + this.id);
                console.log(data);


                $.ajax({
                    url: "/api/v1/admin/product_property_update"
                    , method: 'POST'
                    , dataType: 'json'
                    , data: {
                        "_token": "{{ csrf_token() }}"
                        , "product_id": "{{   $product->id }}"
                        , "product_type_property_id": {
                            {
                                $prop - > id
                            }
                        }
                        , "product_type_property_value": data.text

                    },

                    success: function(response) {
                        // $(form).trigger("reset");
                        // alert(response.success);

                        this.dispatch('refresh');
                        console.log('response');
                        console.log(response);
                    }
                    , error: function(response) {}
                });
            });


        });

    </script>
    @endpush
    @endforeach
</div>
