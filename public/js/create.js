/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/create.js ***!
  \********************************/
//Inputs
var iPrice = document.getElementById('i_price');
var iTitle = document.getElementById('i_title');
var iPreviewImage = document.getElementById('i_image');
var image = document.getElementById('image'); //Cards text

var cardPrice = document.querySelector('.card-price');
var cardTitle = document.querySelector('.card-title');
iPrice.addEventListener('input', function () {
  cardPrice.textContent = iPrice.value;
});
iTitle.addEventListener('input', function () {
  cardTitle.textContent = iTitle.value;
});

iPreviewImage.onchange = function (e) {
  var reader = new FileReader();
  console.log(e);
  console.log(e.target.files[0]);
  reader.readAsDataURL(e.target.files[0]);

  reader.onload = function () {
    image.src = reader.result;
  };
};
/******/ })()
;