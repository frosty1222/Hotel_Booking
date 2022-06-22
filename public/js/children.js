/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/children.js ***!
  \**********************************/
var logo = document.getElementById('logo');
var lastscrollTop = 0;
window.addEventListener('scroll', function () {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastscrollTop) {
    logo.style.opacity = 1;
    logo.style.visibility = 'visible';
    logo.style.position = 'fixed';
    logo.style.zIndex = '9999';
  } else {
    logo.style.opacity = 0;
    logo.style.visibility = 'hidden';
    logo.style.position = 'fixed';
  }
});
/******/ })()
;
