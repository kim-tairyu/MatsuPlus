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
        <h1>管理者画面</h1>


        <div class="tab-pane fade in active" id="recommend">
          <!--タブ切り替え-->
          <div class="tab_wrap">
          <input id="tab1" type="radio" name="tab_btn" checked="checked">
          <input id="tab2" type="radio" name="tab_btn">
          <div class="tab_area">
            <div class="week_mon">
              <a href="#"><label class="tab1_label" for="tab1">ユーザアカウント管理</label></a>
              <a href="#" class="month2"><label class="tab2_label" for="tab2">自治体アカウント管理</label></a>
            </div>
          </div>
          <!--main-->
          <div class="panel_area">
            <!--WEEKタブ-->
            <div id="panel1" class="tab_panel">
              <div class="week_mon3">
                <a href="#">アカウント一覧</a>
                <a href="#">アカウント作成</a>
                <a href="#">アカウント編集</a>
                <a href="#">アカウント削除</a>
              </div>
              <div>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">user_id</th>
                      <th scope="col">password</th>
                      <th scope="col">user_name</th>
                      <th scope="col">mail_address</th>
                      <th scope="col">country</th>
                      <th scope="col">language</th>
                      <th scope="col">user_status</th>
                      <th scope="col">user_icon</th>
                      <th scope="col">authority</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach from=$users item=user}
                    <tr class="table">
                      <td>{$user.user_id}</td>
                      <td>{$user.password}</td>
                      <td>{$user.user_name}</td>
                      <td>{$user.mail_address}</td>
                      <td>{$user.country_name}</td>
                      <td>{$user.language}</td>
                      <td>{$user.user_status}</td>
                      <td>{$user.user_icon}</td>
                      <td>{$user.authority}</td>
                    </tr>
                    {/foreach}
                  </tbody>
                </table> 
              </div>
            </div>
            <!--MONTHタブ-->
            <div id="panel2" class="tab_panel">
              <div class="week_mon3">
                <a href="#">アカウント一覧</a>
                <a href="#">アカウント作成</a>
                <a href="#">アカウント編集</a>
                <a href="#">アカウント削除</a>
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
