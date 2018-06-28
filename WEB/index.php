<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// おすすめお祭り情報を取得
require_once('../app/DAO/FestivalDAO.class.php');
$festivalDAO = new FestivalDAO();
$festivals   = $festivalDAO->getRecommendedFestivals();
// 記事情報を取得
require_once('../app/DAO/ArticleDAO.class.php');
$articleDAO = new ArticleDAO();
$articles   = $articleDAO->getArticles();

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
?>
<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Matsuri Plus</title>
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
<div class="main_content">
  <div class="main_content_inner">

  <ul class="kategori col-md-12 col-xs-12 col-lg-12">
    <li class="col-md-2  col-xs-2 col-lg-2">
      <a href="#vote" data-toggle="tab">VOTE</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#news" data-toggle="tab">NEWS</a>
    </li>
    <li class="col-md-4 col-xs-4 active col-lg-4 ">
      <a href="#recommend" data-toggle="tab">RECOMMEND</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#season" data-toggle="tab">SEASON</a>
    </li>
    <li class="col-md-2 col-xs-2 col-lg-2">
      <a href="#area" data-toggle="tab">AREA</a>
    </li>
  </ul>
  <!--index.php全体を囲むwrap-->
  <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">

    <!--レビュー順で表示のエリア-->
    <div class="tab-pane fade in active" id="recommend">
      <div class="week_mon">
        <a href="#">WEEK</a>
        <a href="#" class="month2">MONTH</a>
      </div>

            <div class="news_info_event">
              <?php foreach($festivals as $festival) { ?>
              <div class="news_info_event_box">
                      <a href="festival.php?festival_id=<?php echo $festival['festival_id'] ?>">
                          <div class="news_box">
                          <div class="news_box1">
                            <img src="<?php echo $pathList->imgsPath; ?><?php echo $festival['festival_img']; ?>" class="event_image">
                          </div>
                          <div class="news_box2">
                            <h4 class="news_title"><?php echo $festival['festival_name'] ?></h4>
                            <h6 class="date_big"><?php echo $festival['start_date'] ?></h6>
                          </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>

    </div>
    <!--投票機能エリア-->
    <div class="tab-pane fade" id="vote">
      投票を実装予定
    </div>
    <!--記事エリア-->
    <div class="tab-pane fade" id="news">
      <!--wrapのようなもの-->
      <div class="news_info_event">
        <!--記事1-->
        <div class="news_info_event_box">
              <?php foreach($articles as $article) { ?>
              <a href="article.php?article_id=?">
                  <div class="news_box">
                  <div class="news_box1">
                    <img src="<?php echo $article['article_img']; ?>" class="event_image">
                  </div>
                  <div class="news_box2">
                    <h4 class="news_title"><?php echo $article['article_title']; ?></h4>
                    <h6 class="date_big"><?php echo $article['post_date']; ?></h6>
                  </div>
                </div>
              </a>
              <?php } ?>
          </div>
        </div>
    </div>
    <!--季節リア-->
    <div class="tab-pane fade" id="season">
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>spring.jpg" alt="春"></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>summer.jpg" alt="夏"></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>autumn.jpg" alt="秋"></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>winter.jpg" alt="冬"></a>
      </div>
    </div>
    <!--地方エリア-->
    <div class="tab-pane fade" id="area">
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>hokkaidou.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>tohoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>kinki.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>kanto.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>chubu.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>chugoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>shikoku.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>kyushu.jpg" alt=""></a>
      </div>
      <div class="home_img">
        <a href="#"><img src="<?php echo $pathList->imgsPath; ?>okinawa.jpg" alt=""></a>
      </div>
    </div>

    </div>
  </div>
</div>
<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>
</body>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="<?php echo $pathList->jsPath; ?>jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="<?php echo $pathList->jsPath; ?>bootstrap.min.js"></script>
</html>
