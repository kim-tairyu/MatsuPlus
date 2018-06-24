<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

session_start();
$link_mypage      = "";
$link_schedule    = "";
$link_mypage_name = "";
if(isset($_SESSION["user_id"])) {
  $link_mypage      = "mypage.php";
  $link_schedule    = "schedule.php";
  $link_mypage_name = "My page";
} else {
  $link_mypage      = "sign-in.php";
  $link_schedule    = "sign-in.php";
  $link_mypage_name = "SIGN IN";
}

$article_id = 1;

// 記事情報を取得
require_once('../app/DAO/ArticleDAO.class.php');
$articleDAO = new ArticleDAO();
$articles   = $articleDAO->getArticleInfo($article_id);
foreach($articles as $article){
    $title[] = $article['article_title'].PHP_EOL;
    $date[]  = $article['post_date'].PHP_EOL;
    $txt[]   = $article['text'].PHP_EOL;
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>記事詳細</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
//まだ使うかわからんjsの処理
$(function() {
    var topBtn = $('.page-top');
    topBtn.hide();
    //スクロールが100に達したらボタン表示
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
    //スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});
//画像のみ保存禁止
$(function(){
$("<?php echo $pathList->imgsPath; ?>").on("contextmenu",function(){
return false;
});
});
</script>
<!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

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
<div class="main_content col-md-10 col-xs-12 col-lg-12">

  <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" alt="祭り"></a>
  </div>

  <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h5 class="date"><?php echo $date[0] ?></h5>
    <h2><?php echo $title[0] ?></h2>
    <i class="fas fa-user"></i>
    <i class="fas fa-heart"></i>
  </div>

  <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <p><?php echo $txt[0] ?></p>
  </div>

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Related article</h2>
  </div>

  <div class="home_img home_img_sub related_article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="<?php echo $pathList->imgsPath; ?>news_01.jpg" alt="祭りニュース"></a>
    <div class="related_article_title_small">
      <h2 class="news_title_sub">Main procession passes along Cuo-dori Street</h2>
    </div>
  </div>

  <div class="home_img home_img_sub related_article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="<?php echo $pathList->imgsPath; ?>news_01.jpg" alt="祭りニュース"></a>
    <div class="related_article_title_small">
      <h2 class="news_title_sub">Main procession passes along Cuo-dori Street</h2>
    </div>
  </div>
</div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
