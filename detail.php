<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/detail.css" rel="stylesheet">
  <script src="common/js/drawer.js"></script>
  <title>商品詳細 | C.C.Donuts</title>
</head>

<body>

  <?php
  require 'includes/header.php';
  // header終了タグまで
  ?>
  <main class="detaile">

    <!-- パンくず↓ -->
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">TOP</a></li>
        <li class="breadcrumb-item"><a href="product.php">商品一覧</a></li>
        <li class="breadcrumb-item active" aria-current="page">CCドーナツ 当店オリジナル（５個入り）</li>
      </ul>
    </nav>
    <p class="border"></p>

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


    <section>
      <?php
      require 'includes/database.php';
      $sql = $pdo->prepare('select * from product where id=?');

      $sql->execute([$_REQUEST['id']]);

      foreach ($sql as $row) {
        echo <<<END
  <div class="detail-main">
  <img src="common/images/product-item{$row['id']}.jpg" alt="image" class="fluid">
  <div class="detail-block">
  <p>{$row['name']}</p>
  <p class="explanation">{$row['description']}</p>
  <p class="price">税込 ￥
  END;
        echo number_format($row['price']);
        echo <<<END
          <button class="hearts-btn" type="button">&#9825;</button></p>
          <form action="cart-input.php" method="post">
         <input type="hidden" name="id" value="{$row['id']}">
         <input type="hidden" name="name" value="{$row['name']}">
         <input type="hidden" name="price" value="{$row['price']}">
          <input type="text" size="2" name="count" value="1"><span class="detail-number">個</span><input type="submit" value="カートに入れる">
          </form>
        </div>

      </div>
      END;
      }
      ?>
    </section>

  </main>

  <?php
  //footer開始タグから
  require 'includes/footer.php';
  ?>