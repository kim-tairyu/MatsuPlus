<?php
/* Smarty version 3.1.32, created on 2018-07-24 20:05:32
  from 'C:\xampp\htdocs\matsuri\Matsuri-plus\src\View\templates\manager\manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5707fcd00426_80108084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8da1e69813aa1566e1651ce8ce98a7761d6f460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matsuri\\Matsuri-plus\\src\\View\\templates\\manager\\manager.tpl',
      1 => 1532420694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5707fcd00426_80108084 (Smarty_Internal_Template $_smarty_tpl) {
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


        <div class="tab-pane fade in active" id="recommend">
          <!--タブ切り替え-->
          <div class="tab_wrap">
          <input id="tab1" type="radio" name="tab_btn" checked="checked">
          <input id="tab2" type="radio" name="tab_btn">
          <div class="tab_area">
            <div class="week_mon">
              <a href="#"><label class="tab1_label" for="tab1">アカウント管理</lebel></a>
              <a href="#" class="month2"><label class="tab2_label" for="tab2">自治体アカウント管理</lebel></a>
            </div>
          </div>
          <!--main-->
          <div class="panel_area">
            <!--WEEKタブ-->
            <div id="panel1" class="tab_panel">
              <p>アカウント管理(タブが切り替わってることを確認するためです消してください)</p>
              <div class="week_mon3">
                <a href="#">アカウント作成</a>
                <a href="#">アカウント編集</a>
                <a href="#">アカウント削除</a>
              </div>
            </div>
            <!--MONTHタブ-->
            <div id="panel2" class="tab_panel">
              <p>自治体アカウント管理(タブが切り替わってることを確認するためです消してください)</p>
              <div class="week_mon3">
                <a href="#">アカウント作成</a>
                <a href="#">アカウント編集</a>
                <a href="#">アカウント削除</a>
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
