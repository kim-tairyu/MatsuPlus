<?php
/* Smarty version 3.1.32, created on 2018-07-25 13:35:20
  from 'C:\xampp\htdocs\kimu\src\View\templates\article\article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5860784e0a80_25879385',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa50911adf8b01cee37a8ce8bddadcc19a7e9c06' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\article\\article.tpl',
      1 => 1532518518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5860784e0a80_25879385 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</h1>
        <!--祭りor記事画像(仮)-->
        <!-- <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <a href="#"><img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" alt="祭り"></a>
        </div> -->

        <div class="worksslider inside col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['top_image']->value, 'top');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['top']->value) {
?>
          <div class="item active">
            <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['top']->value['image'];?>
" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'top_images');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['top_images']->value) {
?>
          <div class="item">
            <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['top_images']->value['image'];?>
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
?type=article&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
&f" style="text-decoration:none;"><div class="fev_button"><p>♡</p></div></a>
        </div>
        <!--記事の日付とサブタイトル？-->
        <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="date_box2">
            <!--この下のdate2をアクセスカウンターで稲買いします-->
            <h5 class="date2">アクセスカウンター（仮）</h5>
            <h5 class="date"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</h5>
          </div>
        </div>
        <!--記事本文-->
        <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <p><?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>
</p>
        </div>
        <!--関連-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Related article</h2>
        </div>
        <!--wrapのようなもの-->
        <div class="news_info_event col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <!--記事1-->
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['relation_tag']->value, 'relation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['relation']->value) {
?>
          <div class="news_info_event_box">
            <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=article&article_id=<?php echo $_smarty_tpl->tpl_vars['relation']->value['article_id'];?>
">
              <div class="news_box">
                <div class="news_box1-1">
                  <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['relation']->value['image'];?>
" class="event_image">
                </div>
                <div class="news_box2">
                  <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['relation']->value['article_title'];?>
</h4>
                  <h6 class="date_big2"><?php echo $_smarty_tpl->tpl_vars['relation']->value['post_date'];?>
</h6>
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
  </body>
</html>
<?php }
}
