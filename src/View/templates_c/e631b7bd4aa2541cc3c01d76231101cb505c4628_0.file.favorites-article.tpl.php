<?php
/* Smarty version 3.1.32, created on 2018-07-23 11:40:44
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/mypage/favorites-article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55bebcc0f3f9_27905874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e631b7bd4aa2541cc3c01d76231101cb505c4628' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/mypage/favorites-article.tpl',
      1 => 1532346036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55bebcc0f3f9_27905874 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="fevpage" id="myTapContent">
      <div class="fevpage-inner">
        <!--ページタイトル-->
        <div class="fevpage-title">
          <p>Article Favorites</p>
        </div>
        <!--さらに中のwrap-->
        <!--レビュー順で表示のエリア-->
        <div class="tab-pane fade in active" id="recommend">
          <div class="news_info_event">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['favorite_art']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
            <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=article&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="<?php echo _IMGS_SERVER_DIR;?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['image'];?>
" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title"><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</h4>
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
            <div>No Favorite Festival!</div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
