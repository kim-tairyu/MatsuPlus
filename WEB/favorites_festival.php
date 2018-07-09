<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

// おすすめお祭り情報を取得
require_once('../app/DAO/FestivalDAO.class.php');
$festivalDAO = new FestivalDAO();
// 記事情報を取得
require_once('../app/DAO/ArticleDAO.class.php');
$articleDAO = new ArticleDAO();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Favorite Festival</title>
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
  <p>Festival Favorites</p>
</div>
<!--さらに中のwrap-->
<!--レビュー順で表示のエリア-->
<div class="tab-pane fade in active" id="recommend">

        <div class="news_info_event">
          <?php if($festivalDAO->getRecommendedFestivals() != null) {
              $festivals = $festivalDAO->getRecommendedFestivals();
              foreach($festivals as $festival) {
          ?>
          <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                  <a href="festival.php?festival_id=<?php echo $festival['festival_id'] ?>">
                      <div class="news_box">
                      <div class="news_box1">
                        <img src="<?php echo $pathList->imgsPath; ?><?php echo $festival['festival_img']; ?>" class="event_image">
                      </div>
                      <div class="news_box2">
                        <h4 class="news_title"><?php echo $festival['festival_name'] ?></h4>
                        <!--demoが表示される文章でお願いします-->
                        <div class="demo">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                        </div>
                        <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                        <div class="date_box">
                        <h6 class="date_big2"><?php echo $festival['start_date'] ?></h6>
                        <h6 class="date_big"><?php echo $festival['start_date'] ?></h6>
                        </div>
                      </div>
                    </div>
                </a>
            </div>
          <?php } } else { ?>
          <div>祭りデータがありません。</div>
          <?php } ?>
        </div>

</div>

    <!--祭りお気に入りボックス（旧
    <div class="fev-box">
      <a href="javascript:void(0);">
      <div class="fev-imagebox"><img src="<?php echo $pathList->imgsPath; ?>fev2.png" class="fev-image"></div>
      <div class="fev-td-box">
        <div class="fev-day"><p class="">August 26</p></div>
        <div class="fev-title"><p class="">NEBUTA MATURI</p></div>
      </div>
    </a>
    </div>
  -->


  </div>
</div>


<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
