<?php session_start() ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="common/css/reset.css">
  <link rel="stylesheet" href="common/css/common.css">
  <link rel="stylesheet" href="common/css/logout-complete.css">
  <script src="common/js/drawer.js"></script>
  <title>ログアウト入力 | C.C.Donuts</title>
</head>
<?php
require 'includes/header.php';
// header終了タグまで
?>

<main>
  <?php
  if (isset($_SESSION['customer'])) {
    unset($_SESSION['customer']);
    echo <<<END
  <p class="user">ようこそ　ゲスト様</p>
  <p class="border"></p>
  <h2>ログアウト完了</h2>
  <p class="login-box">ログアウトが完了しました。</p>
  <p class="top-reverse">
    <a href="index.php">topページへ戻る</a>
  </p>
END;
  } else {
    echo <<<END
  <p class="user">ようこそ　ゲスト様</p>
  <p class="border"></p>
  <h2>ログアウト中です</h2>
  <p class="top-reverse">
    <a href="index.php">topページへ戻る</a>
  </p>
  END;
  }
  ?>
</main>

<?php
//footer開始タグから
require 'includes/footer.php';
?>