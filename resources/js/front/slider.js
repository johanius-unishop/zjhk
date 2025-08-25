__webpack_require__.r(__webpack_exports__);
/* harmony import */ var swiper__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! swiper */ "./node_modules/swiper/swiper.mjs");
/* harmony import */ var swiper_modules__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! swiper/modules */ "./node_modules/swiper/modules/index.mjs");
/* harmony import */ var swiper_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! swiper/css */ "./node_modules/swiper/swiper.css");
/* harmony import */ var swiper_css_navigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! swiper/css/navigation */ "./node_modules/swiper/modules/navigation.css");
/* harmony import */ var swiper_css_pagination__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! swiper/css/pagination */ "./node_modules/swiper/modules/pagination.css");







const swiper1 = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.banner-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Pagination, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Autoplay],
	loop: true,
	grabCursor: true,
	autoplay: {
		delay: 2500,
		disableOnInteraction: false
	},
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
		renderBullet: function (index, className) {
			return '<span class="' + className + '">' + '</span>'
		}
	}
})

const swiperProduct = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.product-page-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Pagination],
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

const sliderNews = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.news-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.news',
		prevEl: '.swiper-button-prev.news'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 2,
			spaceBetween: 8
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
})

const articles = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.articles-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.articles',
		prevEl: '.swiper-button-prev.articles'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 2,
			spaceBetween: 8
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
})

const docs = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.documents-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.documents',
		prevEl: '.swiper-button-prev.documents'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 2,
			spaceBetween: 8
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
})

const brands = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.brands-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.brands',
		prevEl: '.swiper-button-prev.brands'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		680: {
			slidesPerView: 4,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 6,
			spaceBetween: 20
		}
	}
})

const sliderOpt = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.opt-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.opt',
		prevEl: '.swiper-button-prev.opt'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 2,
			spaceBetween: 8
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 4,
			spaceBetween: 20
		}
	}
})

const swiper = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.thumbSwiper', {
	loop: true,
	spaceBetween: 10,
	freeMode: true,
	watchSlidesProgress: true,
	slidesPerView: 4,
	breakpoints: {
		992: {
			slidesPerView: 5,
			direction: 'vertical'
		}
	}
})

const swiper2 = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.photoSwiper', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Thumbs, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Pagination],
	loop: true,
	spaceBetween: 10,
	navigation: {
		nextEl: '.swiper-button-next.prod',
		prevEl: '.swiper-button-prev.prod'
	},
	thumbs: {
		swiper: swiper
	},
	pagination: {
		el: '.swiper-pagination-thumb',
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

const sliderTestimonial = new swiper__WEBPACK_IMPORTED_MODULE_0__["default"]('.testimonial-slider', {
	modules: [swiper_modules__WEBPACK_IMPORTED_MODULE_1__.EffectFade, swiper_modules__WEBPACK_IMPORTED_MODULE_1__.Navigation],
	navigation: {
		nextEl: '.swiper-button-next.testimonial',
		prevEl: '.swiper-button-prev.testimonial'
	},
	loop: true,
	breakpoints: {
		360: {
			slidesPerView: 2,
			spaceBetween: 8
		},
		680: {
			slidesPerView: 3,
			spaceBetween: 20
		},
		992: {
			slidesPerView: 8,
			spaceBetween: 20,
			slidesPerGroup: 4
		}
	}
})

console.log('Slider has been connected...')


//# sourceURL=webpack://gulp/./src/js/libs/slider.js?