<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/input.css" rel="stylesheet">

  <title>login-input</title>


</head>
<?php
require '../donuts-site/includes/header.php';
// header終了タグまで
?>

<h2>ログイン</h2>
<div class="login-container">

  <form action="#" method="POST">
    <label for="email">メールアドレス</label>
    <input type="email" id="email" name="email" required>

    <label for="password">パスワード</label>
    <input type="password" id="password" name="password" required>

    <button class="login" type="submit">ログインする</button>
  </form>

</div>
<p class="customar_reg">
  <a href="#">会員登録がお済みでない方はこちら</a>
</p>
</body>





<?php
//footer開始タグから
require '../donuts-site/includes/footer.php';
?>