<?php
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
<title>祭りお気に入り</title>
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
<!--画像の保存を禁止するという意味（後で外してもよい(UXの観点)）-->
<body>
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
        <a href="<?php echo $link_mypage ?>"><div class="box2-3"><?php echo $link_mypage_name ?></div></a>
      </div>
      <!--マイページに遷移する為のボックス-->
      <div class="box3">
      <div class="box3-1">
        <a href="<?php echo $link_mypage ?>"><img src="../imgs/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="<?php echo $link_schedule ?>"><img src="../imgs/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
    </div>
</header>
<!--header終わり-->

<!--
maincontents
-->

<!--全体をかこっているwraperのようなもの-->
<div class="fevpage">
  <div class="fevpage-inner">

<div class="fevpage-title">
  <p>Festival Favorites</p>
</div>

    <!--祭りお気に入りボックス１-->
    <div class="fev-box">
      <a href="javascript:void(0);">
      <div class="fev-imagebox"><img src="../imgs/fev2.png" class="fev-image"></div>
      <div class="fev-td-box">
        <div class="fev-day"><p class="">August 26</p></div>
        <div class="fev-title"><p class="">NEBUTA MATURI</p></div>
      </div>
    </a>
    </div>
    <!--祭りお気に入りボックス２-->
    <div class="fev-box">
      <a href="javascript:void(0);">
      <div class="fev-imagebox"><img src="../imgs/fev1.png" class="fev-image"></div>
      <div class="fev-td-box">
        <div class="fev-day"><p class="">July 1～5</p></div>
        <div class="fev-title"><p class="">GION MATURI</p></div>
      </div>
    </a>
    </div>
    <!--祭りお気に入りボックス３-->
    <div class="fev-box">
      <a href="javascript:void(0);">
      <div class="fev-imagebox"><img src="../imgs/fev3.png" class="fev-image"></div>
      <div class="fev-td-box">
        <div class="fev-day"><p class="">August 26</p></div>
        <div class="fev-title"><p class="">TETUTU MATURI</p></div>
      </div>
    </a>
    </div>

  </div>
</div>


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
