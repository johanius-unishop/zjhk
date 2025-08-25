__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _files_functions_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../files/functions.js */ "./src/js/files/functions.js");


const menuBtn = document.querySelector('.mobile__side-btn')
const mobileMenu = document.querySelector('#mobile__side')
const closeBtn = document.querySelector('.mobile__side-right').firstElementChild
const body = document.body
const initialPadding = window.getComputedStyle(body).paddingRight

const closeMenuOverlay = (e) => {
	if (
		(!(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.isTargetElement)(mobileMenu.firstElementChild, e.target) && !(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.isTargetElement)(menuBtn, e.target) && mobileMenu.classList.contains('_active')) ||
		e.target.hasAttribute('data-link') ||
		e.target.parentElement.hasAttribute('data-link')
	) {
		(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(mobileMenu, '_active')
		;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removePadding)(body, initialPadding)
		body.style.overflowY = 'auto'	
	}
}

menuBtn.addEventListener('click', () => {
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(mobileMenu, '_active')
	body.style.overflowY = 'hidden'
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addPadding)(body)
})

closeBtn.addEventListener('click', () => {
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(mobileMenu, '_active')
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removePadding)(body, initialPadding)
	body.style.overflowY = 'auto'
})

document.addEventListener('click', (e) => {
	e.stopPropagation()
	closeMenuOverlay(e)
})

console.log('Header menu has been connected...')


//# sourceURL=webpack://gulp/./src/js/libs/headerMobile.js?