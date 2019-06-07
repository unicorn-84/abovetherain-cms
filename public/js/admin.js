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

try {
  var assetsPath = document.querySelector('meta[name="assets-path"]').getAttribute('content');

  window.tinymce_setup_callback = function (editor) {
    var tinymce = editor;
    tinymce.remove('textarea.richTextBox'); // tinymce.settings.skin = 'voyager';
    // tinymce.settings.skin_url = `${assetsPath}?path=js/skins/voyager`;

    return tinymce;
  };

  var tinymceBase = document.querySelectorAll('.tinymce_base');
  var tinymceFull = document.querySelectorAll('.tinymce_full');
  var bootstrap4Formats = {
    // Заголовки
    bootH1: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span',
      styles: {
        'font-size': '2.5rem',
        'margin-bottom': '0.5rem',
        'font-weight': '500',
        'line-height': '1.2'
      }
    },
    bootH2: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'h2'
    },
    bootH3: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'h3'
    },
    bootH4: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'h4'
    },
    bootH5: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'h5'
    },
    bootH6: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'h6'
    },
    // Дисплеи
    bootD1: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'display-1'
    },
    bootD2: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'display-2'
    },
    bootD3: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'display-3'
    },
    bootD4: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'display-4'
    },
    // Lead
    bootLead: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'lead'
    },
    // Small
    bootSmall: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'small'
    },
    // Images
    bootResponsive: {
      selector: 'img',
      classes: 'img-fluid'
    },
    bootThumbnail: {
      selector: 'img',
      classes: 'img-thumbnail'
    },
    // Badges
    bootPrimaryBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-primary'
    },
    bootSecondaryBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-secondary'
    },
    bootSuccessBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-success'
    },
    bootDangerBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-danger'
    },
    bootWarningBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-warning'
    },
    bootInfoBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-info'
    },
    bootLightBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-light'
    },
    bootDarkBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-dark'
    },
    bootPrimaryPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-primary badge-pill'
    },
    bootSecondaryPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-secondary badge-pill'
    },
    bootSuccessPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-success badge-pill'
    },
    bootDangerPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-danger badge-pill'
    },
    bootWarningPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-warning badge-pill'
    },
    bootInfoPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-info badge-pill'
    },
    bootLightPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-light badge-pill'
    },
    bootDarkPillBadge: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'badge badge-dark badge-pill'
    },
    // Кнопки
    bootPrimaryButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-primary'
    },
    bootSecondaryButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-secondary'
    },
    bootSuccessButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-success'
    },
    bootDangerButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-danger'
    },
    bootWarningButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-warning'
    },
    bootInfoButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-info'
    },
    bootLightButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-light'
    },
    bootDarkButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-dark'
    },
    bootPrimaryOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-primary'
    },
    bootSecondaryOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-secondary'
    },
    bootSuccessOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-success'
    },
    bootDangerOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-danger'
    },
    bootWarningOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-warning'
    },
    bootInfoOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-info'
    },
    bootLightOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-light'
    },
    bootDarkOutlineButton: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'btn btn-outline-dark'
    },
    // Clearfix
    bootClearfix: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'clearfix'
    },
    // Floats
    bootFloatLeft: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'float-left'
    },
    bootFloatRight: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'float-right'
    },
    bootFloatNone: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'float-none'
    },
    // Размеры
    bootW25: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'w-25'
    },
    bootW50: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'w-50'
    },
    bootW75: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'w-75'
    },
    bootW100: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'w-100'
    },
    bootWAuto: {
      selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,span,a,input,label,button',
      classes: 'w-auto'
    }
  };
  var styleFormats = [{
    title: 'Типографика',
    items: [{
      title: 'Headings классы',
      items: [{
        title: '.h1',
        format: 'bootH1'
      }, {
        title: '.h2',
        format: 'bootH2'
      }, {
        title: '.h3',
        format: 'bootH3'
      }, {
        title: '.h4',
        format: 'bootH4'
      }, {
        title: '.h5',
        format: 'bootH5'
      }, {
        title: '.h6',
        format: 'bootH6'
      }]
    }, {
      title: 'Display классы',
      items: [{
        title: '.display-1',
        format: 'bootD1'
      }, {
        title: '.display-2',
        format: 'bootD2'
      }, {
        title: '.display-3',
        format: 'bootD3'
      }, {
        title: '.display-4',
        format: 'bootD4'
      }]
    }, {
      title: '.lead',
      format: 'bootLead'
    }, {
      title: '.small',
      format: 'bootSmall'
    }]
  }, {
    title: 'Изображение',
    items: [{
      title: '.img-fluid',
      format: 'bootResponsive'
    }, {
      title: '.img-thumbnail',
      format: 'bootThumbnail'
    }]
  }, {
    title: 'Компоненты',
    items: [{
      title: 'Badges классы',
      items: [{
        title: 'Обычные',
        items: [{
          title: 'Главный',
          format: 'bootPrimaryBadge'
        }, {
          title: 'Вторичный',
          format: 'bootSecondaryBadge'
        }, {
          title: 'Успех',
          format: 'bootSuccessBadge'
        }, {
          title: 'Опасность',
          format: 'bootDangerBadge'
        }, {
          title: 'Предупреждение',
          format: 'bootWarningBadge'
        }, {
          title: 'Инфо',
          format: 'bootInfoBadge'
        }, {
          title: 'Светлый',
          format: 'bootLightBadge'
        }, {
          title: 'Темный',
          format: 'bootDarkBadge'
        }]
      }, {
        title: 'Пилюли(подушки)',
        items: [{
          title: 'Главный',
          format: 'bootPrimaryPillBadge'
        }, {
          title: 'Вторичный',
          format: 'bootSecondaryPillBadge'
        }, {
          title: 'Успех',
          format: 'bootSuccessPillBadge'
        }, {
          title: 'Опасность',
          format: 'bootDangerPillBadge'
        }, {
          title: 'Предупреждение',
          format: 'bootWarningPillBadge'
        }, {
          title: 'Инфо',
          format: 'bootInfoPillBadge'
        }, {
          title: 'Светлый',
          format: 'bootLightPillBadge'
        }, {
          title: 'Темный',
          format: 'bootDarkPillBadge'
        }]
      }]
    }, {
      title: 'Buttons классы',
      items: [{
        title: 'Обычные',
        items: [{
          title: 'Главный',
          format: 'bootPrimaryButton'
        }, {
          title: 'Вторичный',
          format: 'bootSecondaryButton'
        }, {
          title: 'Успех',
          format: 'bootSuccessButton'
        }, {
          title: 'Опасность',
          format: 'bootDangerButton'
        }, {
          title: 'Предупреждение',
          format: 'bootWarningButton'
        }, {
          title: 'Инфо',
          format: 'bootInfoButton'
        }, {
          title: 'Светлый',
          format: 'bootLightButton'
        }, {
          title: 'Темный',
          format: 'bootDarkButton'
        }]
      }, {
        title: 'Контурные',
        items: [{
          title: 'Главный',
          format: 'bootPrimaryOutlineButton'
        }, {
          title: 'Вторичный',
          format: 'bootSecondaryOutlineButton'
        }, {
          title: 'Успех',
          format: 'bootSuccessOutlineButton'
        }, {
          title: 'Опасность',
          format: 'bootDangerOutlineButton'
        }, {
          title: 'Предупреждение',
          format: 'bootWarningOutlineButton'
        }, {
          title: 'Инфо',
          format: 'bootInfoOutlineButton'
        }, {
          title: 'Светлый',
          format: 'bootLightOutlineButton'
        }, {
          title: 'Темный',
          format: 'bootDarkOutlineButton'
        }]
      }]
    }]
  }, {
    title: 'Утилиты',
    items: [{
      title: 'Clearfix',
      format: 'bootClearfix'
    }, {
      title: 'Floats',
      items: [{
        title: 'Left',
        format: 'bootFloatLeft'
      }, {
        title: 'Right',
        format: 'bootFloatRight'
      }, {
        title: 'None',
        format: 'bootFloatNone'
      }]
    }, {
      title: 'Размеры',
      items: [{
        title: 'Ширина 25%',
        format: 'bootW25'
      }, {
        title: 'Ширина 50%',
        format: 'bootW50'
      }, {
        title: 'Ширина 75%',
        format: 'bootW75'
      }, {
        title: 'Ширина 100%',
        format: 'bootW100'
      }, {
        title: 'Ширина auto',
        format: 'bootWAuto'
      }]
    }]
  }];

  if (tinymceBase.length > 0) {
    window.tinymce.init({
      selector: '.tinymce_base',
      language_url: '/js/tinymce/ru.js',
      language: 'ru',
      content_css: '/css/main.css',
      plugins: 'link, code, textcolor, lists',
      formats: bootstrap4Formats,
      style_formats: styleFormats,
      skin: 'voyager',
      skin_url: "".concat(assetsPath, "?path=js/skins/voyager"),
      convert_urls: false,
      extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
      toolbar1: 'undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist | link | removeformat | code ',
      content_style: 'body {padding: 1rem; background-color: #fafafa;}'
    });
  }

  if (tinymceFull.length > 0) {
    window.tinymce.init({
      selector: '.tinymce_full',
      language_url: '/js/tinymce/ru.js',
      language: 'ru',
      skin: 'voyager',
      skin_url: "".concat(assetsPath, "?path=js/skins/voyager"),
      content_css: '/css/main.css',
      plugins: 'link, image, code, table, textcolor, lists',
      min_height: 1000,
      resize: 'vertical',
      file_browser_callback: function file_browser_callback(fieldName, url, type, win) {
        if (type === 'image') {
          $('#upload_file').trigger('click');
        }
      },
      font_formats: 'Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Fira Sans=fira sans,sans-serif;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats',
      convert_urls: false,
      image_caption: true,
      image_title: true,
      extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
      formats: bootstrap4Formats,
      style_formats: styleFormats,
      toolbar1: 'undo redo | styleselect | bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table | removeformat | code ',
      toolbar2: 'fontselect |  fontsizeselect',
      content_style: 'body {padding: 1rem; background-color: #fafafa;}'
    });
  }
} catch (e) {
  console.log(e.message);
}

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