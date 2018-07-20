<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

    <!-- maincontents -->
    <div class="main_content">
      <div class="main_content_inner">
        <h1>編集者画面</h1>
        
        <ul class="kategori col-md-12 col-xs-12 col-lg-12">
          <li class="col-md-4 col-xs-2 active col-lg-2 ">
            <a href="#" data-toggle="tab" id="click3">お祭り管理</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#" data-toggle="tab" id="click4">記事管理</a>
          </li>
        </ul>
        
        <!--全体を囲むwrap-->
        <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">
          <!-- お祭り管理 -->
          <div class="tab-pane fade in active">
            <div class="week_mon2">
              <a href="#"><div class="month3">お祭り情報作成</div></a>
              <a href="#"><div class="month3">お祭り情報編集</div></a>
              <a href="#"><div class="month3">お祭り情報削除</div></a>
            </div>
          </div>
          <!-- 記事管理 -->
          <div class="tab-pane fade">
            <div class="week_mon2">
              <a href="#"><div class="month3">記事情報作成</div></a>
              <a href="#"><div class="month3">記事情報編集</div></a>
              <a href="#"><div class="month3">記事情報削除</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/tab-change.js"></script>
  </body>
</html>
