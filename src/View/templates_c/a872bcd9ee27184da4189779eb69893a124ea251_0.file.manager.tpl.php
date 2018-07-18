<?php
/* Smarty version 3.1.32, created on 2018-07-18 15:23:53
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4f5b8940adb1_08894620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a872bcd9ee27184da4189779eb69893a124ea251' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/manager.tpl',
      1 => 1531927429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4f5b8940adb1_08894620 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="main_content">
      <div class="main_content_inner">
        <h1>管理者画面</h1>
        
        <ul class="kategori col-md-12 col-xs-12 col-lg-12">
          <li class="col-md-2 col-xs-2 active col-lg-2">
            <a href="#" data-toggle="tab" id="click1">アカウント管理</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#" data-toggle="tab" id="click2">自治体、町内会アカウント管理</a>
          </li>
        </ul>
        
        <!--全体を囲むwrap-->
        <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">
          <!-- アカウント管理 -->
          <div class="tab-pane fade in active">
            <div class="week_mon2">
              <a href="#"><div class="month3">アカウント作成</div></a>
              <a href="#"><div class="month3">アカウント編集</div></a>
              <a href="#"><div class="month3">アカウント削除</div></a>
            </div>
          </div>
          <!-- 自治体、町内会アカウント管理 -->
          <div class="tab-pane fade">
            <div class="week_mon2">
              <a href="#"><div class="month3">アカウント作成</div></a>
              <a href="#"><div class="month3">アカウント編集</div></a>
              <a href="#"><div class="month3">アカウント削除</div></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    <?php $_smarty_tpl->_subTemplateRender(_FOOTER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/tab-change.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
