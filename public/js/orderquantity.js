/******/ (() => { // webpackBootstrap
/*!***************************************!*\
  !*** ./resources/js/orderquantity.js ***!
  \***************************************/
var minusButton = document.getElementById('minus');
var plusButton = document.getElementById('plus');
var inputField = document.getElementById('quantity');
minusButton.addEventListener('click', function (event) {
  event.preventDefault();
  var currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue - 1;
});
plusButton.addEventListener('click', function (event) {
  event.preventDefault();
  var currentValue = Number(inputField.value) || 0;
  inputField.value = currentValue + 1;
});
/******/ })()
;