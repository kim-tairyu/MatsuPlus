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
              <td> </td>
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
