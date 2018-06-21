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
<title>設定</title>
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
<div class="mypage">
  <div class="mypage-inner">
  <!--ユーザーの画像表示？-->
  <div class="my_image">
      <img src="../imgs/gaijin.png" class="">
  </div>
  <!--ユーザーネーム表示-->
  <div class="user_name_box">
    <p class="user_name">ユーザーネーム</p>
  </div>
  <!--設定変更-->
  <div class="set">
    <form method="post">
      <input type="text" class="name" placeholder="名前">
      <input type="text" class="mailaddress" placeholder="mailaddress">
      <input type="password" class="password" placeholder="password">
      <input type="password" class="password-2" placeholder="password確認">
      <select name="country_id" class="country-width">
        <option value="">選択してください</option>
        <option value="1">japan</option>
        <option value="2">america</option>
      </select>
      <div class="user_button">
        <input type="submit" class="henkou" value="変更">
      </div>
    </form>
  </div>
  <!--残りの設定の項目-->
  <div class="setting">
    <div class="setting-inner">
    <a href="#" class="exit2"><div class="inquiry_box">言語変更</div></a>
    <a href="../app/logout.php" class="exit2"><div class="logout_box">Log Out</div></a>
  </div>
</div>
<!--お問い合わせ-->
<div class="company">
  <a href="#" class="exit3">お問い合わせ</a>
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
