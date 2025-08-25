import * as Popper from '@popperjs/core'
window.Popper = Popper
import 'bootstrap'

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Clipboard from '@ryangjchandler/alpine-clipboard'

Alpine.plugin(Clipboard)

Livewire.start()

import '../../vendor/power-components/livewire-powergrid/dist/powergrid'


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




