@extends('layouts.app')

@section('content')
<main>
         <section class="products">
            <div class="products__container container">
               <div class="breadcrumbs">
                  <ul class="breadcrumbs__list">
                     <li><a href="#">Главная</a><img src="./img/icons/arrow-right.svg" alt="стрелка"></li>
                     <li><a href="#">Каталог</a><img src="./img/icons/arrow-right.svg" alt="стрелка"></li>
                     <li><a href="#">Промышленные прямоугольные разъёмы</a><img src="./img/icons/arrow-right.svg" alt="стрелка"></li>
                     <li><span>Комплекты промышленных разъёмов</span></li>
                  </ul>
               </div>
               <div class="products__content">
                  <div class="products__title-container">
                     <h2>Комплекты промышленных разъёмов</h2>
                     <p>Комплекты промышленных разъёмов состоят из пары совместимых контактных вставок (розетки и вилки) и необходимых кожухов и кабельных вводов</p>
                  </div>
                  <div class="products__grid hide-subsequent-rows">
                     <a href="#">
                        <div class="products__item-wrapper">
                           <div>
                              <img src="./img/products/photo-5.png" alt="товар">
                           </div>
                           <div>
                              <h5>Комплекты серии HA
                              </h5>
                           </div>
                        </div>
                     </a>
                     <a href="#">
                        <div class="products__item-wrapper">
                           <div>
                              <img src="./img/products/photo-12.png" alt="товар">
                           </div>
                           <div>
                              <h5>Комплекты серии HE
                              </h5>
                           </div>
                        </div>
                     </a>
                     <a href="#">
                        <div class="products__item-wrapper">
                           <div>
                              <img src="./img/products/photo-4.png" alt="товар">
                           </div>
                           <div>
                              <h5>Комплекты серии HSB
                              </h5>
                           </div>
                        </div>
                     </a>
                     <a href="#">
                        <div class="products__item-wrapper">
                           <div>
                              <img src="./img/products/photo-14.png" alt="товар">
                           </div>
                           <div>
                              <h5>Комплекты серии HK</h5>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
      </main>
{{ Breadcrumbs::render('categories' , $data['breadcrumbs'] , $data['category']  ) }}
Категория товаров ()

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
            @foreach ($data['childrens'] as $children)


            @include('front.block.show_category' , ['children' => $children])


            @endforeach
        </div>
    </div>
</div>
Товары

<div class="album py-5 bg-body-tertiary">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

            @foreach ($data['products'] as $product)


            @include('front.block.show_product' , ['product' => $product])

            @endforeach
            {{ $data['products']->links() }}
        </div>
    </div>
</div>




@stop


@push('css')
@endpush

@push('js')

@endpush
