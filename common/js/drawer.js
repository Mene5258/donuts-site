
// ドロワーメニュー
'use strict';
document.querySelector('.hamburger-btn').addEventListener('click', function () {
  document.querySelector('#menu-container').classList.toggle('show');
});

document.querySelector('.hamburger-btn').addEventListener('click', function () {
  document.querySelector('#close-btn').classList.toggle('show');
});