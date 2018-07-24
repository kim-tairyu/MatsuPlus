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
            events:'{$SCRIPT_NAME}?type=schedule&action=calendar',//表示するJSONのリンク
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
        <h2>SCHEDULE</h2>
        <!--カレンダー-->
        <div class="schedule" id="calendar" style="width: 640px; height: 600px;"></div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
  </body>
</html>
