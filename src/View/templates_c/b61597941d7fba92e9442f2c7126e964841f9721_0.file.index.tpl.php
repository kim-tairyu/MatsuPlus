<?php
/* Smarty version 3.1.32, created on 2018-07-25 11:04:23
  from 'C:\xampp\htdocs\kimu\src\View\templates\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b583d17a50e96_36130729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b61597941d7fba92e9442f2c7126e964841f9721' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\index\\index.tpl',
      1 => 1532509220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b583d17a50e96_36130729 (Smarty_Internal_Template $_smarty_tpl) {
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
        <ul class="kategori col-md-12 col-xs-12 col-lg-12">
          <li class="col-md-2  col-xs-2 col-lg-2">
            <a href="#vote" data-toggle="tab" id="click1">VOTE</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#news" data-toggle="tab" id="click2">NEWS</a>
          </li>
          <li class="col-md-4 col-xs-4 active col-lg-4 ">
            <a href="#recommend" data-toggle="tab" id="click3">RECOMMEND</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#season" data-toggle="tab" id="click4">SEASON</a>
          </li>
          <li class="col-md-2 col-xs-2 col-lg-2">
            <a href="#area" data-toggle="tab" id="click5">AREA</a>
          </li>
        </ul>
        <!--index.php全体を囲むwrap-->
        <div class="tab-content col-xs-12 col-md-12 col-lg-12" id="myTapContent">
          <!--レビュー順で表示のエリア-->
          <div class="tab-pane fade in active" id="recommend">
            <!--タブ切り替え-->
            <div class="tab_wrap">
            <input id="tab1" type="radio" name="tab_btn" checked="checked">
            <input id="tab2" type="radio" name="tab_btn">
            <div class="tab_area">
              <div class="week_mon">
                <a href="#"><label class="tab1_label" for="tab1">WEEK</label></a>
                <a href="#" class="month2"><label class="tab2_label" for="tab2">MONTH</label></a>
              </div>
            </div>
            <!--main-->
            <div class="panel_area">
              <!--WEEKタブ-->
              <div id="panel1" class="tab_panel">
                <div class="flex">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weekFestivals']->value, 'weekFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['weekFestival']->value) {
?>
                  <div class="news_info_event_box">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['festival_id'];?>
">
                      <div class="news_box">
                        <div class="news_box1">
                          <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['image'];?>
" class="event_image">
                        </div>
                        <div class="news_box2">
                          <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['festival_name_en'];?>
</h4>
                          <!--demoが表示される文章でお願いします-->
                          <div class="demo"><?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['description_en'];?>
</div>
                          <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                          <div class="date_box">
                            <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['start_date'];?>
</h6>
                            <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['end_date'];?>
</h6>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php
}
} else {
?>
                  <div>No Festival Data!</div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div>
              <!--MONTHタブ-->
              <div id="panel2" class="tab_panel">
                <div class="flex">
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['monthFestivals']->value, 'monthFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['monthFestival']->value) {
?>
                  <div class="news_info_event_box">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['festival_id'];?>
">
                      <div class="news_box">
                        <div class="news_box1">
                          <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['image'];?>
" class="event_image">
                        </div>
                        <div class="news_box2">
                          <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['festival_name_en'];?>
</h4>
                          <!--demoが表示される文章でお願いします-->
                          <div class="demo"><?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['description_en'];?>
</div>
                          <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                          <div class="date_box">
                            <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['start_date'];?>
</h6>
                            <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['monthFestival']->value['end_date'];?>
</h6>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php
}
} else {
?>
                  <div>No Festival Data!</div>
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
              </div><!--MONTHタブ終わり-->
            </div><!--main終わり-->
          </div>
        </div>

          <!--投票機能エリア-->
          <div class="tab-pane fade" id="vote">
            投票を実装予定
          </div>
          <!--記事エリア-->
          <div class="tab-pane fade" id="news">
            <!--wrapのようなもの-->
            <!--記事1-->
            <div class="flex">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="news_info_event_box">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
&action=article_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=article&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
                <div class="news_box">
                  <div class="news_box1-1">
                    <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" class="event_image">
                  </div>
                  <div class="news_box2">
                    <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</h4>
                    <div class="demo"><?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>
</div>
                    <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                    <div class="date_box">
                      <h6 class="date_big2"></h6>
                      <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <?php
}
} else {
?>
            <div>No Article Data!</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>

          <!--季節リア-->
        <div class="tab-pane fade" id="season">
            <!--タブ切り替え-->
        <div class="tab_wrap2">
            <input id="tabA" type="radio" name="tab_btn2" checked>
            <input id="tabB" type="radio" name="tab_btn2">
            <input id="tabC" type="radio" name="tab_btn2">
            <input id="tabD" type="radio" name="tab_btn2">
          <div class="tab_area2">
            <!--カテゴリ-->
            <div class="week_mon2">
              <a href="#"><label class="tabA_label" for="tabA">SPRING</label></a>
              <a href="#"><label class="tabB_label" for="tabB">SUMMER</label></a>
              <a href="#"><label class="tabC_label" for="tabC">AUTUMN</label></a>
              <a href="#"><label class="tabD_label" for="tabD">WINTER</label></a>
            </div>
          </div>

          <!--main-->
          <div class="panel_area2">
            <!--季節タブ-->
            <div id="panelA" class="tab_panel2">
            <!-- SPRING -->
            <div class="flex">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['springFestivals']->value, 'springFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['springFestival']->value) {
?>
              <div class="news_info_event_box">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['springFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['springFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['springFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['start_date'];?>
</h6>
                        <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['springFestival']->value['end_date'];?>
</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
          <!--季節タブ-->
          <div id="panelB" class="tab_panel2">
              <!-- SUMMER -->
              <div class="flex">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['summerFestivals']->value, 'summerFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['summerFestival']->value) {
?>
              <div class="news_info_event_box">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['start_date'];?>
</h6>
                        <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['summerFestival']->value['end_date'];?>
</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
            <!--季節タブ-->
            <div id="panelC" class="tab_panel2">
              <!-- AUTUMN -->
              <div class="flex">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['autumnFestivals']->value, 'autumnFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['autumnFestival']->value) {
?>
              <div class="news_info_event_box">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['start_date'];?>
</h6>
                        <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['autumnFestival']->value['end_date'];?>
</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
              <!--季節タブ-->
              <div id="panelD" class="tab_panel2">
              <!-- WINTER -->
              <div class="flex">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['winterFestivals']->value, 'winterFestival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['winterFestival']->value) {
?>
              <div class="news_info_event_box">
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['festival_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['festival_name_en'];?>
</h4>
                      <div class="demo"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['description_en'];?>
</div>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                        <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['start_date'];?>
</h6>
                        <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['winterFestival']->value['end_date'];?>
</h6>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </div>
            </div>
          </div><!--mainEND-->
        </div><!--tab_wrapEND-->
      </div>


          <!--地方エリア-->
          <div class="tab-pane fade" id="area">
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=hokkaidou"><img src="<?php echo _IMGS_DIR;?>
/hokkaidou.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=tohoku"><img src="<?php echo _IMGS_DIR;?>
/tohoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kinki"><img src="<?php echo _IMGS_DIR;?>
/kinki.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kanto"><img src="<?php echo _IMGS_DIR;?>
/kanto.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=chubu"><img src="<?php echo _IMGS_DIR;?>
/chubu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=chugoku"><img src="<?php echo _IMGS_DIR;?>
/chugoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=shikoku"><img src="<?php echo _IMGS_DIR;?>
/shikoku.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=kyushu"><img src="<?php echo _IMGS_DIR;?>
/kyushu.jpg" alt=""></a>
            </div>
            <div class="home_img">
              <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&area=okinawa"><img src="<?php echo _IMGS_DIR;?>
/okinawa.jpg" alt=""></a>
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
