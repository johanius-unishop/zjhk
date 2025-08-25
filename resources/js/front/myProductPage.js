import Swiper from 'swiper'
import { EffectFade, Pagination, Navigation, Autoplay, Thumbs } from 'swiper/modules'

import 'swiper/css'
import 'swiper/css/navigation'
import 'swiper/css/pagination'


const swiperProduct = new Swiper('.product-page-slider', {
	modules: [EffectFade, Pagination],
	loop: false,
	grabCursor: false,
	pagination: {
		el: '.swiper-pagination-product',
		clickable: true,
		renderBullet: function (index, className) {
			return '<span class="' + className + '">' + '</span>'
		}
	}
})
