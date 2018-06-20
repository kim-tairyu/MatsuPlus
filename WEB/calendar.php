<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>スケジュール</title>
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

      <div class="schedule">
      <table>
        <tr>
            <td class="weekday"><a href="#">←</a></td>
            <td class="weekday"></td>
            <td class="weekday"></td>
            <td class="month">1月</td>
            <td class="weekday"></td>
            <td class="weekday"></td>
            <td class="weekday"><a href="#">→</a></td>
        </tr>
        <tr>
            <td class="weekday">Sun</td>
            <td class="weekday">Mon</td>
            <td class="weekday">Tue</td>
            <td class="weekday">Wed</td>
            <td class="weekday">Thu</td>
            <td class="weekday">Fri</td>
            <td class="weekday">Sat</td>
        </tr>
        <tr>
            <td>   </td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
        </tr>
        <tr>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
            <td>13</td>
        </tr>
        <tr>
            <td>14</td>
            <td>15</td>
            <td>16</td>
            <td>17</td>
            <td>18</td>
            <td>19</td>
            <td>20</td>
        </tr>
        <tr>
            <td>21</td>
            <td>22</td>
            <td>23</td>
            <td>24</td>
            <td>25</td>
            <td>26</td>
            <td>27</td>
        </tr>
        <tr>
            <td>28</td>
            <td>29</td>
            <td>30</td>
            <td>31</td>
            <td>  </td>
            <td>  </td>
            <td>  </td>
        </tr>
        </table>
    </div>

            <div class="schedule_info">
                <div class="schedule_info_day"><h1>○○月○○日の予定</h1></div>
                <div class="schedule_info_event">
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>
                    <div class="schedule_info_event_box">
                      <img src="../imgs/nebuta.jpg" class="event_image">
                    </div>

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
