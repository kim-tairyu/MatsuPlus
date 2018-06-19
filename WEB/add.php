<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>新規登録</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="../css/desin2.css?update=20180130" />
<link rel="stylesheet" href="../css/desin.css">
<link rel="SHORTCUT ICON" href="../imgs/M.ico">
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
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
<body onMouseDown="return false;" onSelectStart="return false">
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
        <a href="javascript:void(0);"><img src="../imgs/logo.png" alt="" width="140" height="auto"></a>
      </div>
      <!--PC版表示の時のメニューボックス-->
      <div class="box2">
        <a href="javascript:void(0);"><div class="box2-1">Home</div></a>
        <a href="javascript:void(0);"><div class="box2-2">Search</div></a>
        <a href="javascript:void(0);"><div class="box2-3">My page</div></a>
      </div>
      <!--マイページに遷移する為のボックス-->
      <div class="box3">
      <div class="box3-1">
        <a href="javascript:void(0);"><img src="../imgs/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="javascript:void(0);"><img src="../imgs/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
  </div>
</header>
<!--header終わり-->


<!--
maincontents
-->


<div class="box4">
<div class="box4-inner">
      <div class="adduser">
        <form method="post">
            <input type="text" class="name" placeholder="名前">
            <input type="text" class="mailaddress" placeholder="mailaddress">
            <input type="password" class="password" placeholder="password">
            <input type="password" class="password-2" placeholder="password確認">
            <input type="text" class="kuni" placeholder="出身国">
        </form>
          <div class="user_button">
            <a class="exit" href="index.html">戻る</a>
            <input type="submit" class="touroku" value="登録">
          </div>
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
