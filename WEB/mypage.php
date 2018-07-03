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
<title>マイページ</title>
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
<div class="mypage">
  <div class="mypage-inner">

  <!-- ユーザーのプロフィール画像 -->
  <div class="my_image">
      <img src="<?php echo $pathList->imgsPath; ?>gaijin.png" class="">
  </div>
  <!-- ユーザーネームをかこっているボックス -->
  <div class="user_name_box">
    <p class="user_name">ユーザーネーム</p>
  </div>
<!--祭りお気に入り、記事お気に入り、設定への遷移ボタンをかこっているボックス-->
  <div class="fes_box">
    <div class="btn-fes_box"><a href="favorites_festival.php" class="btn-fes">Festival Favorites</a></div>
    <div class="btn-fes_box"><a href="favorites_article.php" class="btn-fes">Article Favorites</a></div>
    <div class="btn-fes_box"><a href="config.php" class="btn-fes">Configuration</a></div>
  </div>

  </div>
</div>


<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
