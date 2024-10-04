<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/purchace-confirm.css" rel="stylesheet">
  <script src="common/js/drawer.js"></script>
  <title>ご購入確認 | C.C.Donuts</title>


</head>

<body>

  <?php
  require 'includes/header.php';
  // header終了タグまで
  ?>
  <main>
    <p class="user">ようこそ　ゲスト様</p>
    <p class="border"></p>

    <h1>ご購入確認</h1>

    <div>
      <h2>ご購入商品</h2>

      <?php
      // データの箱
      $id = $_REQUEST['id'];

      echo <<<END
<p>{$id}</p>
END;

      ?>
      <form action="purchace-complete.php"></form>
      <tr>
        <th>商品名</th>
        <td></td>
      </tr>
      <tr>
        <th>数量</th>
      </tr>
      <tr>
        <th>税込</th>
      </tr>
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">
      <input type="text">



    </div>

  </main>



  <?php
  //footer開始タグから
  require 'includes/footer.php';
  ?>