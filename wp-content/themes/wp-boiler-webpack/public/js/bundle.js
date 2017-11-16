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
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// Nav.js
// Mobile nav
$(document).ready(function () {
  var trigger = $('#js-nav-toggle');
  var isClosed = false;
  trigger.click(function () {
    $('#js-nav-mobile').toggleClass('nav-open');
    $('body').toggleClass('nav-open');
    $('#js-nav-toggle').toggleClass('active');
  });
});

// Header on scroll
$(window).on('scroll', function () {
  var el = $('.header');
  var scroll = $(window).scrollTop();
  var heroHeight = $('#js-header-scroll-to').outerHeight();
  //var breakpoint = 768;
  //if ( scroll >= heroHeight && $(window).width() >= breakpoint) {
  if (scroll >= heroHeight) {
    el.addClass('is-fixed');
  } else {
    el.removeClass('is-fixed');
  }
});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: \n@import 'states/helpers';\n^\n      File to import not found or unreadable: states/helpers.\nParent style sheet: stdin\n      in /Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/assets/scss/style.scss (line 20, column 1)\n    at runLoaders (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/webpack/lib/NormalModule.js:192:19)\n    at /Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/loader-runner/lib/LoaderRunner.js:364:11\n    at /Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/loader-runner/lib/LoaderRunner.js:230:18\n    at context.callback (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/loader-runner/lib/LoaderRunner.js:111:13)\n    at Object.asyncSassJobQueue.push [as callback] (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/sass-loader/lib/loader.js:55:13)\n    at Object.<anonymous> (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/sass-loader/node_modules/async/dist/async.js:2244:31)\n    at Object.callback (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/sass-loader/node_modules/async/dist/async.js:906:16)\n    at options.error (/Applications/MAMP/htdocs/wp-starter/wp-content/themes/wp-boiler-webpack/node_modules/node-sass/lib/index.js:294:32)");

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


//import 'jquery';
__webpack_require__(1);
__webpack_require__(0);

/***/ })
/******/ ]);