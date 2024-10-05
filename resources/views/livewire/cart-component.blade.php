<div>
    {{-- The whole world belongs to you. --}}

    Корзина товаров (компонент)




    <div class="w-2/3 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            @if(count($products) > 0)
            <table class="text-left w-full border-collapse">
                <thead>
                    <tr>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Наименование</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Кол-во</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Цена</th>
                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Действия </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">{{ $product->name }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $product->price }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $product->price }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                            <a wire:click="removeFromCart({{ $product->id }})" class="text-green-600 font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark cursor-pointer">Remove</a>
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
            <div class="text-right w-full p-6">
                <button wire:click="checkout()" class="btn btn-success">
                    Оформить заказ
                </button>
            </div>
            @else
            <div class="text-center w-full border-collapse p-6">
                <span class="text-lg">Ваша корзина пуста!</span>
            </div>
            @endif
        </div>
    </div>
</div>
