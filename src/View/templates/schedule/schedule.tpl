<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
    <!--この順番で読み込む-->
    <link rel="stylesheet" href="{_CSS_DIR}/fullcalendar.css">
    <script src="{_JS_DIR}/moment.min.js"></script>
    <script src="{_JS_DIR}/jquery-ui.min.js"></script>
    <script src="{_JS_DIR}/fullcalendar.js"></script>
    <script>
      $(function () {
        $('#calendar').fullCalendar(
          {
            events:'../../src/Controller/ScheduleController.php',//表示するJSONのリンク
          }
        );
      });
    </script>
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

    <!-- maincontents -->
    <div class="box4" id="myTapContent">
      <div class="box4-inner">
        <!--カレンダー-->
        <div class="schedule" id="calendar"></div>
        <!--何月何日のエリア-->
        <div class="schedule_info">
          <div class="schedule_info_day"><h1 id="schedule_info_day">何月何日の予定</h1></div>
            <div class="search_results_box">
              <!--結果1-->
              <div class="search_results_box1-1">
                <a href="#">
                  <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="{_IMGS_SERVER_DIR}/article_img.jpg" class="event_image">
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
                      <img src="{_IMGS_SERVER_DIR}/article_img.jpg" class="event_image">
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
                      <img src="{_IMGS_SERVER_DIR}/article_img.jpg" class="event_image">
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
    {include file=_FOOTER_DIR}
  </body>
</html>
