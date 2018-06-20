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
</header>
<!--header終わり-->


<!--
maincontents
-->
<div class="main_content col-md-10 col-xs-12 col-lg-12">

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

  <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">

    <div class="tab-pane fade in active" id="recommend">
      <div class="week_mon">
        <a href="#">WEEK</a>
        <a href="#" class="month">MONTH</a>
      </div>

      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/matsuri_01.jpg" alt="祭り"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/matsuri_02.jpg" alt="祭り"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/matsuri_01.jpg" alt="祭り"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/matsuri_02.jpg" alt="祭り"></a>
      </div>
    </div>

    <div class="tab-pane fade" id="vote">
      2
    </div>

    <div class="tab-pane fade" id="news">
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
        <h6 class="author_big">abc</h6>
        <h6 class="date_big">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5 ">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h4 class="news_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
        <h6 class="author_big">abc</h6>
        <h6 class="date_big">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5 col-lg-offset-1">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

      <div class="home_img home_img_sub col-xs-6 col-md-6 col-lg-5">
        <a href="#"><img src="../imgs/news_01.jpg" alt="祭りニュース"></a>
        <h5 class="news_title_sub">Main procession passes along Cuo-dori Street</h5>
        <h6 class="author_sub">abc</h6>
        <h6 class="date_sub">2018.6.15</h6>
      </div>

    </div>

    <div class="tab-pane fade" id="season">
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/spring.jpg" alt="春"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/spring.jpg" alt="春"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/spring.jpg" alt="春"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/spring.jpg" alt="春"></a>
      </div>
    </div>

    <div class="tab-pane fade" id="area">
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
      <div class="home_img col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
        <a href="#"><img src="../imgs/hokkaidou.jpg" alt="北海道"></a>
      </div>
    </div>

  </div>


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
