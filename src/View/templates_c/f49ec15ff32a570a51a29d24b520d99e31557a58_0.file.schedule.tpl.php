<?php
/* Smarty version 3.1.32, created on 2018-07-19 06:19:48
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b502d84980423_51938152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f49ec15ff32a570a51a29d24b520d99e31557a58' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/schedule/schedule.tpl',
      1 => 1531980916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b502d84980423_51938152 (Smarty_Internal_Template $_smarty_tpl) {
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
          <table>
            <tr>
              <td class="weekday"><a href="#">←</a></td>
              <td class="weekday"></td>
              <td class="weekday"></td>
              <td class="month">1月</td>
              <td class="weekday"></td>
              <td class="weekday"></td>
              <td class="weekday"><a href="#">→</a></td>
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
            <tr>
              <td> </td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
              <td>5</td>
              <td>6</td>
            </tr>
            <tr>
              <td>7</td>
              <td>8</td>
              <td>9</td>
              <td>10</td>
              <td>11</td>
              <td>12</td>
              <td>13</td>
            </tr>
            <tr>
              <td>14</td>
              <td>15</td>
              <td>16</td>
              <td>17</td>
              <td>18</td>
              <td>19</td>
              <td>20</td>
            </tr>
            <tr>
              <td>21</td>
              <td>22</td>
              <td>23</td>
              <td>24</td>
              <td>25</td>
              <td>26</td>
              <td>27</td>
            </tr>
            <tr>
              <td>28</td>
              <td>29</td>
              <td>30</td>
              <td>31</td>
              <td>  </td>
              <td>  </td>
              <td>  </td>
            </tr>
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
