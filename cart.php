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


<main class="cart-page">
  <div class="cart-product">
    <img src="common/images/product-item1.jpg">
    <p>CCドーナツ 当店オリジナル（５個入り）</p>
    <p>税込 ￥1,500</p>
    <p>数量 n個</p>
    <a href="#">削除する</a>
  </div>

  <div>
    <p>ご注文合計：￥x,xxx</p>
    <div>
      <input type="submit" value="ご購入確認へ進む">
    </div>
  </div>

  <a href="#">買い物を続ける</a>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>