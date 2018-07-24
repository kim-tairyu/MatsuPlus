<?php
/* Smarty version 3.1.32, created on 2018-07-24 12:05:00
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5715eccf2661_15559860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ec15ff32a570a51a29d24b520d99e31557a58' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl',
      1 => 1532433880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5715eccf2661_15559860 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
  <head>
    <?php $_smarty_tpl->_subTemplateRender(_HTML_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <!--この順番で読み込む-->
    <link rel="stylesheet" href="<?php echo _CSS_DIR;?>
/fullcalendar.css">
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo _JS_DIR;?>
/fullcalendar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
      $(function () {
        $('#calendar').fullCalendar(
          {
            events:'<?php echo _CONTROLLER_CLASS_DIR;?>
/ScheduleController.php',//表示するJSONのリンク
          }
        );
      });
    <?php echo '</script'; ?>
>
  </head>
  <body>
    <!--header-->
    <?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    <!-- maincontents -->
    <div class="box4" id="myTapContent">
      <div class="box4-inner">
        <h2>SCHEDULE</h2>
        <!--カレンダー-->
        <div class="schedule" id="calendar" style="width: 640px; height: 600px;"></div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    <?php $_smarty_tpl->_subTemplateRender(_FOOTER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
  </body>
</html>
<?php }
}
