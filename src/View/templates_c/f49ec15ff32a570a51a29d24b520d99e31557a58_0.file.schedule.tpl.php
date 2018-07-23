<?php
/* Smarty version 3.1.32, created on 2018-07-23 02:07:40
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55386c2c28e1_77139220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ec15ff32a570a51a29d24b520d99e31557a58' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl',
      1 => 1532311618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55386c2c28e1_77139220 (Smarty_Internal_Template $_smarty_tpl) {
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
            events:'../../src/Controller/ScheduleController.php',//表示するJSONのリンク
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
        <!--カレンダー-->
        <div class="schedule" id="calendar"></div>
        <!--何月何日のエリア-->
        <div class="schedule_info">
          <div class="schedule_info_day"><h1 id="schedule_info_day">何月何日の予定</h1></div>
            <div class="search_results_box">
              <!--結果1-->
              <div class="search_results_box1-1">
                <a href="#">
                  <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
                </a>
              </div>
              <!--結果２-->
              <div class="search_results_box1-1">
                <a href="#">
                  <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
                </a>
              </div>
              <!--結果３-->
              <div class="search_results_box1-1">
                <a href="#">
                  <div class="search_results_box2">
                    <div class="search_results_box2-1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/article_img.jpg" class="event_image">
                    </div>
                    <div class="search_results_box2-2">
                      <h4 class="search_results_title">The next Sanja Matsuri is expected to be held from May 17 to 19, 2019</h4>
                      <h6 class="search_results_date_big">2018.6.15</h6>
                    </div>
                  </div>
                </a>
              </div>
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
