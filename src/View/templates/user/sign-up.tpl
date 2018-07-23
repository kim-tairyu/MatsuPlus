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
<<<<<<< HEAD
<<<<<<< HEAD
          <form method="post" action="../app/Sign-up.php">
            <div><p>error表示</p></div>
=======
          <form method="post" action="{$SCRIPT_NAME}?type=sign-up?action=signUp">
            <div><p>error表示</p></div>
              <input type="text" class="mailaddress" name="user_id" placeholder="User ID">
>>>>>>> feature
              <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
              <input type="password" class="password" name="password" placeholder="Password">
              <input type="password" class="password" name="passwordSecond" placeholder="Password Second">
              <input type="text" class="name" name="user_name" placeholder="Name">
              <select name="country_id" class="country-width">
              <option value="">Select Country</option>
              {foreach from=$countrys item=country}
              <option value="{$country.country_id}">{$country.country_name}</option>
              {/foreach}
              </select>
              <input type="submit" class="touroku" value="Create an account">
=======
          <form method="post" action="{$SCRIPT_NAME}?type=sign-up&action=signUp">
            <h2>SIGN UP</h2>
            <div><p style="color: red">{$errMsg}</p></div>
            <input type="text" class="mailaddress" name="user_id" placeholder="User ID">
            <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
            <input type="password" class="password" name="password" placeholder="Password">
            <input type="password" class="password" name="passwordSecond" placeholder="Password Second">
            <input type="text" class="name" name="user_name" placeholder="Name">
            <select name="country_id" class="country-width">
              <option value="">Select Country</option>
              {foreach from=$countrys item=country}
              <option value="{$country.country_id}">{$country.country_name}</option>
              {/foreach}
            </select>
            <input type="submit" class="touroku" value="Create an account">
>>>>>>> feature
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
