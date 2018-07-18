<?php
/* Smarty version 3.1.32, created on 2018-07-16 13:54:05
  from '/Applications/MAMP/htdocs/matsuri/src/View/templates/schedule/schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4ca37da874e8_55874541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3cd7dca1d62e5424e418d23c3a6d16d432b9b3b' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/src/View/templates/schedule/schedule.tpl',
      1 => 1531749243,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4ca37da874e8_55874541 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="schedule" id="calendar">
          <table id="calendar-table">
            <thead id="calendar-header">
              <tr>
                <td class="weekday"><a>←</a></td>
                <td class="weekday"></td>
                <td class="weekday"></td>
                <td class="month">2018/06</td>
                <td class="weekday"></td>
                <td class="weekday"></td>
                <td class="weekday"><a>→</a></td>
              </tr>
              <tr>
                <td class="weekday">Sun</td>
                <td class="weekday">Mon</td>
                <td class="weekday">Tue</td>
                <td class="weekday">Wed</td>
                <td class="weekday">Thu</td>
                <td class="weekday">Fri</td>
                <td class="weekday">Sat</td>
              </tr>
            </thead>
          </table>
        </div>
        <!--何月何日のエリア-->
        <div class="schedule_info">
          <div class="schedule_info_day"><h1 id="schedule_info_day">何月何日の予定</h1></div>
          <div class="search_results_box">
                <!--結果1-->
                <div class="search_results_box1-1">
                  <a href="#">
                    <div class="search_results_box2">
                      <div class="search_results_box2-1">
                        <img src="<?php echo _IMGS_DIR;?>
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
                        <img src="<?php echo _IMGS_DIR;?>
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
                        <img src="<?php echo _IMGS_DIR;?>
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
