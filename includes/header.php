<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">

  <title>donuts site</title>
</head>

<body>
  <header>
    <div class="inner">
      <ul class="header-flex">
        <li class="li-left">
          <img src="common/images/hamburger-icon.svg" alt="hamburger-menu" class="hamburger-btn hamburger-style">
        </li>
        <li>
          <img src="common/images/logo.svg" alt="logo" class="logo-icon">
        </li>
        <li>
          <img src="common/images/icon-login.svg" alt="login" class="login-icon">
          <img src="common/images/icon-cart.svg" alt="cart" class="cart-icon">
        </li>
      </ul>
    </div>


    <!-- 検索 -->
    <div class="max-inner">
      <form action="#" method="post">
        <input type="search" name="product">
        <input type="submit" value="test" id="submit-btn">
        <label for="submit-btn" class="submit-btn">
          <img src="common/images/icon-search.svg" alt="検索">
        </label>
      </form>
    </div>


    <!-- メニュー部 -->
    <nav class="menu-container">
      <div class="menu-logo">
        <a href="index.php"><img src="common/images/logo.svg" alt="logo"></a>
        <img src="common/images/close-btn.svg" alt="logo" class="hamburger-btn" id="close-btn">
      </div>
      <ul class="menu-list">
        <li><a href="index.php">TOP</a></li>
        <li><a href="product.php">商品一覧</a></li>
        <li><a href="#">よくある質問</a></li>
        <li><a href="#">問い合わせ</a></li>
        <li><a href="#">当サイトのポリシー</a></li>
      </ul>
    </nav>
  </header>