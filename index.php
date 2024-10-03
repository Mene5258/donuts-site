<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="common/css/reset.css" rel="stylesheet">
  <link href="common/css/common.css" rel="stylesheet">
  <link href="common/css/index.css" rel="stylesheet">
  <script src="common/js/loading.js"></script>
  <script src="common/js/drawer.js"></script>
  <title>donuts site</title>
</head>

<?php
require '../donuts-site/includes/header.php';
?>
<!-- topページ領域 -->



<!-- ここまで -->

<main class=top-page>
  <!-- 下記消す予定 -->
  <p class="login-text mx">ようこそ　ゲスト様</p>

  <div class="top-hero">
    <img src="../donuts-site/common/images/hero-sp.jpg" alt="hero" class="fluid">
  </div>

  <div class="top-item-container">
    <div class="top-item-content">
      <?php
      require '../donuts-site/includes/database.php';
      echo <<<END
      <a href="product.php?id=5">
      END;

      ?>
      <div class="top-item1">
        <p>新商品</p>
        <p>サマーシトラス</p>
      </div><!-- top-item1-->
      </a>

      <a href="#">
        <div class="top-item2">
          <p>ドーナツのある生活</p>
        </div><!-- top-item2-->
      </a>
    </div><!-- top-item-content-->

    <a href="product.php">
      <div class="top-image">
        <p>商品一覧</p>
      </div>
    </a>

  </div>

  <div class="top-bg">
    <h1>Philosophy</h1>
    <p>私たちの信念</p>
    <p>"Creating Connections"</p>
    <p>ドーナツでつながる</p>
  </div>

  <section>
    <div class="top-rank">
      <h2>人気ランキング</h2>
      <ol class="top-rank-content mx">


        <?php
        require '../donuts-site/includes/database.php';
        // SQL文準備
        $sql = $pdo->query('select * from product where ranking is not null and ranking != 0 order by ranking asc');

        foreach ($sql as $row) {
          echo <<<END
        <li>
          <form action="cart-input.php" method="post">
            <p class="rank">
            <a href="detail.php?id={$row['id']}">{$row['ranking']}</a>
            </p>
            <p>
            <a href="detail.php?id={$row['id']}">
            <img src="../donuts-site/common/images/product-item{$row['id']}.jpg" alt="image" class="fluid">
            </a>
            </p>
            <p class="product-name">
            <a href="detail.php?id={$row['id']}">
        {$row['name']}
            </a>
            </p>
            <div class="price-content">
              <p class="price">
              <a href="detail.php?id={$row['id']}">税込 ￥
END;

          echo number_format($row['price']);

          echo <<<END
              </a></p>
              <button class="hearts-btn" type="button">&#9825;</button>
            </div>

            <input type="hidden" name="id" value="{$row['id']}">
            <input type="hidden" name="name" value="{$row['name']}">
            <input type="hidden" name="price" value="{$row['id']}">
            <input type="submit" value="カートに入れる">
          </form>
        </li>
END;
        }
        ?>
        </li>



      </ol>
    </div>
  </section>

</main>
<script>
  <?php
  require '../donuts-site/includes/footer.php';
  ?>


    <
    /body>

    <
    /html>