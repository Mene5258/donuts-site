<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">

  <title>donuts site</title>
</head>

<!-- 伊藤さんへ -->
<!-- ごみくそみたいなheader作ってすみませんでした -->

<body>
  <header>

    <!-- 上部スタイル-->
    <div class="upper-header-content">
      <div class="logo">
        <img src="common/images/logo.svg" alt="logo">
      </div><!-- /logo -->

      <div class="drawer">
        <div class="hamburger-button-container">
          <button class="hamburger-button">
            <span class="navicon"></span>
          </button>
        </div><!-- /hamburger-button-container -->
        <nav class="menu-container">
          <div class="menu-logo">
            <img src="common/images/logo.svg" alt="logo">
          </div>
          <ul class="menu-list">
            <li><a href="#">TOP</a></li>
            <li><a href="#">商品一覧</a></li>
            <li><a href="#">よくある質問</a></li>
            <li><a href="#">問い合わせ</a></li>
            <li><a href="#">当サイトのポリシー</a></li>
          </ul>
        </nav>
      </div><!-- /drawer -->

      <div class="icons">
        <div class="login">
          <a href="#">
            <img src="common/images/icon-login.svg" alt="login">
          </a>
        </div><!-- /login-->

        <div class="cart">
          <a href="#">
            <img src="common/images/icon-cart.svg" alt="cart">
          </a>
        </div><!-- /cart-->
      </div><!-- /icons-->
    </div><!-- /upper-header-content-->

    <!-- 検索 -->
    <form action="#" method="post">
      <input type="search" name="product">
      <input type="submit" value="test" id="submit-btn">
      <label for="submit-btn" class="submit-btn">
        <img src="common/images/icon-search.svg" alt="検索">
      </label>
    </form>


  </header>