__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _files_functions_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../files/functions.js */ "./src/js/files/functions.js");


const headerBottom = document.querySelector('.header__bottom')
const catalogueBtn = document.querySelector('.header__catalogue-btn')
const catalogueLayer = document.querySelector('.catalogue__layer')

const toggleMenu = () => {
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(catalogueBtn.firstElementChild, '_active')
	;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.toggleClass)(catalogueLayer, '_active')
}

const closeMenuOverlay = (e) => {
	if (!(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.isTargetElement)(catalogueLayer, e.target) && !(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.isTargetElement)(catalogueBtn, e.target)) {
		(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(catalogueBtn.firstElementChild, '_active')
		;(0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(catalogueLayer, '_active')
	}
}

const scrollFixedHeader = () => {
   if (window.pageYOffset > 72) {
      (0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.addClass)(headerBottom, '_scroll')
   } else {
      (0,_files_functions_js__WEBPACK_IMPORTED_MODULE_0__.removeClass)(headerBottom, '_scroll')
   }
}

catalogueBtn.addEventListener('click', toggleMenu)

document.addEventListener('click', (e) => {
	closeMenuOverlay(e)
})

window.addEventListener('scroll', scrollFixedHeader)


//# sourceURL=webpack://gulp/./src/js/libs/header.js?