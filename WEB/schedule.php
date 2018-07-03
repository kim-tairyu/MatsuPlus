<?php
// パス取得
require_once('../app/PathList.class.php');
$pathList = new PathList();

// アカウントチェック
include $pathList->accountCheckPath;

// スケジュールを取得
require_once('../app/DAO/ScheduleDAO.class.php');
$scheduleDAO = new ScheduleDAO();
$schedules   = $scheduleDAO->getSchedules($_SESSION["user_id"]);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>スケジュール</title>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Expires" content="10">
<link type="text/css" rel="stylesheet" href="<?php echo $pathList->cssPath; ?>style.css" />
<link rel="SHORTCUT ICON" href="<?php echo $pathList->imgsPath; ?>M.ico">
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $pathList->jsPath; ?>calendar.js"></script>
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
$("<?php echo $pathList->imgsPath; ?>").on("contextmenu",function(){
return false;
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

    <div class="schedule" id="calendar">
<!--
      <table id="calendar-table">
        <thead id="calendar-header">
          <tr>
              <td class="weekday"><a id="calendar-header-prev">←</a></td>
              <td class="weekday"></td>
              <td class="weekday"></td>
              <td class="month" id="calendar-header-title">2018/06</td>
              <td class="weekday"></td>
              <td class="weekday"></td>
              <td class="weekday"><a id="calendar-header-next">→</a></td>
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
        </thead>
      </table>
-->
    </div>
    <!--何月何日のエリア-->
    <div class="schedule_info">
        <div class="schedule_info_day"><h1 id="schedule_info_day">何月何日の予定</h1></div>
        <!---->
          <div class="search_results_box">
            <!--結果1-->
              <div class="search_results_box1-1">
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
              <!--結果２-->
              <div class="search_results_box1-1">
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
              <!--結果３-->
              <div class="search_results_box1-1">
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
  </div>
</div>

<!--フッター（SP版では非表示になってる）-->
<?php include $pathList->footerPath ?>
</body>
</html>
