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

                <div class="tab-pane fade in active" id="recommend">
                  <!--タブ切り替え-->
                  <div class="tab_wrap">
                  <input id="tab1" type="radio" name="tab_btn" checked="checked">
                  <input id="tab2" type="radio" name="tab_btn">
                  <div class="tab_area">
                    <div class="week_mon">
                      <a href="#"><label class="tab1_label" for="tab1">お祭り管理</label></a>
                      <a href="#" class="month2"><label class="tab2_label" for="tab2">記事管理</label></a>
                    </div>
                  </div>
                  <!--main-->
                  <div class="panel_area">
                    <!--WEEKタブ-->
                    <div id="panel1" class="tab_panel">
                      <div id="dnweb-tabtest">
                          <!-- タブの切替部分 -->
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tabtest1" data-toggle="tab">1</a></li>
                              <li><a href="#tabtest2" data-toggle="tab">2</a></li>
                              <li><a href="#tabtest3" data-toggle="tab">3</a></li>
                              <li><a href="#tabtest4" data-toggle="tab">4</a></li>
                          </ul>

                          <!-- タブのコンテンツ部分 -->
                          <div class="tab-content">
                              <div class="tab-pane active" id="tabtest1">AAAA</div>
                              <div class="tab-pane" id="tabtest2">BBBB</div>
                              <div class="tab-pane" id="tabtest3">CCCC</div>
                              <div class="tab-pane" id="tabtest4">DDDD</div>
                          </div>
                      </div>
                    </div>
                    <!--MONTHタブ-->
                    <div id="panel2" class="tab_panel">
                      <div class="week_mon3">
                        <a href="#">記事情報一覧</a>
                        <a href="#">記事情報作成</a>
                        <a href="#">記事情報編集</a>
                        <a href="#">記事情報削除</a>
                      </div>
                    </div><!--MONTHタブ終わり-->
                  </div><!--main終わり-->
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
