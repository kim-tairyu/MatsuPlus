<?php
/* Smarty version 3.1.32, created on 2018-07-25 15:43:37
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/festival/festival.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b589aa92a4381_34999122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a040f172673923420008e4825709a9489a9c6d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/festival/festival.tpl',
      1 => 1532533415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b589aa92a4381_34999122 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="main_content" id="myTapContent">
      <div class="main_content_fes_inner">
        <!--記事or祭りタイトル-->
        <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_name_en'];?>
</h1>
          <!--祭りor記事画像(仮)-->
        <!-- <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <a href="#"><img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['festival']->value['image'];?>
" alt="祭り"></a>
        </div> -->
    <div class="worksslider inside col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['festival']->value['image'];?>
" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festival_images']->value, 'images');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['images']->value) {
?>
          <div class="item">
            <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['images']->value['image'];?>
" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

  <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span aria-hidden="true" class="yazirusi1"><img src="<?php echo _IMGS_DIR;?>
/left.png" width="50px" height="50px"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span aria-hidden="true" class="yazirusi2"><img src="<?php echo _IMGS_DIR;?>
/right.png" width="50px" height="50px"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>




        <!--お気に入りボタン-->
        <div class="fev_button_box">
          <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
&action=favorite" style="text-decoration:none;"><div class="fev_button">
          <img src="<?php echo _IMGS_DIR;?>
/fev.png" width="40" height="40" alt="サンプル"></div></a>
          <!--スケジュール追加ボタン-->
          <a href="#" style="text-decoration:none;"><div class="fev_button2" id="Modal_Open" class="btn_price">
          <img src="<?php echo _IMGS_DIR;?>
/plus.png" width="40" height="40" alt="サンプル"></div></a>
        </div>
        <!--モーダルウインドウ-->
        <div id="Modal_Content">
          <p>Scheduling</p>
          <!--イベント-->
          <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival" method="post">
            <input type="text" id="event" name="event" placeholder="event"><br/>
            <!--場所-->
            <input type="text" id="place" name="place" placeholder="place"><br/>
            <div class="suke-box">
            <!--カレンダー開始1-->
            <!-- <input type="text" id="calendar" class="suke-box1" placeholder="startDay" data-mindate=today> -->
            <input type="date" id="calendar" name="start_date" class="suke-box1" placeholder="startDay" data-mindate=today>
            <!--時間開始1-->
            <select name="start_time" id="time">
              <option value="0:00">0:00</option>
              <option value="0:30">0:30</option>
              <option value="1:00">1:00</option>
              <option value="1:30">1:30</option>
              <option value="2:00">2:00</option>
              <option value="2:30">2:30</option>
              <option value="3:00">3:00</option>
              <option value="3:30">3:30</option>
              <option value="4:00">4:00</option>
              <option value="4:30">4:30</option>
              <option value="5:00">5:00</option>
              <option value="5:30">5:30</option>
              <option value="6:00">6:00</option>
              <option value="6:30">6:30</option>
              <option value="7:00">7:00</option>
              <option value="7:30">7:30</option>
              <option value="8:00">8:00</option>
              <option value="8:30">8:30</option>
              <option value="9:00">9:00</option>
              <option value="9:30">9:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="24:00">24:00</option>
            </select>
            </div>
            <!--カレンダー開始１と時間開始１終了-->
            <div class="suke-box">
            <!--カレンダー開始2-->
            <input type="date" id="calendar" name="end_date" class="suke-box1" placeholder="endDay" data-mindate=today>
            <!--時間開始2-->
            <select name="end_time" id="time">
              <option value="0:00">0:00</option>
              <option value="0:30">0:30</option>
              <option value="1:00">1:00</option>
              <option value="1:30">1:30</option>
              <option value="2:00">2:00</option>
              <option value="2:30">2:30</option>
              <option value="3:00">3:00</option>
              <option value="3:30">3:30</option>
              <option value="4:00">4:00</option>
              <option value="4:30">4:30</option>
              <option value="5:00">5:00</option>
              <option value="5:30">5:30</option>
              <option value="6:00">6:00</option>
              <option value="6:30">6:30</option>
              <option value="7:00">7:00</option>
              <option value="7:30">7:30</option>
              <option value="8:00">8:00</option>
              <option value="8:30">8:30</option>
              <option value="9:00">9:00</option>
              <option value="9:30">9:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="24:00">24:00</option>
            </select>
            </div>
            <input type="hidden" name="festival_id" value="<?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
">
            <!--コメント-->
            <textarea id="free" name="free" placeholder=""></textarea>
            <!--決定-->
            <div class="user_button4">
              <input type="submit" class="enter" id="e" value="ENTER">
            </div>
          </form>
                <!--<button id="Modal_Enter" class="btn_link">はい</button>
          <button id="Modal_Close" class="btn_link">いいえ</button>
          <input type="checkbox" id="Modal_Cbox"/>-->
        </div>
        <!--記事の日付とサブタイトル？-->
        <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="date_box2">
            <!--この下のdate2をアクセスカウンターで稲買いします-->
            <h5 class="date2"><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_time'];?>
</h5>
            <h5 class="date"><?php echo $_smarty_tpl->tpl_vars['festival']->value['end_time'];?>
</h5>
          </div>
        </div>
        <!--記事本文-->
        <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div id="dnweb-tab">
            <!-- タブの切替部分 -->
            <ul class="nav nav-tabs nav-justified">
              <li class="active"><a href="#fes_tab1" data-toggle="tab">Description</a></li>
              <li><a href="#fes_tab2" data-toggle="tab">History</a></li>
              <li><a href="#fes_tab3" data-toggle="tab">Program</a></li>
            </ul>
            <!-- タブのコンテンツ部分 -->
            <div class="tab-content">
              <div class="tab-pane active" id="fes_tab1">
                <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
              </div>
              <div class="tab-pane" id="fes_tab2">
                <p>History text</p>
              </div>
              <div class="tab-pane" id="fes_tab3">
                <p>Program text</p>
              </div>
            </div>
          </div>
        </div>
        <!--動画-->
        <div class="move col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <?php echo $_smarty_tpl->tpl_vars['festival']->value['movie_url'];?>

        </div>
        <!--MAP-->
        <iframe class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"src="http://maps.google.com/maps?q=<?php echo $_smarty_tpl->tpl_vars['festival']->value['x_coordinate'];?>
,<?php echo $_smarty_tpl->tpl_vars['festival']->value['y_coordinate'];?>
&output=embed" width=100% height="450" frameborder="0" style="border:0"></iframe>
        <!--グッズ-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Souvenir</h2>
          <div class="souvenir_img_box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gifts']->value, 'gift');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['gift']->value) {
?>
            <div class="souvenir_img_box2">
              <a href="#">
                <div class="souvenir_img_box3">
                  <div class="souvenir_img_boxA">
                    <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['gift']->value['image'];?>
" alt="ねぶた祭お土産">
                  </div>
                  <div class="souvenir_img_boxB">
                    <h4 class="souvenir_title"><?php echo $_smarty_tpl->tpl_vars['gift']->value['gift_name_en'];?>
</h4>
                  </div>
                </div>
              </a>
            </div>
            <?php
}
} else {
?>
            <div>No Gift Data!</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        </div>
        <!--コメントエリア-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Comment</h2>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reviews']->value, 'review');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['review']->value) {
?>
          <!--コメント１-->
          <div class="comment_content">
            <div class="">
              <div class="comment_user_img">
                  <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['review']->value['user_icon'];?>
" alt="ユーザーアイコン">
              </div>
              <div class="comment_hosi">
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['review']->value['star'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->tpl_vars['evaluation'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['evaluation']->step = 1;$_smarty_tpl->tpl_vars['evaluation']->total = (int) ceil(($_smarty_tpl->tpl_vars['evaluation']->step > 0 ? $_prefixVariable1+1 - (1) : 1-($_prefixVariable1)+1)/abs($_smarty_tpl->tpl_vars['evaluation']->step));
if ($_smarty_tpl->tpl_vars['evaluation']->total > 0) {
for ($_smarty_tpl->tpl_vars['evaluation']->value = 1, $_smarty_tpl->tpl_vars['evaluation']->iteration = 1;$_smarty_tpl->tpl_vars['evaluation']->iteration <= $_smarty_tpl->tpl_vars['evaluation']->total;$_smarty_tpl->tpl_vars['evaluation']->value += $_smarty_tpl->tpl_vars['evaluation']->step, $_smarty_tpl->tpl_vars['evaluation']->iteration++) {
$_smarty_tpl->tpl_vars['evaluation']->first = $_smarty_tpl->tpl_vars['evaluation']->iteration === 1;$_smarty_tpl->tpl_vars['evaluation']->last = $_smarty_tpl->tpl_vars['evaluation']->iteration === $_smarty_tpl->tpl_vars['evaluation']->total;?><p>★</p><?php }
}
?>
              </div>
              <div class="comment_user_name">
                <p><?php echo $_smarty_tpl->tpl_vars['review']->value['user_name'];?>
</p>
              </div>
              <div class="comment">
                <p><?php echo $_smarty_tpl->tpl_vars['review']->value['review'];?>
</p>
              </div>
            </div>
          </div>
          <?php
}
} else {
?>
          <div>No Review!</div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <!--コメント入力エリア-->
          <div class="comment_content2">
            <div class="comment_submit">
              <form action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival" method="post">
                comment<br>
                <!--星評価-->
                <div class="user_hosi">
                  <div class="evaluation">
                    <input id="star1" type="radio" name="star" value="5" />
                    <label for="star1"><span class="text">Very good</span>★</label>
                    <input id="star2" type="radio" name="star" value="4" />
                    <label for="star2"><span class="text">Good</span>★</label>
                    <input id="star3" type="radio" name="star" value="3" />
                    <label for="star3"><span class="text">Medium</span>★</label>
                    <input id="star4" type="radio" name="star" value="2" />
                    <label for="star4"><span class="text">Bad</span>★</label>
                    <input id="star5" type="radio" name="star" value="1" />
                    <label for="star5"><span class="text">Very Bad</span>★</label>
                  </div>
                </div>
                <!--コメント記入-->
                <textarea name="kanso" rows="4" cols="40" class="comment_area"></textarea><br>
                <!-- 祭りID -->
                <input type="hidden" name="festival_id" value="<?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
">
                <input type="submit" value="送信" class="comment_button">
                <input type="reset" value="リセット" class="comment_button">
              </form>
            </div>
          </div>
        </div>
        <!--タグエリア-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Tag</h2>
        </div>

        <div class="related_article_title_tag col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&action=festival_tag&tag_name=<?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name_en'];?>
" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name_en'];?>
</a>
          <?php
}
} else {
?>
          <div>No Tag!</div>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
/modal.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
