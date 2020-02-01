(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/systems/upload-custom"],{

/***/ "./resources/js/systems/upload-custom.js":
/*!***********************************************!*\
  !*** ./resources/js/systems/upload-custom.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function initLoaderImage(productImages) {
  var preloaded = productImages.map(function (v) {
    return {
      id: v.id,
      src: v.path
    };
  });
  $('.input-images').imageUploader({
    preloaded: preloaded,
    imagesInputName: 'images',
    preloadedInputName: 'edit_images'
  });
}

$(document).ready(function () {
  if ($('.input-images').length) {
    initLoaderImage(productImages);
  }
});

/***/ }),

/***/ 1:
/*!*****************************************************!*\
  !*** multi ./resources/js/systems/upload-custom.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/html/KIN-DEV/shop-earn-money/resources/js/systems/upload-custom.js */"./resources/js/systems/upload-custom.js");


/***/ })

},[[1,"/js/client/manifest"]]]);