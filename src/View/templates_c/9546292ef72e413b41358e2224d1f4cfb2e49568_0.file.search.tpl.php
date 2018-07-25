<?php
/* Smarty version 3.1.32, created on 2018-07-24 20:53:38
  from 'C:\xampp\htdocs\kimu\src\View\templates\search\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5775b207e645_31440585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9546292ef72e413b41358e2224d1f4cfb2e49568' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\search\\search.tpl',
      1 => 1532458416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5775b207e645_31440585 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
<?php $_smarty_tpl->_subTemplateRender(_HTML_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo '<script'; ?>
 type="text/javascript" src="<?php echo _JS_DIR;?>
/search.js"><?php echo '</script'; ?>
>
</head>
<body>
<!--header-->
<?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="box4" id="myTapContent">
  <div class="box4-inner">
    <!-- 表示・非表示ボタン -->
    <p class="openBtn"><i class="fa fa-chevron-down faColor"></i>SEARCHBOX　▼</p>
    <!-- 説明文 -->
    <div class="search">
      <!--formスタート-->
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search&action=kensaku">
        <p>Search by festival name</p>
        <input type="text" placeholder="Search" class="search_text" name="festival_name" />
        <p>Search from the venue</p>
        <select class="pref_name" name="location">
          <option value="" selected>------</option>
          <option value="Hokkaido">Hokkaido</option>
          <option value="Aomori">Aomori</option>
          <option value="Iwate">Iwate</option>
          <option value="Miyagi">Miyagi</option>
          <option value="Akita">Akita</option>
          <option value="Yamagata">Yamagata</option>
          <option value="Fukushima">Fukushima</option>
          <option value="Ibaraki">Ibaraki</option>
          <option value="Tochigi">Tochigi</option>
          <option value="Gunma">Gunma</option>
          <option value="Saitama">Saitama</option>
          <option value="Chiba">Chiba</option>
          <option value="Tokyo">Tokyo</option>
          <option value="Kanagawa">Kanagawa</option>
          <option value="Niigata">Niigata</option>
          <option value="Toyama">Toyama</option>
          <option value="Ishikawa">Ishikawa</option>
          <option value="Fukui">Fukui</option>
          <option value="Yamanashi">Yamanashi</option>
          <option value="Nagano">Nagano</option>
          <option value="Gifu">Gifu</option>
          <option value="Shizuoka">Shizuoka</option>
          <option value="Aichi">Aichi</option>
          <option value="Mie">Mie</option>
          <option value="Shiga">Shiga</option>
          <option value="Kyoto">Kyoto</option>
          <option value="Osaka">Osaka</option>
          <option value="Hyogo">Hyogo</option>
          <option value="Nara">Nara</option>
          <option value="Wakayama">Wakayama</option>
          <option value="Tottori">Tottori</option>
          <option value="Shimane">Shimane</option>
          <option value="Okayama">Okayama</option>
          <option value="Hiroshima">Hiroshima</option>
          <option value="Yamaguchi">Yamaguchi</option>
          <option value="Tokushima">Tokushima</option>
          <option value="Kagawa">Kagawa</option>
          <option value="Ehime">Ehime</option>
          <option value="Kouchi">Kouchi</option>
          <option value="Fukuoka">Fukuoka</option>
          <option value="Saga">Saga</option>
          <option value="Nagasaki">Nagasaki</option>
          <option value="Kumamoto">Kumamoto</option>
          <option value="Oita">Oita</option>
          <option value="Miyazaki">Miyazaki</option>
          <option value="Kagoshima">Kagoshima</option>
          <option value="Okinawa">Okinawa</option>
        </select>

        <p>Search by date</p>
<!--
        <select name="year">
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018" selected>2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
        </select>
-->
        <select name="start_date">
          <option value="" selected>--</option>
          <option value="-01-">01</option>
          <option value="-02-">02</option>
          <option value="-03-">03</option>
          <option value="-04-">04</option>
          <option value="-05-">05</option>
          <option value="-06-">06</option>
          <option value="-07-">07</option>
          <option value="-08-">08</option>
          <option value="-09-">09</option>
          <option value="-10-">10</option>
          <option value="-11-">11</option>
          <option value="-12-">12</option>
        </select>

        <p>Search by tag</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['randomTags']->value, 'tag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['tag']->value['festival_id'];?>
" class="tag"><?php echo $_smarty_tpl->tpl_vars['tag']->value['tag_name_en'];?>
</a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <br>
        <a href="#">
          <input type="submit" class="kensaku" value="検索" />
        </a>
      </form>
    </div>
  </div>
</div>

<!--検索結果表示エリア-->
<div class="main_content">
  <div class="main_content_inner">
  <div class="flex">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searches']->value, 'search');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['search']->value) {
?>
    <div class="news_info_event_box">
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?festival_id=<?php echo $_smarty_tpl->tpl_vars['weekFestival']->value['festival_id'];?>
&action=festival_favorite" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['search']->value['festival_id'];?>
">
        <div class="news_box">
          <div class="news_box1">
            <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value['image'];?>
" class="event_image">
          </div>
          <div class="news_box2">
            <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['search']->value['festival_name_en'];?>
</h4>
            <!--demoが表示される文章でお願いします-->
            <div class="demo"><?php echo $_smarty_tpl->tpl_vars['search']->value['description_en'];?>
</div>
            <!--この下のdata_big2がアクセスカウンタでおねがいします-->
            <div class="date_box">
              <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['search']->value['start_date'];?>
</h6>
              <h6 class="date_big"><?php echo $_smarty_tpl->tpl_vars['search']->value['end_date'];?>
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
<!--
    　<div class="search_results_box1">
    　　<a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=festival&festival_id=<?php echo $_smarty_tpl->tpl_vars['search']->value['festival_id'];?>
">
        　<div class="search_results_box2">
            <div class="search_results_box2-1">
            　　<img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['search']->value['image'];?>
" class="event_image">
            </div>
            <div class="search_results_box2-2">
            　<h4 class="search_results_title"><?php echo $_smarty_tpl->tpl_vars['search']->value['festival_name_en'];?>
</h4>
            　<h6 class="search_results_date_big"><?php echo $_smarty_tpl->tpl_vars['search']->value['start_date'];?>
</h6>
            </div>
        　</div>
    　　</a>
    　</div>
-->
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
