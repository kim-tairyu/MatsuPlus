<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>記事お気に入り</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
</script>
<!-- Bootstrap -->
    <link href="<?php echo $pathList->cssPath; ?>bootstrap.min.css" rel="stylesheet">
</head>
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
<body>
  <!--[if lt IE 8]>
          <p>お使いのブラウザは<strong>古い</strong>ため、表示が崩れることがあります。
          <a href="http://browsehappy.com/">他のブラウザ</a>を利用されるか、<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>をインストールすることで正しく表示することができます。</p>
  <![endif]-->
  <!--header-->
  <?php include $pathList->headerPath ?>

<!--
maincontents
-->

<!--全体をかこっているwraperのようなもの-->
<div class="fevpage" id="myTapContent">
  <div class="fevpage-inner">
    <!--ページタイトル-->
    <div class="fevpage-title">
      <p>Article Favorites</p>
    </div>
    <!--さらに中のwrap-->
    <div class="search_results_box">
      <div class="search_results_box_inner">
        <!--お気に入り１-->
        <div class="search_results_box1">
              <a href="#">
                  <div class="search_results_box2">
                  <div class="search_results_box2-1">
                    <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                  </div>
                  <div class="search_results_box2-2">
                    <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                    <h6 class="search_results_date_big">2018.6.15</h6>
                  </div>
                </div>
            </a>
        </div>
        <!--お気に入り２（以下略）-->
        <div class="search_results_box1">
              <a href="#">
                  <div class="search_results_box2">
                  <div class="search_results_box2-1">
                    <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                  </div>
                  <div class="search_results_box2-2">
                    <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                    <h6 class="search_results_date_big">2018.6.15</h6>
                  </div>
                </div>
            </a>
        </div>
        <div class="search_results_box1">
              <a href="#">
                  <div class="search_results_box2">
                  <div class="search_results_box2-1">
                    <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                  </div>
                  <div class="search_results_box2-2">
                    <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                    <h6 class="search_results_date_big">2018.6.15</h6>
                  </div>
                </div>
            </a>
        </div>
      </div>
    </div>

  </div>
</div>

<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
