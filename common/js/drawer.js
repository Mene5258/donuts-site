
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

// 
document.getElementById('heart').onclick = function () {
  const hearts = document.getElementById('hearts');
  hearts.innerHTML = '&#9829;'; // ハートの色を変更
  hearts.classList.toggle('liked'); // liked クラスをトグル
};