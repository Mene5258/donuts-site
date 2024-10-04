<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/customer-input.css" rel="stylesheet">
  <script src="common/js/drawer.js"></script>
  <title>会員登録-入力 | C.C.Donuts</title>
</head>
<main>
  <p>
    <a href="index.php">
      <img src="common/images/logo.svg" alt="logo" class="logo">
    </a>
  </p>
  <h2>会員登録</h2>
  <form action="customer-confirm.php" method="post">
    <p class="title">お名前（必須）</p>
    <p><input type="text" id="name" name="name" required></p>
    <p class="title">お名前（フリガナ）（必須）</p>
    <p><input type="text" id="kana" name="kana" required></p>
    <p class="title">郵便番号（必須）</p>
    <p><input type="text" id="postcode" name="postcode" required></p>
    <p class="title">住所（必須）</p>
    <p><input type="text" id="address" name="address" required></p>
    <p class="title">メールアドレス</p>
    <p><input type="email" id="mail" name="mail" required></p>
    <p class="title">パスワード</p>
    <p class="caution">A-Z、a-z、0-9を少なくとも各1つは含めて8文字以上で入力してください。</p>
    <p><input type="password" id="password" name="password" required></p>
    <button class="confirm" type="submit">ご入力内容を確認する</button>
  </form>
</main>

<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>