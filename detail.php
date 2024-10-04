<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/detail.css" rel="stylesheet">

  <title>detail</title>
</head>

<body>

  <?php
  require 'includes/header.php';
  // header終了タグまで
  ?>


  <main>

    <!-- パンくず↓ -->
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
        <li class="breadcrumb-item"><a href="product.php">商品一覧</a></li>
        <li class="breadcrumb-item active" aria-current="page">CCドーナツ 当店オリジナル（５個入り）</li>
      </ul>
    </nav>


    <p class="user">ようこそ ゲスト様</p>
    <p class="border"></p>

    <main class="cart-page">
      <div class="cart-product">
        <img src="common/images/product-item1.jpg">
        <p>CCドーナツ 当店オリジナル（５個入り）</p>
        <p class="explanation">当店のオリジナル商品、CCドーナツは、サクサクの食感が特徴のプレーンタイプのドーナツです。素材にこだわり、丁寧に揚げた生地は軽やかでサクッとした食感が楽しめます。一口食べれば、口の中に広がる甘くて香ばしい香りと、口どけの良い食感が感じられます。</p>
        <p class="price">税込 ￥1,500 <img src="common/images/favorite.png" alt=""></p>



    </main>

    <?php
    //footer開始タグから
    require 'includes/footer.php';
    ?>