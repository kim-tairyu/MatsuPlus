<?php
/* Smarty version 3.1.32, created on 2018-07-24 09:26:12
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/festival/festival.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b56f0b4e87ab2_00259919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a040f172673923420008e4825709a9489a9c6d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/festival/festival.tpl',
      1 => 1532424364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b56f0b4e87ab2_00259919 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <a href="#"><img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['festival_image']->value['image'];?>
" alt="祭り"></a>
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
            <input type="text" id="calendar" class="suke-box1" placeholder="startDay" data-mindate=today>
            <!--時間開始1-->
            <select name="time_id" id="time">
              <option value="time"></option>
              <option value="">0:00</option>
              <option value="">0:30</option>
              <option value="">1:00</option>
              <option value="">1:30</option>
              <option value="">2:00</option>
              <option value="">2:30</option>
              <option value="">3:00</option>
              <option value="">3:30</option>
              <option value="">4:00</option>
              <option value="">4:30</option>
              <option value="">5:00</option>
              <option value="">5:30</option>
              <option value="">6:00</option>
              <option value="">6:30</option>
              <option value="">7:00</option>
              <option value="">7:30</option>
              <option value="">8:00</option>
              <option value="">8:30</option>
              <option value="">9:00</option>
              <option value="">9:30</option>
              <option value="">10:00</option>
              <option value="">10:30</option>
              <option value="">11:00</option>
              <option value="">11:30</option>
              <option value="">12:00</option>
              <option value="">12:30</option>
              <option value="">13:00</option>
              <option value="">13:30</option>
              <option value="">14:00</option>
              <option value="">14:30</option>
              <option value="">15:00</option>
              <option value="">15:30</option>
              <option value="">16:00</option>
              <option value="">16:30</option>
              <option value="">17:00</option>
              <option value="">17:30</option>
              <option value="">18:00</option>
              <option value="">18:30</option>
              <option value="">19:00</option>
              <option value="">19:30</option>
              <option value="">20:00</option>
              <option value="">20:30</option>
              <option value="">21:00</option>
              <option value="">21:30</option>
              <option value="">22:00</option>
              <option value="">22:30</option>
              <option value="">23:00</option>
              <option value="">23:30</option>
              <option value="">24:00</option>
            </select>
            </div>
            <!--カレンダー開始１と時間開始１終了-->
            <div class="suke-box">
            <!--カレンダー開始2-->
            <input type="text" id="calendar" class="suke-box1" placeholder="endDay" data-mindate=today>
            <!--時間開始2-->
            <select name="time_id" id="time">
              <option value="time"></option>
              <option value="">0:00</option>
              <option value="">0:30</option>
              <option value="">1:00</option>
              <option value="">1:30</option>
              <option value="">2:00</option>
              <option value="">2:30</option>
              <option value="">3:00</option>
              <option value="">3:30</option>
              <option value="">4:00</option>
              <option value="">4:30</option>
              <option value="">5:00</option>
              <option value="">5:30</option>
              <option value="">6:00</option>
              <option value="">6:30</option>
              <option value="">7:00</option>
              <option value="">7:30</option>
              <option value="">8:00</option>
              <option value="">8:30</option>
              <option value="">9:00</option>
              <option value="">9:30</option>
              <option value="">10:00</option>
              <option value="">10:30</option>
              <option value="">11:00</option>
              <option value="">11:30</option>
              <option value="">12:00</option>
              <option value="">12:30</option>
              <option value="">13:00</option>
              <option value="">13:30</option>
              <option value="">14:00</option>
              <option value="">14:30</option>
              <option value="">15:00</option>
              <option value="">15:30</option>
              <option value="">16:00</option>
              <option value="">16:30</option>
              <option value="">17:00</option>
              <option value="">17:30</option>
              <option value="">18:00</option>
              <option value="">18:30</option>
              <option value="">19:00</option>
              <option value="">19:30</option>
              <option value="">20:00</option>
              <option value="">20:30</option>
              <option value="">21:00</option>
              <option value="">21:30</option>
              <option value="">22:00</option>
              <option value="">22:30</option>
              <option value="">23:00</option>
              <option value="">23:30</option>
              <option value="">24:00</option>
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
            <h5 class="date"><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_time'];?>
</h5>
          </div>
        </div>
        <!--記事本文-->
        <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <p><?php echo $_smarty_tpl->tpl_vars['festival']->value['description_en'];?>
</p>
        </div>
        <!--動画-->
        <p><?php echo $_smarty_tpl->tpl_vars['festival']->value['movie_url'];?>
</p>
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
          <a href="#" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name_en'];?>
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
