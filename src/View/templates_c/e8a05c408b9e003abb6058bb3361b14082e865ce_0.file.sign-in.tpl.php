<?php
/* Smarty version 3.1.32, created on 2018-07-23 16:08:41
  from 'C:\xampp\htdocs\kimu\src\View\templates\user\sign-in.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55e16917f502_16228343',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8a05c408b9e003abb6058bb3361b14082e865ce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\user\\sign-in.tpl',
      1 => 1532354437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55e16917f502_16228343 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="user">
          <h2>SIGN IN</h2>
          <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=sign-in&action=login">
            <input type="text" class="mailaddress" name="id" placeholder="User ID or Mail Address">
            <input type="password" class="password" name="pass" placeholder="Password">
            <div><p style="color: red"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</p></div>
            <input type="submit" class="login" value="Login">
          </form>
          <div class="company2">
            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=sign-up" class="admin_new">SignUp</a>
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
