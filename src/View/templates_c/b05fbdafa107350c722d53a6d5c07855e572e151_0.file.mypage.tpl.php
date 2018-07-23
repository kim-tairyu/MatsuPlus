<?php
/* Smarty version 3.1.32, created on 2018-07-23 15:16:34
  from 'C:\xampp\htdocs\kimu\src\View\templates\mypage\mypage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55d5322c15d5_73374926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05fbdafa107350c722d53a6d5c07855e572e151' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\mypage\\mypage.tpl',
      1 => 1532323317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55d5322c15d5_73374926 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="mypage">
    <div class="mypage-inner">
      <!-- ユーザーのプロフィール画像 -->
      <div class="my_image">
        <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_SESSION['user_icon'];?>
" class="">
      </div>
      <!-- ユーザーネームをかこっているボックス -->
      <div class="user_name_box">
        <p class="user_name"><?php echo $_SESSION['user_name'];?>
</p>
      </div>
      <!--祭りお気に入り、記事お気に入り、設定への遷移ボタンをかこっているボックス-->
      <div class="fes_box">
        <div class="btn-fes_box"><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=favorites-festival" class="btn-fes">Festival Favorites</a></div>
        <div class="btn-fes_box"><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=favorites-article" class="btn-fes">Article Favorites</a></div>
        <div class="btn-fes_box"><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=config" class="btn-fes">Configuration</a></div>
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
