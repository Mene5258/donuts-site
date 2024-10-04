<?php
// ログイン確認用セッションスタート
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/cart.css" rel="stylesheet">
  <script src="common/js/drawer.js"></script>
  <title>カート-商品一覧 | C.C.Donuts</title>
</head>

<?php
require '../donuts-site/includes/header.php';
// header終了タグまで
?>



<main class="cart-page">

  <!-- パンくず↓ -->
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
      <li class="breadcrumb-item active" aria-current="page">カート</li>
    </ul>
  </nav>

  <?php
  // セッション変数がセットされているかどうかを判定(セッション情報がちゃんと取得できているかどうかを判断)
  if (isset($_SESSION['customer'])) {
    // セットされていればtrue
    echo '<p class="user">ようこそ　', $_SESSION['customer']['name'], '様</p>';
  } else {
    echo '<p class="user">ようこそ　ゲスト様</p>';
  }
  ?>
  <p class="border"></p>

  <div class="cart-product">
    <img src="common/images/product-item1.jpg">
    <div class="product-item-detail">
      <p>CCドーナツ 当店オリジナル（５個入り）</p>

      <div class="detail-block">
        <p>税込 ￥1,500</p>
        <p>数量 　1 個</p>
      </div>
      <a href="#">削除する</a>
    </div>
  </div>

  <div class="cart-total">
    <p>ご注文合計：<span>税込み ￥x,xxx</span></p>
    <button class="purchase-btn" type="submit" onclick="location.href='purchace-complete.php'">ご購入へ進む</button>
  </div>
  <button class="continue-btn" type="submit" onclick="location.href='product.php'">買い物を続ける</button>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>