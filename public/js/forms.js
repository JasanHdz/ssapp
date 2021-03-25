/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/lib/validate.js":
/*!**************************************!*\
  !*** ./resources/js/lib/validate.js ***!
  \**************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(String(email).toLowerCase())) return 'Email no valido';
  return '';
}

function validatePassword(password) {
  if (!password.match(/^([a-zA-Z0-9]{6,})$/)) return 'Al menos 7 caracteres';
  return '';
}

function validateName(name) {
  if (/[^A-Za-z\s\ñ\é\í\ó\ú\á\Á\É\Í\Ó\Ú]+/g.test(name)) return 'Solo letras sin caracteres especiales';
  if (name.length > 44) return 'Máximo 44 caracteres';
  return '';
}

function validateIsNumber() {
  var string = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
  if (isNaN(string)) return 'Solo números';
  if (string.length < 10 || string.length > 10) return 'El número debe ser de 10 digitos';
  return '';
}

function validateAlphanumeric(string) {
  if (!/^[A-Za-z\s\ñ\é\í\ó\ú\á\Á\É\Í\Ó\Ú0-9\.]*$/g.test(string)) return 'Solo datos alphanumericos';
  if (string.length > 44) return 'Máximo 44 caracteres';
  return '';
}

var validateConfirmEmail = function validateConfirmEmail(oldPassword, password) {
  if (oldPassword !== password) return 'La contraseña no es igual a la anterior';
  return '';
};

function validationForm(input, otherValue) {
  var name = input.name,
      value = input.value;

  switch (name) {
    case 'name':
      return validateName(value);

    case 'lastName':
      return validateName(value);

    case 'secondLastName':
      return validateName(value);

    case 'phone':
      return validateIsNumber(value);

    case 'email':
      return validateEmail(value);

    case 'keyOne':
      return validateIsNumber(value);

    case 'keyTwo':
      return validateAlphanumeric(value);

    case 'email':
      return validateIsNumber(value);

    case 'street':
      return validateAlphanumeric(value);

    case 'outdoor':
      return validateIsNumber(value);

    case 'interior':
      return validateIsNumber(value);

    case 'suburb':
      return validateAlphanumeric(value);

    case 'password':
      return validatePassword(value);

    case 'password_confirmation':
      return validateConfirmEmail(otherValue, value);

    default:
      return '';
  }
}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (validationForm);

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
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!*******************************!*\
  !*** ./resources/js/forms.js ***!
  \*******************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _lib_validate__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lib/validate */ "./resources/js/lib/validate.js");


function onInput(event, otherValue) {
  var input = event.target;
  var error = (0,_lib_validate__WEBPACK_IMPORTED_MODULE_0__.default)(input, otherValue);

  if (error) {
    input.setCustomValidity(error);
    input.reportValidity();
    input.nextElementSibling.style = 'display: block;';
    input.nextElementSibling.textContent = error;
  } else {
    input.nextElementSibling.style = 'display: none;';
    input.nextElementSibling.textContent = '';
    input.setCustomValidity('');
    input.reportValidity();
  }
}

document.getElementsByName('name')[0].addEventListener('input', onInput);
document.getElementsByName('lastName')[0].addEventListener('input', onInput);
document.getElementsByName('secondLastName')[0].addEventListener('input', onInput);
document.getElementsByName('phone')[0].addEventListener('input', onInput);
document.getElementsByName('keyOne')[0].addEventListener('input', onInput);
document.getElementsByName('keyTwo')[0].addEventListener('input', onInput);
document.getElementsByName('email')[0].addEventListener('input', onInput);
document.getElementsByName('street')[0].addEventListener('input', onInput);
document.getElementsByName('outdoor')[0].addEventListener('input', onInput);
document.getElementsByName('interior')[0].addEventListener('input', onInput);
document.getElementsByName('suburb')[0].addEventListener('input', onInput);
document.getElementsByName('password')[0].addEventListener('input', onInput);
document.getElementsByName('password_confirmation')[0].addEventListener('input', function (event) {
  onInput(event, document.getElementsByName('password')[0].value);
});
})();

/******/ })()
;