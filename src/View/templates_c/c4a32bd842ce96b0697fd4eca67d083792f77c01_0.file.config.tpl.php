<?php
/* Smarty version 3.1.32, created on 2018-07-17 17:08:43
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/mypage/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4e229b164e77_98342286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a32bd842ce96b0697fd4eca67d083792f77c01' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/mypage/config.tpl',
      1 => 1531847140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4e229b164e77_98342286 (Smarty_Internal_Template $_smarty_tpl) {
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
/<?php echo $_SESSION['user_icon'];?>
" class="">
        </div>
        <!--ユーザーネーム表示-->
        <div class="user_name_box"></div>
        <!--設定変更-->
        <div class="set">
          <form method="post">
            <!--ユーザーネーム変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['user_name'];?>
</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn1_click()"></a>
              </div>
              <input type="text" id="name" placeholder="User Name">
            </div>
            <!--メールアドレス変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['mail_address'];?>
</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn2_click()"></a>
              </div>
              <input type="text" id="mailaddress" placeholder="Mail Address">
            </div>
            <!--パスワード変更-->
            <div class="config_box">
              <div class="config_box_name">
                <p>********</p>
              </div>
              <div class="config_box_hensyu">
                <a href="#"><img src="<?php echo _IMGS_DIR;?>
/hensyu.png" onclick="btn3_click()"></a>
              </div>
              <input type="password" id="password" placeholder="Password">
            </div>
            <!--出身国-->
            <div class="config_box">
              <div class="config_box_name">
                <p><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['country_name'];?>
</p>
              </div>
            </div>
            <!--言語変更-->
            <select name="country_id" class="country-width">
              <option value="">Change Language</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['language_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['language'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
?type=config&action=logout" class="exit3">Sign out</a>
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
