<?php
/* Smarty version 3.1.32, created on 2018-07-18 16:57:01
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/user/sign-up.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4f715dbe0078_65877163',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a21b3f3460d44863d8b3f11396c6a9e4a19e1dc6' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/user/sign-up.tpl',
      1 => 1531933020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4f715dbe0078_65877163 (Smarty_Internal_Template $_smarty_tpl) {
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
          <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=sign-up?action=signUp">
            <div><p>error表示</p></div>
              <input type="text" class="mailaddress" name="user_id" placeholder="User ID">
              <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
              <input type="password" class="password" name="password" placeholder="Password">
              <input type="password" class="password" name="passwordSecond" placeholder="Password Second">
              <input type="text" class="name" name="user_name" placeholder="Name">
              <select name="country_id" class="country-width">
              <option value="">Select Country</option>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countrys']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
