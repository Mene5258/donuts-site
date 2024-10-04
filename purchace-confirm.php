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
  <main>
    <p>
      <a href="index.php">
        <img src="common/images/logo.svg" alt="logo" class="logo">
      </a>
    </p>

    <?php

    if (isset($_REQUEST['customer'])) {

      echo <<<END
    <h2>ご購入確認</h1>
      <h3>ご購入商品</h3>

<table>
  <tr>
    <th>商品名</th>
    <td></td>
  </tr>
  <tr>
    <th>数量</th>
    <td></td>
  </tr>
  <tr>
    <th>小計</th>
    <td></td>
  </tr>
</table>
END;
    } else {
      echo <<<END
  <p>商品を購入するにはログインが必要です。
  </p>
  <a href="login-input">ログインはこちら</a>
  
  END;
    }
    ?>

  </main>




  <?php
  //footer開始タグから
  require 'includes/footer.php';
  ?>