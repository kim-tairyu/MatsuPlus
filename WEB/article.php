<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>産学祭りの側</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="../css/style.css?update=20180130" />
<link type="text/css" rel="stylesheet" href="../css/style_kou.css?update=20180130" />
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
<div class="main_content col-md-10 col-xs-12 col-lg-12">

  <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="../imgs/article_img.jpg" alt="祭り"></a>
  </div>

  <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h5 class="date">2018.06.15</h5>
    <h2>The next full edition of the Kanda Matsuri is scheduled for May 2019</h2>
    <i class="fas fa-user">abc</i>
    <i class="fas fa-heart">100</i>
  </div>

  <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <p>The Kanda Matsuri is one of Tokyo's three most famous
        festivals, along with the Sanno Matsuri and Fukagawa
        Matsuri. It takes place in mid May in odd numbered
        years, alternating with the Sanno Matsuri which is held
        in even numbered years. The Kanda Festival consists of
        numerous events held over an entire week, but the main
        action usually happens over the weekend closest to May
        15. The highlights are a day-long procession through
        central Tokyo on Saturday, and parades of portable
        shrines (mikoshi) by the various neighborhoods on Sunday.</p>

  </div>

  <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <h2>Related article</h2>
  </div>

  <div class="home_img home_img_sub related_article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
    <div class="related_article_title_small">
      <h2 class="news_title_sub">Main procession passes along Cuo-dori Street</h2>
    </div>
  </div>
<<<<<<< HEAD
=======

  <div class="home_img home_img_sub related_article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
    <div class="related_article_title_small">
      <h2 class="news_title_sub">Main procession passes along Cuo-dori Street</h2>
    </div>
  </div>
</div>
>>>>>>> feature

  <div class="home_img home_img_sub related_article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
    <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
    <div class="related_article_title_small">
      <h2 class="news_title_sub">Main procession passes along Cuo-dori Street</h2>
    </div>
  </div>
</div>

<<<<<<< HEAD

=======
>>>>>>> feature
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
