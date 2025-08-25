__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   addClass: () => (/* binding */ addClass),
/* harmony export */   addPadding: () => (/* binding */ addPadding),
/* harmony export */   decrementCounter: () => (/* binding */ decrementCounter),
/* harmony export */   getLog: () => (/* binding */ getLog),
/* harmony export */   isTargetElement: () => (/* binding */ isTargetElement),
/* harmony export */   removeClass: () => (/* binding */ removeClass),
/* harmony export */   removePadding: () => (/* binding */ removePadding),
/* harmony export */   toggleClass: () => (/* binding */ toggleClass)
/* harmony export */ });
const getLog = (text, value) => {
	console.log(`${text} ${value}`)
} 

const addClass = (element, className) => {
	element?.classList.add(className)
}

const removeClass = (element, className) => {
	element?.classList.remove(className)
}

const toggleClass = (element, className) => {
	element?.classList.toggle(className)
}

const isTargetElement = (element, eventTarget) => {
	return element?.contains(eventTarget) 		
}

const decrementCounter = (initialValue, renderValueEl) => {
	if (initialValue > 1) {
		initialValue--

	}
	renderValueEl.textContent = initialValue
	return initialValue
}

const addPadding = (htmlElem) => {
	const htmlElemPadding = parseInt(window.getComputedStyle(htmlElem).paddingRight, 10)
	const scrollBarWidth = window.innerWidth - document.body.offsetWidth
	const totalPadding = scrollBarWidth + htmlElemPadding + 'px'
	htmlElem.style.paddingRight = totalPadding
}

const removePadding = (htmlElem, initialPadding) => {
	htmlElem.style.paddingRight = initialPadding
}


//# sourceURL=webpack://gulp/./src/js/files/functions.js?