<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>Search</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript">
//検索画面表示非表示
$(function(){
  $(".openBtn").click(function(){
    $($(this).next(".search")).animate(
      {height: "toggle", opacity: "toggle"},

      "nomal"
    );
  });
});
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
<div class="box4" id="myTapContent">
  <div class="box4-inner">

    <!-- 表示・非表示ボタン -->
    <p class="openBtn"><i class="fa fa-chevron-down faColor"></i>SEARCHBOX　▼</p>
    <!-- 説明文 -->
    <div class="search">
      <!--formスタート-->
      <form method="post" action="Inspection.php">
        <p>祭り名から探す</p>
        <input type="text" placeholder="Search" class="search_text" name="festival_name">
        <p>開催地から探す</p>
        <select class="pref_name" name="location">
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
        <select name="start_day">
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
      <a href="#">
          <input type="submit" class="kensaku" value="検索">
      </a>
      <!--formおわり（下のsubmitはformの中だっけ？）-->
    </div>

  </div>
</div>

<!--検索結果表示エリア-->
      <div class="search_results_box">
        <div class="search_results_box_inner">
          <!--検索結果１-->
          <div class="search_results_box1">
                <a href="#">
                    <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
              </a>
          </div>
          <!--検索結果２（以下略）-->
          <div class="search_results_box1">
                <a href="#">
                    <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
              </a>
          </div>
          <div class="search_results_box1">
                <a href="#">
                    <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo $pathList->imgsPath; ?>article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
              </a>
          </div>

        </div>
    </div>



<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>

</body>
</html>
