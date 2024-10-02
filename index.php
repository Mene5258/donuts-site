<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/index.css" rel="stylesheet">

  <title>donuts site</title>
</head>

<?php
require '../donuts-site/includes/header.php';
?>
<!-- topページ領域 -->

<!-- ローディング画面 -->
<div id="loading" class="loading">
  <!-- 画像埋め込み -->
  <div class="content">
    <img src="common/images/logo.png" alt="logo">
  </div>
  <!-- 文字が現れるアニメーション -->
  <div class="txt">
    <p>L</p>
    <p>o</p>
    <p>a</p>
    <p>d</p>
    <p>i</p>
    <p>n</p>
    <p>g</p>
    <p>・</p>
    <p>・</p>
    <p>・</p>
  </div>

</div>
<!-- ここまで -->

<main class=top-page>
  <!-- 下記消す予定 -->
  <p class="login-text mx">ようこそ　ゲスト様</p>

  <div class="top-hero">
    <img src="../donuts-site/common/images/hero-sp.jpg" alt="hero" class="fluid">
  </div>

  <div class="top-item-container">
    <div class="top-item-content">
      <?php
      require '../donuts-site/includes/database.php';
      echo <<<END
      <a href="product.php?id=5">
      END;

      ?>
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

    <a href="product.php">
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

  <section>
    <div class="top-rank">
      <h2>人気ランキング</h2>
      <ol class="top-rank-content mx">
        <li>
          <form action="cart-input.php" method="post">

            <p class="rank"> <a href="detail.php?id=1">1 </a></p>

            <p> <a href="detail.php?id=1"><img src="../donuts-site/common/images/product-item01.jpg" alt="image" class="fluid"></a></p>
            <p class="product-name"> <a href="detail.php?id=1">CCドーナツ 当店オリジナル（5個入り）</a></p>
            <div class="price-content">
              <p class="price"> <a href="detail.php?id=1">税込 ￥1,500</a></p>
              <a href="">ハート</a>
            </div>
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="name" value="CCドーナツ">
            <input type="hidden" name="price" value="1500">
            <input type="submit" value="カートに入れる">
          </form>
        </li>

        <li>
          <form action="cart-input.php" method="post">
            <p class="rank"> <a href="detail.php?id=7">2 </a></p>
            <p> <a href="detail.php?id=1"><img src="../donuts-site/common/images/product-variety01.jpg" alt="image" class="fluid"></a></p>
            <p class="product-name"> <a href="detail.php?id=71">フルーツドーナツセット（12個入り）</a></p>
            <div class="price-content">
              <p class="price"> <a href="detail.php?id=7">税込 ￥3,500</a></p>
              <a href="">ハート</a>
            </div>
            <input type="hidden" name="id" value="7">
            <input type="hidden" name="name" value="CCドーナツ">
            <input type="hidden" name="price" value="1500">
            <input type="submit" value="カートに入れる">
          </form>
        </li>

      </ol>
    </div>
  </section>

</main>

<?php
require '../donuts-site/includes/footer.php';
?>