<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">

  <title>カート - 商品一覧| C.C.Donuts</title>
</head>

<?php
require '../donuts-site/includes/header.php';
// header終了タグまで
?>
<main>

  <?php
  // 追加した商品のID取得
  $id = $_REQUEST['id'];

  if (!isset($_SESSION['product'])) {
    $_SESSION['produxt'] = [];
  }

  //商品の個数カウント用の変数定義
  $count = 0;

  //選択した商品が既にカートに入っているかどうか判定
  if (isset($_SESSION['product'][$id])) {
    //選択した商品と同じidの商品がカートに入っている場合true
    //$countの変数に商品の個数を代入(productというセッションが持つidのcountを$countに代入)
    $count = $_SESSION['product'][$id]['count'];
  }

  //product変数に追加したいカートの情報を保存する
  $_SESSION['product'][$id] = [
    'name' => $_REQUEST['name'],
    'price' => $_REQUEST['price'],
    //もともとの個数＋追加した個数
    'count' => $count + $_REQUEST['count']
  ];

  //完了メッセージ
  echo '<p>カートに商品を追加しました。</p>';
  echo '<hr>';

  //カートの中身を一覧で表示（外部ファイル）
  require 'cart.php';
  ?>


  ?>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>