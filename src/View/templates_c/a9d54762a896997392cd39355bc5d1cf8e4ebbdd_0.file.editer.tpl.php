<?php
/* Smarty version 3.1.32, created on 2018-07-23 15:37:16
  from 'C:\xampp\htdocs\kimu\src\View\templates\manager\editer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55da0ccd1866_86697884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9d54762a896997392cd39355bc5d1cf8e4ebbdd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\manager\\editer.tpl',
      1 => 1532353035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55da0ccd1866_86697884 (Smarty_Internal_Template $_smarty_tpl) {
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

                <div class="tab-pane fade in active" id="recommend">
                  <!--タブ切り替え-->
                  <div class="tab_wrap">
                  <input id="tab1" type="radio" name="tab_btn" checked="checked">
                  <input id="tab2" type="radio" name="tab_btn">
                  <div class="tab_area">
                    <div class="week_mon">
                      <a href="#"><label class="tab1_label" for="tab1">お祭り管理</lebel></a>
                      <a href="#" class="month2"><label class="tab2_label" for="tab2">記事管理</lebel></a>
                    </div>
                  </div>
                  <!--main-->
                  <div class="panel_area">
                    <!--WEEKタブ-->
                    <div id="panel1" class="tab_panel">
                      <p>お祭り管理(タブが切り替わってることを確認するためです消してください)</p>
                      <div class="week_mon3">
                        <a href="#">お祭り情報作成</a>
                        <a href="#">お祭り情報編集</a>
                        <a href="#">お祭り情報削除</a>
                      </div>
                    </div>
                    <!--MONTHタブ-->
                    <div id="panel2" class="tab_panel">
                      <p>記事管理(タブが切り替わってることを確認するためです消してください)</p>
                      <div class="week_mon3">
                        <a href="#">お祭り情報作成</a>
                        <a href="#">お祭り情報編集</a>
                        <a href="#">お祭り情報削除</a>
                      </div>
                    </div><!--MONTHタブ終わり-->
                  </div><!--main終わり-->
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
