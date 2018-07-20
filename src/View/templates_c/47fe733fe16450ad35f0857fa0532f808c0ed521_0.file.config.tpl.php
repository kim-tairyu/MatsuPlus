<?php
/* Smarty version 3.1.32, created on 2018-07-16 14:07:44
  from '/Applications/MAMP/htdocs/matsuri/src/View/templates/mypage/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4ca6b0a33951_04660932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47fe733fe16450ad35f0857fa0532f808c0ed521' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/src/View/templates/mypage/config.tpl',
      1 => 1531749895,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4ca6b0a33951_04660932 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
  <head>
    <?php $_smarty_tpl->_subTemplateRender(_HTML_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo _JS_DIR;?>
/config.js"><?php echo '</script'; ?>
>
  </head>
  <body>
    <!--header-->
    <?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- maincontents -->
    <div class="mypage" id="myTapContent">
      <div class="mypage-inner">
        <!--ユーザーの画像表示？-->
        <div class="my_image">
          <img src="<?php echo _IMGS_DIR;?>
/gaijin.png" class="">
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
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn1_click()"></a>
              </div>
              <input type="text" id="name" placeholder="USER NAME">
            </div>
            <!--メールアドレス変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>kimu0227@gmail.com</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn2_click()"></a>
              </div>
              <input type="text" id="mailaddress" placeholder="mailaddress">
            </div>
            <!--パスワード変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>kimukimukimu</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn3_click()"></a>
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
            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=logout" class="exit3">Sign out</a>
          </div>
          <div class="company-2">
            <a href="#" class="exit3">Contact</a>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    <?php $_smarty_tpl->_subTemplateRender(_FOOTER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </body>
</html>
<?php }
}
