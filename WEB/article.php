<?php

// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

if(isset($_GET["article_id"])) {
    $arc_id = $_GET["article_id"];
    if(isset($_GET["f"]) && isset($_SESSION["user_id"])){
        //お気に入り処理
        require_once('../app/DAO/FavoriteDAO.class.php');
        $favoriteDAO = new FavoriteDAO();
        $article_favorite = $favoriteDAO->putFavoriteArticle($_SESSION["user_id"],$arc_id);
    }
}else{
    header("Location:index.php");
}

// 記事情報を取得
require_once('../app/DAO/ArticleDAO.class.php');
$articleDAO = new ArticleDAO();
//仮
$articles   = $articleDAO->getOneArticle(1);

foreach($articles as $article){
    $title[] = $article['article_title'].PHP_EOL;
    $text[]  = $article['text'].PHP_EOL;
    $date[]  = $article['post_date'].PHP_EOL;
    $image[]  = $article['image'].PHP_EOL;
}

//タグ取得
//仮
$article_tag   = $articleDAO->getTagArticle(2);
foreach($article_tag as $article){
    $tag[] = $article['tag_name_en'];
}

$relation_tag   = $articleDAO->getRelationTag($tag[0]);
foreach($relation_tag as $relation){
    $relation_id[]    = $relation['article_id'];
    $relation_title[] = $relation['article_title'].PHP_EOL;
    $relation_date[]  = $relation['post_date'].PHP_EOL;
    $relation_image[]  = $relation['image'].PHP_EOL;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Article Detail</title>
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
<div class="main_content" id="myTapContent">
  <div class="main_content_fes_inner">
    <!--記事or祭りタイトル-->
  <?php if(!empty($title[0])){ ?>
  <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"><?php echo $title[0] ?></h1>
  <?php } ?>
    <!--祭りor記事画像(仮)-->
    <?php if(!empty($image[0])){ ?>
    <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="<?php echo $pathList->imgsPath; ?><?php echo $image[0] ?>" alt="祭り"></a>
    </div>
    <?php } ?>
  <!--お気に入りボタン-->
  <div class="fev_button_box">
  <a href="?article_id=<?php echo $arc_id ?>&f" style="text-decoration:none;"><div class="fev_button"><p>♡</p></div></a>
  </div>
  <!--記事の日付とサブタイトル？-->
  <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <div class="date_box2">
    <!--この下のdate2をアクセスカウンターで稲買いします-->
    <h5 class="date2">アクセスカウンター（仮）</h5>
    <?php if(!empty($date[0])){ ?>
    <h5 class="date"><?php echo $date[0] ?></h5>
    <?php } ?>
  </div>
  <h2>The next full edition of the Kanda Matsuri is scheduled for May 2019</h2>
  </div>
  <!--記事本文-->
  <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <?php if(!empty($text[0])){ ?>
    <p><?php echo $text[0] ?></p>
    <?php } ?>
  </div>


  <!--関連-->

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Related article</h2>
  </div>

  <!--wrapのようなもの-->
  <div class="news_info_event">
    <!--記事1-->
    <?php if(!empty($relation_image[0]) && !empty($relation_title[0]) && !empty($relation_date[0])){ ?>
    <div class="news_info_event_box">
          <a href="article.php?article_id=?">
              <div class="news_box">
              <div class="news_box1">
                <img src="<?php echo $pathList->imgsPath; ?><?php echo $relation_image[0] ?>" class="event_image">
              </div>
              <div class="news_box2">
                <h4 class="news_title"><?php echo $relation_title[0]; ?></h4>
                <h6 class="date_big"><?php echo $relation_date[0]; ?></h6>
              </div>
            </div>
          </a>
    </div>
    <?php } ?>
    <?php if(!empty($relation_image[1]) && !empty($relation_title[1]) && !empty($relation_date[1])){ ?>
    <div class="news_info_event_box">
          <a href="article.php?article_id=?">
              <div class="news_box">
              <div class="news_box1">
                <img src="<?php echo $pathList->imgsPath; ?><?php echo $relation_image[1] ?>" class="event_image">
              </div>
              <div class="news_box2">
                <h4 class="news_title"><?php echo $relation_title[1]; ?></h4>
                <h6 class="date_big"><?php echo $relation_date[1]; ?></h6>
              </div>
            </div>
          </a>
    </div>
    <?php } ?>
  </div>

</div>
</div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="<?php echo $pathList->jsPath; ?>jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="<?php echo $pathList->jsPath; ?>bootstrap.min.js"></script>
<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
