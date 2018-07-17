<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
    <script type="text/javascript" src="{_JS_DIR}/config.js"></script>
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

    <!-- maincontents -->
    <div class="mypage" id="myTapContent">
      <div class="mypage-inner">
        <!--ユーザーの画像表示？-->
        <div class="my_image">
          <img src="{_IMGS_DIR}/gaijin.png" class="">
        </div>
        <!--ユーザーネーム表示-->
        <div class="user_name_box"></div>
        <!--設定変更-->
        <div class="set">
          <form method="post">
            <!--ユーザーネーム変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>USERNAME</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="{_IMGS_DIR}/hensyu.png" onclick="btn1_click()"></a>
              </div>
              <input type="text" id="name" placeholder="USER NAME">
            </div>
            <!--メールアドレス変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>kimu0227@gmail.com</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="{_IMGS_DIR}/hensyu.png" onclick="btn2_click()"></a>
              </div>
              <input type="text" id="mailaddress" placeholder="mailaddress">
            </div>
            <!--パスワード変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>kimukimukimu</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="{_IMGS_DIR}/hensyu.png" onclick="btn3_click()"></a>
              </div>
              <input type="password" id="password" placeholder="password">
            </div>
            <!--出身国-->
            <div class="config_box">
              <div class="config_box_name">
                <p>出身国</p>
              </div>
            </div>
            <!--言語変更-->
            <select name="country_id" class="country-width">
              <option value="">言語変更</option>
              <option value="1">Japn</option>
              <option value="2">English</option>
            </select>
            <div class="user_button">
              <input type="submit" class="henkou" value="変更">
            </div>
          </form>
        </div>
        <!--お問い合わせ-->
        <div class="company">
          <div class="company-1">
            <a href="{$SCRIPT_NAME}?type=logout" class="exit3">Sign out</a>
          </div>
          <div class="company-2">
            <a href="#" class="exit3">Contact</a>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
  </body>
</html>
