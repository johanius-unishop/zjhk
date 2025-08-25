__webpack_require__.r(__webpack_exports__);
const roomFilterInputs = document.querySelectorAll('[data-room-filter]')

const inputHandler = (targetInput, element) => {
   element.textContent = targetInput.value
}

if (roomFilterInputs.length > 0) {
   roomFilterInputs.forEach(input => {
      input.addEventListener('input', ({ target }) => {

         const targetElement = input.previousSibling.previousSibling.firstElementChild;

         if (targetElement.hasAttribute('data-input-value')) {
            inputHandler(target, targetElement);
         }
      })
   })
}


//# sourceURL=webpack://gulp/./src/js/libs/inputRange.js?