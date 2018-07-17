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
        <div class="adduser">
          <form method="post" action="../app/Sign-up.php">
            <div><p>error表示</p></div>
              <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
              <input type="password" class="password" name="password" placeholder="Password">
              <input type="password" class="password" name="passwordSecond" placeholder="Password Second">
              <input type="text" class="name" name="user_name" placeholder="Name">
              <select name="country_id" class="country-width">
                <option value="">Select Country</option>
                <option value="1">japan</option>
              </select>
              <input type="submit" class="touroku" value="Create an account">
          </form>
          <div class="company">
            <a href="{$SCRIPT_NAME}?type=sign-in" class="exit3">back</a>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
  </body>
</html>
