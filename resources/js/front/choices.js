__webpack_require__.r(__webpack_exports__);
/* harmony import */ var choices_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! choices.js */ "./node_modules/choices.js/public/assets/scripts/choices.mjs");
/* harmony import */ var choices_js_public_assets_styles_choices_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! choices.js/public/assets/styles/choices.css */ "./node_modules/choices.js/public/assets/styles/choices.css");



const selectElements = document.querySelectorAll('.filter__select')

selectElements.forEach(el => {
   const choices = new choices_js__WEBPACK_IMPORTED_MODULE_1__["default"](el, {
      searchEnabled: false,
      itemSelectText: false,
      position: "bottom",
   })
})


//# sourceURL=webpack://gulp/./src/js/libs/choices.js?