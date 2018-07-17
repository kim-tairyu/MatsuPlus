<?php
/* Smarty version 3.1.32, created on 2018-07-13 02:54:44
  from '/Applications/MAMP/htdocs/matsuri/src/View/templates/user/sign-up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b481474ecfa74_53216744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae51cf772a26471e620f563a48e76fc19db4d657' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/src/View/templates/user/sign-up.tpl',
      1 => 1531450483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b481474ecfa74_53216744 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
  <head>
    <?php $_smarty_tpl->_subTemplateRender(_HTML_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </head>
  <body>
    <!--header-->
    <?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

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
            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=sign-in" class="exit3">back</a>
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
