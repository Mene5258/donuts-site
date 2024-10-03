<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/cart.css" rel="stylesheet">

  <title>cart</title>
</head>

<?php
require '../donuts-site/includes/header.php';
// header終了タグまで
?>
<!-- パンくず↓ -->
<nav aria-label="breadcrumb">
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
    <li class="breadcrumb-item active" aria-current="page">カート</li>
  </ul>
</nav>

<main class="cart-page">


  <div class="cart-product">
    <img src="common/images/product-item1.jpg">
    <p>CCドーナツ 当店オリジナル（５個入り）</p>
    <p>税込 ￥1,500</p>
    <p>数量 　1 個</p>
    <a href="#">削除する</a>
  </div>

  <div class="cart-total">
    <p>ご注文合計：<span>税込み ￥x,xxx</span></p>
    <button class="purchase-btn" type="submit">ご購入へ進む</button>
  </div>
  <button class="continue-btn" type="submit">買い物を続ける</button>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>