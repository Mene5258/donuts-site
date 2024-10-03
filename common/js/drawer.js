
// ドロワーメニュー
'use strict';
window.addEventListener('load', function () {
  document.querySelector('.hamburger-btn').addEventListener('click', function () {
    document.querySelector('#menu-container').classList.toggle('show');

    document.querySelector('#close-btn').addEventListener('click', function () {
      document.querySelector('#menu-container').classList.remove('show');
    });
  })
});