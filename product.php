<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/product.css" rel="stylesheet">

  <title>product</title>
</head>

<body>

  <?php
  require '../donuts-site/includes/header.php';
  // header終了タグまで
  ?>


  <main>
    <!-- パンくず↓ -->

    <!--パンくず↑  -->
    <p class="user">ようこそ ゲスト様</p>
    <p class="border"></p>


  </main>

  <?php
  //footer開始タグから
  require '../donuts-site/includes/footer.php';
  ?>