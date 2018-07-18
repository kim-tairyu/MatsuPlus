<?php
/* Smarty version 3.1.32, created on 2018-07-18 15:24:36
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/editer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4f5bb4e5a110_78175701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23afcfe27217092ac2324c9e8c0138ab520539d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/editer.tpl',
      1 => 1531927474,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4f5bb4e5a110_78175701 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1>編集者画面</h1>
        
        <ul class="kategori col-md-12 col-xs-12 col-lg-12">
          <li class="col-md-4 col-xs-2 active col-lg-2 ">
            <a href="#" data-toggle="tab" id="click3">お祭り管理</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#" data-toggle="tab" id="click4">記事管理</a>
          </li>
        </ul>
        
        <!--全体を囲むwrap-->
        <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">
          <!-- お祭り管理 -->
          <div class="tab-pane fade in active">
            <div class="week_mon2">
              <a href="#"><div class="month3">お祭り情報作成</div></a>
              <a href="#"><div class="month3">お祭り情報編集</div></a>
              <a href="#"><div class="month3">お祭り情報削除</div></a>
            </div>
          </div>
          <!-- 記事管理 -->
          <div class="tab-pane fade">
            <div class="week_mon2">
              <a href="#"><div class="month3">記事情報作成</div></a>
              <a href="#"><div class="month3">記事情報編集</div></a>
              <a href="#"><div class="month3">記事情報削除</div></a>
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
