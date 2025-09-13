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

/***/ "./assets/src/js/main.js":
/*!*******************************!*\
  !*** ./assets/src/js/main.js ***!
  \*******************************/
/***/ (() => {

eval("window.addEventListener('DOMContentLoaded', function () {\n  var _document$querySelect, _document$querySelect2;\n  function smoothScrollTo(to) {\n    var duration = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 500;\n    var start = window.pageYOffset;\n    var difference = to - start;\n    var startTime = performance.now();\n    function step(currentTime) {\n      var elapsed = currentTime - startTime;\n      var progress = Math.min(elapsed / duration, 1);\n      var ease = 0.5 * (1 - Math.cos(Math.PI * progress));\n      window.scrollTo(0, start + difference * ease);\n      if (elapsed < duration) {\n        requestAnimationFrame(step);\n      }\n    }\n    requestAnimationFrame(step);\n  }\n  document.querySelectorAll('a[href^=\"#\"]').forEach(function (anchor) {\n    anchor.addEventListener('click', function (e) {\n      var targetId = this.getAttribute('href');\n      if (targetId === '#' || targetId === '') return;\n      var targetElement = document.querySelector(targetId);\n      if (!targetElement) return;\n      e.preventDefault();\n      e.stopPropagation();\n      var yOffset = -50;\n      var y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;\n      smoothScrollTo(y, 200);\n    });\n  });\n  function initSliders() {\n    if (typeof Swiper === 'undefined') {\n      console.warn('Swiper is not loaded');\n      return;\n    }\n    var sliders = document.querySelectorAll('.slider__swiper');\n    if (sliders.length) {\n      sliders.forEach(function (slider) {\n        var prevButton = slider.closest('.slider__container').querySelector('.slider__button--prev');\n        var nextButton = slider.closest('.slider__container').querySelector('.slider__button--next');\n        new Swiper(slider, {\n          slidesPerView: 1,\n          spaceBetween: 30,\n          loop: true,\n          navigation: {\n            prevEl: prevButton,\n            nextEl: nextButton\n          },\n          breakpoints: {\n            550: {\n              slidesPerView: 2\n            },\n            992: {\n              slidesPerView: 3\n            },\n            1200: {\n              slidesPerView: 4\n            }\n          }\n        });\n      });\n    }\n  }\n  initSliders();\n  function random(min, max) {\n    return Math.random() * (max - min) + min;\n  }\n  function animateFrag(svg) {\n    var isHover = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;\n    var paths = Array.from(svg.querySelectorAll('path'));\n    var usePaths = paths.length > 0;\n    var elements = isHover ? paths : [svg];\n    var maxOffset = isHover ? 2 : 400;\n    var minOffset = isHover ? -2 : -400;\n    elements.forEach(function (el, index) {\n      var dx = random(minOffset, maxOffset);\n      var dy = random(minOffset, maxOffset);\n      var duration = random(300, 1000);\n      el.style.transition = \"transform \".concat(duration, \"ms\");\n      if (!isHover) {\n        el.style.transform = \"translate(\".concat(dx, \"px, \").concat(dy, \"px) rotate(360deg)\");\n      } else {\n        el.style.transform = \"translate(\".concat(dx, \"px, \").concat(dy, \"px) rotate(0deg)\");\n      }\n      setTimeout(function () {\n        el.style.transform = \"translate(0px, 0px) rotate(0deg)\";\n      }, duration + 50);\n    });\n  }\n  (_document$querySelect = document.querySelector('.vega-anim__desktop')) === null || _document$querySelect === void 0 || _document$querySelect.addEventListener('click', function () {\n    var svgs = document.querySelectorAll('svg');\n    svgs.forEach(function (svg) {\n      return animateFrag(svg);\n    });\n  });\n  (_document$querySelect2 = document.querySelector('.vega-anim__mobile')) === null || _document$querySelect2 === void 0 || _document$querySelect2.addEventListener('click', function () {\n    var svgs = document.querySelectorAll('svg');\n    svgs.forEach(function (svg) {\n      return animateFrag(svg);\n    });\n  });\n  document.querySelectorAll('.vega-anim__desktop svg').forEach(function (svg) {\n    svg.addEventListener('mouseenter', function () {\n      return animateFrag(svg, true);\n    });\n  });\n});\n\n//# sourceURL=webpack://blank-theme/./assets/src/js/main.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/src/js/main.js"]();
/******/ 	
/******/ })()
;