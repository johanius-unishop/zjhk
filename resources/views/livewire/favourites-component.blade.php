<div>
    {{-- The whole world belongs to you. --}}

    favourites (компонент)




    <div class="  mx-auto">
        @if(Cart::instance('favourites')->count() > 0)
        <div class="  p-6 float-start">
            <button wire:click="clearCart" class="btn btn-danger">
                Очистить избранное
            </button>
        </div>
        @endif


        <div class="bg-white shadow-md rounded my-6">
            @if(Cart::instance('favourites')->count() > 0)
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Наименование</th>

                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Цена</th>
                         <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Действия </th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach($cart_items as $product ) --}}
                    @foreach(Cart::instance('favourites')->content() as $item)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->model->name  }} </td>

                        <td class="py-4 px-6 border-b border-grey-light">{{ $item->price }}</td>

                        <td class="py-4 px-6 border-b border-grey-light">
                            <a wire:click="removeFromCart({{ $item->id }})" class="text-red-600 font-bold py-1 px-3 rounded   bg-red  hover:bg-red-dark cursor-pointer">Удалить</a>
                        </td>
                    </tr>
                    @endforeach


                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light"> </td>
                        <td class="py-4 px-6 border-b border-grey-light">Итого </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $cart_total }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" p-6 float-end">
                <button wire:click="moveToCart()" class="btn btn-success">
                    Перенести в корзину и оформить заказ
                </button>
            </div>
            @else
            <div class="text-center w-full border-collapse p-6">
                <span class="text-lg">У вас нет товаров в избранном!</span>
            </div>
            @endif
        </div>
    </div>
</div>
