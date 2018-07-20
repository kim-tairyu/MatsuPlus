<?php
/* Smarty version 3.1.32, created on 2018-07-16 14:03:36
  from '/Applications/MAMP/htdocs/matsuri/src/View/templates/mypage/favorites-festival.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4ca5b8a6c322_26478021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0fe3b3be90d6d2970c84f6f10e72150c02b2587' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/src/View/templates/mypage/favorites-festival.tpl',
      1 => 1531399541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4ca5b8a6c322_26478021 (Smarty_Internal_Template $_smarty_tpl) {
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
          <p>Festival Favorites</p>
        </div>
        <!--さらに中のwrap-->
        <!--レビュー順で表示のエリア-->
        <div class="tab-pane fade in active" id="recommend">
          <div class="news_info_event">
            <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
              <a href="festival.php?festival_id=?">
                <div class="news_box">
                  <div class="news_box1">
                    <img src="<?php echo _IMGS_DIR;?>
/" class="event_image">
                  </div>
                  <div class="news_box2">
                    <h4 class="news_title">name</h4>
                    <!--demoが表示される文章でお願いします-->
                    <div class="demo">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur
                    </div>
                    <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                    <div class="date_box">
                    <h6 class="date_big2">start date</h6>
                    <h6 class="date_big">end date</h6>
                    </div>
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
