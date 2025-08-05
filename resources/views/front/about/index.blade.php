@extends('layouts.app')

@section('title', 'О компании')

@section('content')
<main>
   <section class="about-company">
      <div class="about-company__container container">
         @include('components.breadcrumbs')
         <div class="about-company__content">
            <h2 class="about-company__title">О компании</h2>
            <div class="about-company__img-container">
               <img src="/images/content/factory.jpg" alt="компания">
               <div class="about-company__text-content">
                  <p class="about-company__text">Обеспечить российские предприятия качественной электротехнической
                     продукцией в кратчайшие сроки</p>
               </div>
            </div>
            <div class="about-company__quote-container">
               <div class="about-company__quote-text">Одна из ключевых целей нашей компании — оперативный вывод
                  на российский рынок доступной электротехнической продукции высокого качества, произведённой в
                  Китае</div>
            </div>
            <div class="about-company__author-container">
               <p>Евгений Крутень,</p>
               <p>генеральный директор ООО «КевТек»</p>
            </div>
            <div class="about-company__offer-container">
               <h2 class="about-company__offer-title">Мы предлагаем</h2>
               <div class="about-company__offer-wrapper">
                  <div class="about-company__offer-item">
                     <div class="about-company__offer-top">
                        <img src="images/icons/warranty.svg" alt="безупречное качество">
                        <h2>Безупречное качество</h2>
                     </div>
                     <p>Сотрудничаем только с крупными заводами, которые много лет специализируются на выпуске
                        промышленной продукции и успешно поставляют товарыв Европу, Корею и Японию.
                        С представителями заводов‑партнёров мы поддерживаем дружеские, доверительные отношения
                     </p>
                  </div>
                  <div class="about-company__offer-item">
                     <div class="about-company__offer-top">
                        <img src="images/icons/goal.svg" alt="тщательный отбор">
                        <h2>Тщательный отбор</h2>
                     </div>
                     <p>Мы гарантируем высокое качество всех товаров, представленных на нашем сайте. Наша
                        компания
                        не стремится снизить стоимость продукции за счёт использования материалов сомнительного
                        качества</p>
                  </div>
                  <div class="about-company__offer-item">
                     <div class="about-company__offer-top">
                        <img src="images/icons/grow.svg" alt="устойчивое развитие">
                        <h2>Устойчивое развитие</h2>
                     </div>
                     <p>Наша компания постоянно работает над расширением ассортимента продукции и увеличением
                        складских запасов, чтобы обеспечить своевременную поставку товаров нашим клиентам</p>
                  </div>
                  <div class="about-company__offer-item">
                     <div class="about-company__offer-top">
                        <img src="images/icons/deal.svg" alt="продуктивное сотрудничество">
                        <h2>Продуктивное сотрудничество</h2>
                     </div>
                     <p>Ответим на вопросы, проведём техническую консультацию и поможем выбрать продукцию,
                        которая наилучшим образом соответствует потребностям вашей компании</p>
                  </div>
               </div>
               <div class="about-company__btn-wrapper">
                  <a href="#">Перейти в каталог</a>
                  <a href="#">Написать нам</a>
                  <a href="#">Вопрос-Ответ</a>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
@endsection

@section('css')


@stop

@section('scripts')
@if($errors->has('email') || $errors->has('password'))

<script>
   $(function() {
      $('#loginModal').modal({
         show: true
      });
   });
</script>
@endif
@stop
