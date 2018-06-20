<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>検索</title>
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

<div class="box4">
<div class="box4-inner">

<div class="search">
<form>
<p>祭り名から探す</p>
<input type="text" placeholder="Search" class="search_text">
<p>開催地から探す</p>
<select class="pref_name">
<option value="" selected>都道府県</option>
<option value="北海道">北海道</option>
<option value="青森県">青森県</option>
<option value="岩手県">岩手県</option>
<option value="宮城県">宮城県</option>
<option value="秋田県">秋田県</option>
<option value="山形県">山形県</option>
<option value="福島県">福島県</option>
<option value="茨城県">茨城県</option>
<option value="栃木県">栃木県</option>
<option value="群馬県">群馬県</option>
<option value="埼玉県">埼玉県</option>
<option value="千葉県">千葉県</option>
<option value="東京都">東京都</option>
<option value="神奈川県">神奈川県</option>
<option value="新潟県">新潟県</option>
<option value="富山県">富山県</option>
<option value="石川県">石川県</option>
<option value="福井県">福井県</option>
<option value="山梨県">山梨県</option>
<option value="長野県">長野県</option>
<option value="岐阜県">岐阜県</option>
<option value="静岡県">静岡県</option>
<option value="愛知県">愛知県</option>
<option value="三重県">三重県</option>
<option value="滋賀県">滋賀県</option>
<option value="京都府">京都府</option>
<option value="大阪府">大阪府</option>
<option value="兵庫県">兵庫県</option>
<option value="奈良県">奈良県</option>
<option value="和歌山県">和歌山県</option>
<option value="鳥取県">鳥取県</option>
<option value="島根県">島根県</option>
<option value="岡山県">岡山県</option>
<option value="広島県">広島県</option>
<option value="山口県">山口県</option>
<option value="徳島県">徳島県</option>
<option value="香川県">香川県</option>
<option value="愛媛県">愛媛県</option>
<option value="高知県">高知県</option>
<option value="福岡県">福岡県</option>
<option value="佐賀県">佐賀県</option>
<option value="長崎県">長崎県</option>
<option value="熊本県">熊本県</option>
<option value="大分県">大分県</option>
<option value="宮崎県">宮崎県</option>
<option value="鹿児島県">鹿児島県</option>
<option value="沖縄県">沖縄県</option>
</select>

<p>日付から探す</p>
<select name="pref_name">
<option value="" selected>月</option>
<option value="1月1日">1月1日</option>
<option value="1月2日">1月2日</option>
<option value="1月3日">1月3日</option>
<option value="1月4日">1月4日</option>
<option value="1月5日">1月5日</option>
<option value="1月6日">1月6日</option>
<option value="1月7日">1月7日</option>
<option value="1月8日">1月8日</option>
<option value="1月9日">1月9日</option>
<option value="1月10日">1月10日</option>
<option value="1月11日">1月12日</option>
<option value="1月12日">1月13日</option>
<option value="1月13日">1月14日</option>
<option value="1月14日">1月15日</option>
<option value="1月15日">1月16日</option>
<option value="1月16日">1月17日</option>
<option value="1月17日">1月18日</option>
<option value="1月18日">1月19日</option>
<option value="1月19日">1月20日</option>
<option value="1月20日">1月21日</option>
<option value="1月21日">1月22日</option>
<option value="1月22日">1月23日</option>
<option value="1月23日">1月24日</option>
<option value="1月24日">1月25日</option>
<option value="1月25日">1月26日</option>
<option value="1月26日">1月27日</option>
<option value="1月27日">1月28日</option>
<option value="1月28日">1月29日</option>
<option value="1月29日">1月29日</option>
<option value="1月30日">1月30日</option>
<option value="1月31日">1月31日</option>
</select>


<p>タグから探す</p>
<div class="tag_li">
    <a href="#" class="tag">#東京</a>
    <a href="#" class="tag">#千葉</a>
    <a href="#" class="tag">#埼玉</a>
    <a href="#" class="tag">#神奈川</a>
    <a href="#" class="tag">#青森</a>
    <a href="#" class="tag">#ねぶた</a>
    <a href="#" class="tag">#屋台</a>
    <a href="#" class="tag">#神輿</a>
</div>
    </form>
</div>
    <input type="submit" class="kensaku" value="検索">
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
