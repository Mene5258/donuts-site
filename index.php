<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/top.css" rel="stylesheet">

  <title>donuts site</title>
</head>

<?php
require '../donuts-site/includes/header.php';
?>
<!-- topページ領域 -->

<main class=top-page>
  <p class="login-text mx">ようこそ　ゲスト様</p>

  <div class="top-hero">
    <img src="../donuts-site/common/images/hero-sp.jpg" alt="hero" class="fluid">
  </div>

  <div class="top-item-container">
    <div class="top-item-content">
      <a href="#">
        <div class="top-item1">
          <p>新商品</p>
          <p>サマーシトラス</p>
        </div><!-- top-item1-->
      </a>

      <a href="#">
        <div class="top-item2">
          <p>ドーナツのある生活</p>
        </div><!-- top-item2-->
      </a>
    </div><!-- top-item-content-->

    <a href="#">
      <div class="top-image">
        <p>商品一覧</p>
      </div>
    </a>

  </div>

  <div class="top-bg">
    <h1>Philosophy</h1>
    <p>私たちの信念</p>
    <p>"Creating Connections"</p>
    <p>ドーナツでつながる</p>
  </div>

  <div class="top-rank">
    <h2>人気ランキング</h2>

    <ol class="top-rank-content mx">
      <li>
        <form action="#" method="post">
          <p>1</p>
          <p><img src="../donuts-site/common/images/product-item01.jpg" alt="" class="fluid"></p>
          <p>CCドーナツ 当店オリジナル（5個入り）</p>
          <p>税込 ￥1,500</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="CCドーナツ">
          <input type="hidden" name="price" value="1500">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

      <li>
        <form action="#" method="post">
          <p>2</p>
          <p><img src="../donuts-site/common/images/product-item02.jpg" alt="" class="fluid"></p>
          <p>フルーツドーナツセット（12個入り））</p>
          <p>税込 ￥3,500</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="フルーツドーナツセット（12個入り））">
          <input type="hidden" name="price" value="3500">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

      <li>
        <form action="#" method="post">
          <p>3</p>
          <p><img src="../donuts-site/common/images/product-item03.jpg" alt="" class="fluid"></p>
          <p>フルーツドーナツセット（14個入り）</p>
          <p>税込 ￥4,000</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="フルーツドーナツセット（14個入り）">
          <input type="hidden" name="price" value="4000">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

      <li>
        <form action="#" method="post">
          <p>4</p>
          <p><img src="../donuts-site/common/images/product-item04.jpg" alt="" class="fluid"></p>
          <p>チョコレートデライト（5個入り）</p>
          <p>税込 ￥1,600</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="チョコレートデライト（5個入り）">
          <input type="hidden" name="price" value="1600">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

      <li>
        <form action="#" method="post">
          <p>5</p>
          <p><img src="../donuts-site/common/images/product-item05.jpg" alt="" class="fluid"></p>
          <p>ベストセレクションボックス（4個入り）</p>
          <p>税込 ￥1,200</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="ベストセレクションボックス（4個入り）">
          <input type="hidden" name="price" value="1200">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

      <li>
        <form action="#" method="post">
          <p>6</p>
          <p><img src="../donuts-site/common/images/product-item06.jpg" alt="" class="fluid"></p>
          <p>ストロベ リークラッ
            シュ（5個入り）</p>
          <p>税込 ￥1,800</p>
          <input type="hidden" name="id" value="1">
          <input type="hidden" name="name" value="ストロベ リークラッ
シュ（5個入り）">
          <input type="hidden" name="price" value="1800">
          <p><input type="submit" value="カートに入れる"></p>
        </form>
        <p><a href="">ハート</a></p>
      </li>

    </ol>
  </div>

</main>

<?php
require '../donuts-site/includes/footer.php';
?>