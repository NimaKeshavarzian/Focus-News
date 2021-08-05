/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./js/changeElementClass.js":
/*!**********************************!*\
  !*** ./js/changeElementClass.js ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"showMenuToggle\": () => (/* binding */ showMenuToggle)\n/* harmony export */ });\nvar menuElem = document.querySelector(\"#menu\");\r\n\r\nfunction showMenuToggle() {\r\n    toggleClass(menuElem, \"menuToggle\");\r\n    toggleClass(menuElem, \"hidden\");\r\n}\r\n\r\nfunction toggleClass(elem, className) {\r\n    elem.classList.toggle(className);\r\n}\r\n\r\n\n\n//# sourceURL=webpack://focus/./js/changeElementClass.js?");

/***/ }),

/***/ "./js/index.js":
/*!*********************!*\
  !*** ./js/index.js ***!
  \*********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _style_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../style.css */ \"./style.css\");\n/* harmony import */ var _style_css__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_style_css__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _changeElementClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./changeElementClass */ \"./js/changeElementClass.js\");\n\r\n\r\n\r\n// Show Menu\r\nvar menuIcon = document.querySelector(\"#menuIcon\");\r\nmenuIcon.addEventListener(\"click\", _changeElementClass__WEBPACK_IMPORTED_MODULE_1__.showMenuToggle)\n\n//# sourceURL=webpack://focus/./js/index.js?");

/***/ }),

/***/ "./style.css":
/*!*******************!*\
  !*** ./style.css ***!
  \*******************/
/***/ (() => {

eval("throw new Error(\"Module build failed (from ./node_modules/css-loader/dist/cjs.js):\\nCssSyntaxError\\n\\n(2:7) C:\\\\wamp64\\\\www\\\\My Codes\\\\Focus (News Theme)\\\\style.css Unknown word\\n\\n \\u001b[90m 1 | \\u001b[39m\\n\\u001b[1m\\u001b[31m>\\u001b[39m\\u001b[22m\\u001b[90m 2 | \\u001b[39m      import API from \\u001b[32m\\\"!./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js\\\"\\u001b[39m\\u001b[33m;\\u001b[39m\\n \\u001b[90m   | \\u001b[39m      \\u001b[1m\\u001b[31m^\\u001b[39m\\u001b[22m\\n \\u001b[90m 3 | \\u001b[39m      import domAPI from \\u001b[32m\\\"!./node_modules/style-loader/dist/runtime/styleDomAPI.js\\\"\\u001b[39m\\u001b[33m;\\u001b[39m\\n \\u001b[90m 4 | \\u001b[39m      import insertFn from \\u001b[32m\\\"!./node_modules/style-loader/dist/runtime/insertBySelector.js\\\"\\u001b[39m\\u001b[33m;\\u001b[39m\\n\");\n\n//# sourceURL=webpack://focus/./style.css?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./js/index.js");
/******/ 	
/******/ })()
;