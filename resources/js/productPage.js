const favouriteLabel = document.querySelectorAll('.product-page__label')
const toggleLayoutBtn = document.querySelectorAll('.toggle__layout')

const pageSizeElArr = document.querySelectorAll('.product-page__page-count')
const changePageBtn = document.querySelector('.product-page__change-btn')
const pageNumberArr = document.querySelectorAll('.product-page__page-list > li > button')
const addCartBtnArr = document.querySelectorAll('.product-page__add-cart')
const removeFilterBtn = document.querySelector('.product-page__open-filter')
const filterLayout = document.querySelector('.product-page__filter')
const layoutElArr = document.querySelectorAll('[data-layout]')


const changeLayoutIcon = (currentBtn) => {
	const hasActiveClass = currentBtn.firstElementChild.matches('.change__img._active')

	if (!hasActiveClass) {
		(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(currentBtn.firstElementChild, '_active')
		const typeOfLayout = currentBtn.getAttribute('id')
		if (typeOfLayout === 'list-layout') {
			layoutElArr.forEach((element) => {
				(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(element, 'card-layout')
				;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(element, 'list-layout')
			})
		} else {
			layoutElArr.forEach((element) => {
				(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(element, 'list-layout')
				;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(element, 'card-layout')
			})
		}

		toggleLayoutBtn.forEach((btn) => {
			if (btn !== currentBtn) {
				(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(btn.firstElementChild, '_active')
			}
		})
	}
}

// check favourite product

favouriteLabel.forEach((item) => {
	item.addEventListener('click', () => (0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(item, '_active'))
})

// add product in cart

addCartBtnArr.forEach((btn) => {
	btn.addEventListener('click', () => {
		;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(btn, '_cart')
		if (btn.classList.contains('_cart')) {
			btn.textContent = 'В корзине'
		} else {
			btn.textContent = 'В корзину'
		}
	})
})

// change layout

toggleLayoutBtn.forEach((btn) => {
	btn.addEventListener('click', () => changeLayoutIcon(btn))
})

// change page number

const changePageNumber = () => {
	pageNumberArr.forEach((pageNumberEl) => {
		pageNumberEl.addEventListener('click', () => {
			for (let page of pageNumberArr) {
				;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(page, '_active')
			}
			(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(pageNumberEl, '_active')
		})
	})
}

changePageNumber()

// page count select

const closePagination = (e) => {
	if (!(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.isTargetElement)(changePageBtn, e.target)) {
		(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(changePageBtn, '_active')
		;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(changePageBtn?.parentElement.nextElementSibling, '_active')
	}
}

changePageBtn?.addEventListener('click', (e) => {
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(changePageBtn, '_active')
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(changePageBtn?.parentElement.nextElementSibling, '_active')
	e.stopPropagation()
})

// add css class to one and remove from all

removeFilterBtn?.addEventListener('click', () => {
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(filterLayout, '_active')
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(removeFilterBtn, '_active')
	if (removeFilterBtn.classList.contains('_active')) {
		removeFilterBtn.textContent = 'Скрыть фильтр'
	} else {
		removeFilterBtn.textContent = 'Показать фильтр'
	}
})


pageSizeElArr.forEach((el) => {
	el.addEventListener('click', (e) => {
		if (e.target.hasAttribute('data-page')) {
			const pageValue = e.target.getAttribute('data-page')
			const pageCountElValue = el.previousElementSibling.lastElementChild.firstElementChild
			if (pageValue === pageCountElValue) {
				return
			} else pageCountElValue.textContent = pageValue
		} else return
	})
})

document.addEventListener('click', (e) => {
	e.stopPropagation()
	closePagination(e)
})
