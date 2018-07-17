<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

    <!-- maincontents -->
    <div class="box4" id="myTapContent">
      <div class="box4-inner">
        <div class="schedule" id="calendar">
          <table id="calendar-table">
            <thead id="calendar-header">
              <tr>
                <td class="weekday"><a>←</a></td>
                <td class="weekday"></td>
                <td class="weekday"></td>
                <td class="month">2018/06</td>
                <td class="weekday"></td>
                <td class="weekday"></td>
                <td class="weekday"><a>→</a></td>
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
        </div>
        <!--何月何日のエリア-->
        <div class="schedule_info">
          <div class="schedule_info_day"><h1 id="schedule_info_day">何月何日の予定</h1></div>
          <div class="search_results_box">
                <!--結果1-->
                <div class="search_results_box1-1">
                  <a href="#">
                    <div class="search_results_box2">
                      <div class="search_results_box2-1">
                        <img src="{_IMGS_DIR}/article_img.jpg" class="event_image">
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
                        <img src="{_IMGS_DIR}/article_img.jpg" class="event_image">
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
                        <img src="{_IMGS_DIR}/article_img.jpg" class="event_image">
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
