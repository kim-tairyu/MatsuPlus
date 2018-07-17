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
        <div class="user">
          <form method="post" action="{$SCRIPT_NAME}?type=login">
              <input type="text" class="mailaddress" name="id" placeholder="User ID or Mail Address">
              <input type="password" class="password" name="pass" placeholder="Password">
            <div><p></p></div>
            <input type="submit" class="login" value="Login">
          </form>
          <div class="company2">
            <a href="{$SCRIPT_NAME}?type=sign-up" class="admin_new">SignUp</a>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
  </body>
</html>
