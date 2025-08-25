__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");
/* harmony import */ var swiper_modules__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/modules */ "./node_modules/swiper/modules/index.mjs");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation.css");
/* harmony import */ var swiper_css_pagination__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! swiper/css/pagination */ "./node_modules/swiper/modules/pagination.css");







const swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.thumbPhoto', {
	loop: true,
	spaceBetween: 20,
	freeMode: true,
	watchSlidesProgress: true,
	slidesPerView: 6,
	breakpoints: {
		360: {
			spaceBetween: 10,
			direction: 'horizontal',
			slidesPerView: 6,
		},
		641: {
			direction: 'vertical',
			slidesPerView: 6,
			spaceBetween: 20
		},
		992: {
			direction: 'vertical',
			slidesPerView: 7,
			spaceBetween: 20
		}
	}
})

const swiper2 = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.mainSwiper', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Thumbs],
	loop: true,
	spaceBetween: 200,
	navigation: {
		nextEl: '.swiper-button-next.photo',
		prevEl: '.swiper-button-prev.photo'
	},
	thumbs: {
		swiper: swiper
	},
	pagination: {
		clickable: true,
		renderBullet: function (index, className) {
			return '<span class="' + className + '">' + '</span>'
		}
	},
	breakpoints: {
		360: {
			pagination: {
				enabled: true
			}
		},
		575: {
			pagination: {
				enabled: false
			}
		}
	}
})


//# sourceURL=webpack://gulp/./src/js/libs/photoView.js?