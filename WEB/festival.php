<?php

if(!isset($_GET['festival_id'])){
    header("Location:index.php");
}

// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;
if(isset($_GET["festival_id"])) {
  $fes_id = $_GET["festival_id"];
  // 祭り情報を取得
  require_once('../app/DAO/FestivalDAO.class.php');
  $festivalDAO = new FestivalDAO();
  $festivals   = $festivalDAO->getOneFestival($fes_id);
  foreach($festivals as $festival){
    $festival_id[] = $festival['festival_id'].PHP_EOL;
    $name[]        = $festival['festival_name'].PHP_EOL;
    $img[]         = $festival['festival_img'].PHP_EOL;
    $description[] = $festival['description'].PHP_EOL;
    $location[]    = $festival['location'].PHP_EOL;
    $start_time[]  = $festival['start_time'].PHP_EOL;
    $end_time[]    = $festival['end_time'].PHP_EOL;
    $x[]           = $festival['x_coordinate'].PHP_EOL;
    $y[]           = $festival['y_coordinate'].PHP_EOL;
    $movie_url[]   = $festival['movie_url'].PHP_EOL;
  }
}

// レビュー情報を取得
require_once('../app/DAO/ReviewDAO.class.php');
$reviewDAO = new ReviewDAO();
$reviews   = $reviewDAO -> getReviewInfo($fes_id);

foreach($reviews as $review){
    $review_festival_id[] = $review['festival_id'].PHP_EOL;
    $review_user[] = $review['user_name'].PHP_EOL;
    $review_content[] = $review['review'].PHP_EOL;
    $review_star[] = $review['star'].PHP_EOL;
}

// 登録処理

// スケジュール仮データ
$days ="2018-06-018";
$schedule_id = 1;
// レビュー仮データ

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

//レビュー☆表示
function r_star($star){
    for($i=0; $i<$star; $i++){
        echo "☆";
    }
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Festival Detail</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css?update=20180203" />
    <link href="<?php echo $pathList->cssPath; ?>modal.css?update=20180203" rel="stylesheet" type="text/css">
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<!--カレンダー表示読み込み-->
<link rel="stylesheet" href="https://unpkg.com/flatpickr/dist/flatpickr.min.css">
<script src="https://unpkg.com/flatpickr"></script>
<!--カレンダー表示読み込みおわり-->
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
</script>
</head>
  <body>
<!-- Bootstrap -->
    <link href="<?php echo $pathList->cssPath; ?>bootstrap.min.css" rel="stylesheet">
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
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
  <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"><?php echo $name[0] ?></h1>
    <!--祭りor記事画像(仮)-->
  <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="<?php echo $pathList->imgsPath; ?><?php echo $img[0] ?>" alt="祭り"></a>
  </div>
  <!--お気に入りボタン-->
  <div class="fev_button_box">
  <div class="fev_button"><p>♡</p></div>
  <!--スケジュール追加ボタン-->
  <div class="fev_button2" id="Modal_Open" class="btn_price"><p>+</p></div>
  </div>
  <!--モーダルウインドウ-->
  <div id="Modal_Content">
      <p>Scheduling</p>
      <!--イベント-->
      <input type="text" id="event" placeholder="event"><br/>
      <!--場所-->
      <input type="text" id="place" placeholder="place"><br/>
      <div class="suke-box">
      <!--カレンダー開始1-->
      <input type="text" id="calendar" class="suke-box1" placeholder="startDay" data-mindate=today>
      <!--時間開始1-->
      <select name="time_id" id="time">
        <option value="time"></option>
        <option value="">0:00</option>
        <option value="">0:30</option>
        <option value="">1:00</option>
        <option value="">1:30</option>
        <option value="">2:00</option>
        <option value="">2:30</option>
        <option value="">3:00</option>
        <option value="">3:30</option>
        <option value="">4:00</option>
        <option value="">4:30</option>
        <option value="">5:00</option>
        <option value="">5:30</option>
        <option value="">6:00</option>
        <option value="">6:30</option>
        <option value="">7:00</option>
        <option value="">7:30</option>
        <option value="">8:00</option>
        <option value="">8:30</option>
        <option value="">9:00</option>
        <option value="">9:30</option>
        <option value="">10:00</option>
        <option value="">10:30</option>
        <option value="">11:00</option>
        <option value="">11:30</option>
        <option value="">12:00</option>
        <option value="">12:30</option>
        <option value="">13:00</option>
        <option value="">13:30</option>
        <option value="">14:00</option>
        <option value="">14:30</option>
        <option value="">15:00</option>
        <option value="">15:30</option>
        <option value="">16:00</option>
        <option value="">16:30</option>
        <option value="">17:00</option>
        <option value="">17:30</option>
        <option value="">18:00</option>
        <option value="">18:30</option>
        <option value="">19:00</option>
        <option value="">19:30</option>
        <option value="">20:00</option>
        <option value="">20:30</option>
        <option value="">21:00</option>
        <option value="">21:30</option>
        <option value="">22:00</option>
        <option value="">22:30</option>
        <option value="">23:00</option>
        <option value="">23:30</option>
        <option value="">24:00</option>
      </select>
      </div>
      <!--カレンダー開始１と時間開始１終了-->
      <div class="suke-box">
      <!--カレンダー開始2-->
      <input type="text" id="calendar" class="suke-box1" placeholder="endDay" data-mindate=today>
      <!--時間開始2-->
      <select name="time_id" id="time">
        <option value="time"></option>
        <option value="">0:00</option>
        <option value="">0:30</option>
        <option value="">1:00</option>
        <option value="">1:30</option>
        <option value="">2:00</option>
        <option value="">2:30</option>
        <option value="">3:00</option>
        <option value="">3:30</option>
        <option value="">4:00</option>
        <option value="">4:30</option>
        <option value="">5:00</option>
        <option value="">5:30</option>
        <option value="">6:00</option>
        <option value="">6:30</option>
        <option value="">7:00</option>
        <option value="">7:30</option>
        <option value="">8:00</option>
        <option value="">8:30</option>
        <option value="">9:00</option>
        <option value="">9:30</option>
        <option value="">10:00</option>
        <option value="">10:30</option>
        <option value="">11:00</option>
        <option value="">11:30</option>
        <option value="">12:00</option>
        <option value="">12:30</option>
        <option value="">13:00</option>
        <option value="">13:30</option>
        <option value="">14:00</option>
        <option value="">14:30</option>
        <option value="">15:00</option>
        <option value="">15:30</option>
        <option value="">16:00</option>
        <option value="">16:30</option>
        <option value="">17:00</option>
        <option value="">17:30</option>
        <option value="">18:00</option>
        <option value="">18:30</option>
        <option value="">19:00</option>
        <option value="">19:30</option>
        <option value="">20:00</option>
        <option value="">20:30</option>
        <option value="">21:00</option>
        <option value="">21:30</option>
        <option value="">22:00</option>
        <option value="">22:30</option>
        <option value="">23:00</option>
        <option value="">23:30</option>
        <option value="">24:00</option>
      </select>
      </div>
      <!--コメント-->
      <textarea id="free" placeholder=""></textarea>


      <script>
      // flatpickrの初期化
      flatpickr('#calendar');
      </script>


      <!--<button id="Modal_Enter" class="btn_link">はい</button>
      <button id="Modal_Close" class="btn_link">いいえ</button>
      <input type="checkbox" id="Modal_Cbox"/>-->
  </div>
  <!--記事の日付とサブタイトル？-->
  <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h5 class="date"><?php echo $start_time[0] ?></h5>
    <h2>The next full edition of the Kanda Matsuri is scheduled for May 2019</h2>
  </div>
  <!--記事本文-->
  <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <p><?php echo $description[0] ?></p>
  </div>
  <!--動画-->
  <?php echo $movie_url[0] ?>
  <!--MAP-->
  <iframe class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"src="http://maps.google.com/maps?q=<?php echo $x[0] ?>,<?php echo $y[0] ?>&output=embed" width=100% height="450" frameborder="0" style="border:0"></iframe>
  <!--グッズ-->
  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Souvenir</h2>
  <div class="souvenir_img_box">
    <!--グッズ１-->
    <div class="souvenir_img_box2">
      <a href="#">
        <div class="souvenir_img_box3">
          <div class="souvenir_img_boxA">
            <img src="<?php echo $pathList->imgsPath; ?>omiyage_01.jpg" alt="ねぶた祭お土産">
          </div>
          <div class="souvenir_img_boxB">
            <h4 class="souvenir_title">OMAMORI</h4>
          </div>
        </div>
      </a>
    </div>
    <!--グッズ２-->
    <div class="souvenir_img_box2">
      <a href="#">
        <div class="souvenir_img_box3">
          <div class="souvenir_img_boxA">
            <img src="<?php echo $pathList->imgsPath; ?>omiyage_01.jpg" alt="ねぶた祭お土産">
          </div>
          <div class="souvenir_img_boxB">
            <h4 class="souvenir_title">OMAMORI</h4>
          </div>
        </div>
      </a>
    </div>
    <div class="souvenir_img_box2">
      <a href="#">
        <div class="souvenir_img_box3">
          <div class="souvenir_img_boxA">
            <img src="<?php echo $pathList->imgsPath; ?>omiyage_01.jpg" alt="ねぶた祭お土産">
          </div>
          <div class="souvenir_img_boxB">
            <h4 class="souvenir_title">OMAMORI</h4>
          </div>
        </div>
      </a>
    </div>
    <div class="souvenir_img_box2">
      <a href="#">
        <div class="souvenir_img_box3">
          <div class="souvenir_img_boxA">
            <img src="<?php echo $pathList->imgsPath; ?>omiyage_01.jpg" alt="ねぶた祭お土産">
          </div>
          <div class="souvenir_img_boxB">
            <h4 class="souvenir_title">OMAMORI</h4>
          </div>
        </div>
      </a>
    </div>

  </div>
  </div>
  <!--コメントエリア-->
  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
  <h2>Comment</h2>
  <!--コメント１-->
  <div class="comment_content">
    <div class="">
    <div class="comment_user_img">
        <img src="<?php echo $pathList->imgsPath; ?>user.jpg" alt="ユーザーアイコン">
    </div>
    <div class="comment_hosi">
      <p><?php r_star($review_star[0]) ?></p>
    </div>
    <div class="comment_user_name">
      <p><?php echo $review_user[0] ?></p>
    </div>
    <div class="comment">
      <p><?php echo $review_content[0] ?></p>
    </div>
    </div>
  </div>
  <!--コメント２-->
  <div class="comment_content">
    <div class="">
    <div class="comment_user_img">
        <img src="<?php echo $pathList->imgsPath; ?>user.jpg" alt="ユーザーアイコン">
    </div>
    <div class="comment_hosi">
      <p><?php r_star($review_star[1]) ?></p>
    </div>
    <div class="comment_user_name">
      <p><?php echo $review_user[1] ?></p>
    </div>
    <div class="comment">
      <p><?php echo $review_content[1] ?></p>
    </div>
    </div>
  </div>
  <!--コメント３-->
  <div class="comment_content">
    <div class="">
    <div class="comment_user_img">
        <img src="<?php echo $pathList->imgsPath; ?>user.jpg" alt="ユーザーアイコン">
    </div>
    <div class="comment_hosi">
      <p><?php r_star($review_star[2]) ?></p>
    </div>
    <div class="comment_user_name">
      <p><?php echo $review_user[2] ?></p>
    </div>
    <div class="comment">
      <p><?php echo $review_content[2] ?></p>
    </div>
    </div>
  </div>

  <!--コメント入力エリア-->
  <div class="comment_content2">
    <div class="comment_submit">
      <form action="cgi-bin/formmail.cgi" method="post">
      comment<br>
      <!--星評価-->
      <div class="user_hosi">
        <div class="evaluation">
          <input id="star1" type="radio" name="star" value="5" />
          <label for="star1"><span class="text">Very good</span>★</label>
          <input id="star2" type="radio" name="star" value="4" />
          <label for="star2"><span class="text">Good</span>★</label>
          <input id="star3" type="radio" name="star" value="3" />
          <label for="star3"><span class="text">Medium</span>★</label>
          <input id="star4" type="radio" name="star" value="2" />
          <label for="star4"><span class="text">Bad</span>★</label>
          <input id="star5" type="radio" name="star" value="1" />
          <label for="star5"><span class="text">Very Bad</span>★</label>
        </div>
      </div>
      <!--コメント記入-->
      <textarea name="kanso" rows="4" cols="40" class="comment_area"></textarea><br>
      <input type="submit" value="送信" class="comment_button">
      <input type="reset" value="リセット" class="comment_button">
      </form>
    </div>
  </div>
</div>
  <!--タグエリア-->
  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Tag</h2>
  </div>

  <div class="related_article_title_tag col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#" class="tag">#Japan</a>
    <a href="#" class="tag">#Tokyo</a>
    <a href="#" class="tag">#Kanda</a>
    <a href="#" class="tag">#Festival</a>
    <a href="#" class="tag">#Somanypeople</a>
    <a href="#" class="tag">#happy</a>
    <a href="#" class="tag">#June</a>
  </div>
  </div>
</div>
<!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
<script src="<?php echo $pathList->jsPath; ?>jquery.min.js"></script>
<!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<script src="<?php echo $pathList->jsPath; ?>bootstrap.min.js"></script>
<!---->
<script src="<?php echo $pathList->jsPath; ?>modal.js"></script>
<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
