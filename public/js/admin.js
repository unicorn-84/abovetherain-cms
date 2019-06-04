/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/admin.js":
/*!*******************************!*\
  !*** ./resources/js/admin.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

window.tinymce_setup_callback = function (editor) {
  var tinymce = editor;
  tinymce.settings.language_url = '/js/tinymce/ru.js';
  tinymce.settings.language = 'ru';
  tinymce.settings.min_height = 800;
  tinymce.settings.toolbar_drawer = 'sliding';
  tinymce.settings.toolbar = 'undo redo | styleselect | formatselect | fontselect | fontsizeselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | code';
  tinymce.settings.formats = {
    'w-100': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'w-100'
    },
    'w-50': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'w-50'
    },
    'w-auto': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'w-auto'
    },
    'img-fluid': {
      selector: 'img',
      classes: 'img-fluid'
    },
    'img-thumbnail': {
      selector: 'img',
      classes: 'img-thumbnail'
    },
    'mt-0': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mt-0'
    },
    'mt-2': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mt-2'
    },
    'mt-3': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mt-3'
    },
    'mb-0': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mb-0'
    },
    'mb-2': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mb-2'
    },
    'mb-3': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'mb-3'
    },
    'p-2': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'p-2'
    },
    'p-3': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'p-3'
    },
    'p-4': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'p-4'
    },
    'text-reset': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'text-reset'
    },
    'text-decoration-none': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'text-decoration-none'
    },
    'float-left': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'float-left'
    },
    'float-right': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'float-right'
    },
    'float-none': {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'float-none'
    },
    clearfix: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
      classes: 'clearfix'
    }
  };
  tinymce.settings.style_formats = [{
    title: 'Bootstrap 4 classes',
    format: 'none'
  }, {
    title: 'w-100',
    format: 'w-100'
  }, {
    title: 'w-50',
    format: 'w-50'
  }, {
    title: 'w-auto',
    format: 'w-auto'
  }, {
    title: 'img-fluid',
    format: 'img-fluid'
  }, {
    title: 'img-thumbnail',
    format: 'img-thumbnail'
  }, {
    title: 'mt-0',
    format: 'mt-0'
  }, {
    title: 'mt-2',
    format: 'mt-2'
  }, {
    title: 'mt-3',
    format: 'mt-3'
  }, {
    title: 'mb-0',
    format: 'mb-0'
  }, {
    title: 'mb-2',
    format: 'mb-2'
  }, {
    title: 'mb-3',
    format: 'mb-3'
  }, {
    title: 'p-2',
    format: 'p-2'
  }, {
    title: 'p-3',
    format: 'p-3'
  }, {
    title: 'p-4',
    format: 'p-4'
  }, {
    title: 'text-reset',
    format: 'text-reset'
  }, {
    title: 'text-decoration-none',
    format: 'text-decoration-none'
  }, {
    title: 'float-left',
    format: 'float-left'
  }, {
    title: 'float-right',
    format: 'float-right'
  }, {
    title: 'float-none',
    format: 'float-none'
  }, {
    title: 'clearfix',
    format: 'clearfix'
  }, {
    title: 'Сбросить стили',
    format: 'removeformat'
  }];
  tinymce.settings.fontsize_formats = '8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 56pt 72pt';
  return tinymce;
};

/***/ }),

/***/ 1:
/*!*************************************!*\
  !*** multi ./resources/js/admin.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\unicorn\projects\abovetherain-cms\resources\js\admin.js */"./resources/js/admin.js");


/***/ })

/******/ });