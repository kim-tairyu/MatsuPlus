<?php
/* Smarty version 3.1.32, created on 2018-07-24 20:53:43
  from 'C:\xampp\htdocs\kimu\src\View\templates\schedule\schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5775b7c3f843_56335495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98adc93ba64a17283aaba82fa26fc18988aaf31a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\schedule\\schedule.tpl',
      1 => 1532455512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5775b7c3f843_56335495 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="box4" id="myTapContent" style="margin: 30px auto;">
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
