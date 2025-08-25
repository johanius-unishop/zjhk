import * as Popper from '@popperjs/core'
window.Popper = Popper
import 'bootstrap'

import '../../vendor/power-components/livewire-powergrid/dist/powergrid'


import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', function () {
    const swiperProduct = new Swiper('.product-page-slider', {
        modules: [Swiper.modules.EffectFade, Swiper.modules.Pagination],
        loop: false,
        grabCursor: false,
        pagination: {
            el: '.swiper-pagination-product',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + '</span>'
            }
        }
    });
});


