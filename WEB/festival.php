<?php
$fes_id = 3;

// 祭り情報を取得
require_once('../app/DAO/FestivalDAO.class.php');
$festivalDAO = new FestivalDAO();
$festivals   = $festivalDAO->getOneFestival($fes_id);
foreach($festivals as $festival){
  $festival_id[] = $festival['festival_id'].PHP_EOL;
  $name[]        = $festival['festival_name'].PHP_EOL;
  $description[] = $festival['description'].PHP_EOL;
  $location[]    = $festival['location'].PHP_EOL;
  $start_time[]  = $festival['start_time'].PHP_EOL;
  $end_time[]    = $festival['end_time'].PHP_EOL;
  $x[]           = $festival['x_coordinate'].PHP_EOL;
  $y[]           = $festival['y_coordinate'].PHP_EOL;
  $movie_url[]   = $festival['movie_url'];
  // lat:40.822286,lng: 140.745205
}

// レビュー情報を取得
require_once('../app/DAO/ReviewDAO.class.php');
$reviewDAO = new ReviewDAO();
$reviews   = $reviewDAO->getReviewInfo();
foreach($reviews as $review){
  $review_user[] = $review['user_name'].PHP_EOL;
  $review_content[] = $review['review'].PHP_EOL;
}

// 登録処理

// スケジュール仮データ
$days ="2018-06-018";
$schedule_id = 1;
// レビュー仮データ
$user = "bbb";
$star = 3;
if(isset($_POST['r_button']) == 'registration'){
    $registration = $pdo -> prepare("INSERT INTO schedule_detail (days, schedule_id,festival_id,start_time,end_time,location) VALUES (:days, :schedule_id,:festival_id,:start_time,:end_time,:location)");
    $registration->bindValue(':days', $days, PDO::PARAM_STR);
    $registration->bindValue(':schedule_id', $schedule_id, PDO::PARAM_INT);
    $registration->bindValue(':festival_id', $festival_id, PDO::PARAM_INT);
    $registration->bindValue(':start_time', $start_time, PDO::PARAM_STR);
    $registration->bindValue(':end_time', $end_time, PDO::PARAM_STR);
    $registration->bindValue(':location', $location, PDO::PARAM_STR);
    $registration->execute();
    
}else if(isset($_POST['review_button']) == 'review'){
    $review = $pdo -> prepare("INSERT INTO review (festival_id,user_id,review,star)VALUES(:festival_id,:user_id,:review,:star)");
    $review->bindValue(":festival_id",$festival_id,PDO::PARAM_INT);
    $review->bindValue(":user_id",$user,PDO::PARAM_STR);
    $review->bindValue(":review",$_POST['content'],PDO::PARAM_STR);
    $review->bindValue(":star",$star,PDO::PARAM_INT);
    $review->execute();
}else if(isset($_POST['f_button']) == 'favorite'){
    $user = "bbb";
    $favorite_fes = $pdo -> prepare("INSERT INTO favorite_fes(user_id,festival_id)VALUES(:user_id,:festival_id)");
    $favorite_fes->bindValue(":user_id",$user,PDO::PARAM_STR);
    $favorite_fes->bindValue(":festival_id",$festival_id,PDO::PARAM_INT);
    $favorite_fes->execute();
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>産学祭りの側</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="../css/style.css" />
<link rel="SHORTCUT ICON" href="../imgs/M.ico">
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
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
$("../imgs").on("contextmenu",function(){
return false;
});
});
</script>
  </head>
  <body>
<!-- Bootstrap -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
  <!--[if lt IE 8]>
          <p>お使いのブラウザは<strong>古い</strong>ため、表示が崩れることがあります。
          <a href="http://browsehappy.com/">他のブラウザ</a>を利用されるか、<a href="http://www.google.com/chromeframe/?redirect=true">Google Chrome Frame</a>をインストールすることで正しく表示することができます。</p>
  <![endif]-->
<!--headerスタート-->
  <header>
    <!--boxA-innerはヘッダー内の諸々が1190px以上外に出ないようにするためのもの-->
    <div class="boxA-inner">
      <!--boxKUUHAKUはSP版表示になった時に左上に空白を持たせておくためのもの（今後戻るボタンなどがはいるかもしれない）-->
      <div class="boxse">
        <a href="javascript:void(0);"><img src="../imgs/se.png" alt="" width="25" height="auto"></a>
      </div>
      <!--ロゴ画像のボックス-->
      <div class="box1">
        <a href="index.php"><img src="../imgs/logo.png" alt="" width="140" height="auto"></a>
      </div>
      <!--PC版表示の時のメニューボックス-->
      <div class="box2">
        <a href="index.php"><div class="box2-1">Home</div></a>
        <a href="search.php"><div class="box2-2">Search</div></a>
        <a href="mypage.php"><div class="box2-3">My page</div></a>
      </div>
      <!--マイページに遷移する為のボックス-->
      <div class="box3">
      <div class="box3-1">
        <a href="mypage.php"><img src="../imgs/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="schedule.php"><img src="../imgs/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
    </div>
</header>
<!--header終わり-->


<!--
maincontents
-->
<div class="main_content col-md-10 col-xs-12 col-lg-12">

    <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"><?php echo $name[0] ?></h1>

  <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="../imgs/article_img.jpg" alt="祭り"></a>
  </div>

  <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h5 class="date"><?php echo $start_time[0] ?></h5>
    <h2>The next full edition of the Kanda Matsuri is scheduled for May 2019</h2>
    <i class="fas fa-user">abc</i>
    <i class="fas fa-heart">100</i>
  </div>

  <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <p><?php echo $description[0] ?></p>

  </div>

  <iframe class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"src="http://maps.google.com/maps?q=<?php echo $x[0] ?>,<?php echo $y[0] ?>&output=embed" width=100% height="450" frameborder="0" style="border:0"></iframe>

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Souvenir</h2>
  </div>
  <div class="souvenir_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
      <img src="../imgs/omiyage_01.jpg" alt="ねぶた祭お土産">
      <img src="../imgs/omiyage_02.jpg" alt="ねぶた祭お土産">
      <img src="../imgs/omiyage_03.jpg" alt="ねぶた祭お土産">
      <img src="../imgs/omiyage_04.jpg" alt="ねぶた祭お土産">
  </div>

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Comment</h2>
  </div>

  <div class="comment_content col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <div class="comment_user col-xs-4 col-md-4 col-lg-4">
      <i class="fas fa-user fa-3x"></i>
      <h2><?php echo $review_user[0] ?></h2>
    </div>
    <div class="comment col-xs-8 col-md-8 col-lg-6">
      <p><?php echo $review_content[0] ?></p>
    </div>
  </div>

  <div class="comment_content col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <div class="comment_user col-xs-4 col-md-4 col-lg-4">
      <i class="fas fa-user fa-3x"></i>
      <h2><?php echo $review_user[1] ?></h2>
    </div>
    <div class="comment col-xs-8 col-md-8 col-lg-6">
      <p><?php echo $review_content[1] ?></p>
    </div>
  </div>

  <div class="comment_content col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <div class="comment_user col-xs-4 col-md-4 col-lg-4">
      <i class="fas fa-user fa-3x"></i>
      <h2><?php echo $review_user[2] ?></h2>
    </div>
    <div class="comment col-xs-8 col-md-8 col-lg-6">
      <p><?php echo $review_content[2] ?></p>
    </div>
  </div>

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Tag</h2>
  </div>

  <div class="tag col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#">#Japan</a>
    <a href="#">#Tokyo</a>
    <a href="#">#Kanda</a>
    <a href="#">#Festival</a>
    <a href="#">#Somanypeople</a>
    <a href="#">#happy</a>
    <a href="#">#June</a>

  </div>
    </div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--フッター（SP版では非表示になってる）-->
<footer>
<div class="box8">
  <div class="box8-1">
    <p class="copy">
      Copyright © 2018 MATURI All Rights Reserved<br>
    </p>
  </div>
</div>
</footer>

</body>
</html>
