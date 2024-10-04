<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">

  <title>card-input</title>
</head>
<main>

  <?php
  $id = $_REQUEST['id'];
  if (!isset($_SESSION['product'])) {
    $_SESSION['product'] = [];
  }
  $count = 0;
  $_SESSION['product'][$id] = [
    'name' => $_REQUEST['name'],
    'price' => $_REQUEST['price'],
  ];
  echo '<p>カートに商品を追加しました。</p>';

  //   foreach ($_SESSION['product'] as $id => $product) {



  //     //ヒアドキュメント２つ目
  //     echo <<<END
  // <tr>
  //   <td>{$id}</td>
  //   <td><a href="detail.php?id={$id}">{$product['name']}</a></td>
  //   <td>{$product['price']}</td>
  // </tr>
  // END;
  //   }

  ?>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>