<?php
/* Smarty version 3.1.32, created on 2018-07-25 15:28:46
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/editer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b58972ee86344_16433286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23afcfe27217092ac2324c9e8c0138ab520539d3' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/editer.tpl',
      1 => 1532532521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b58972ee86344_16433286 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1>編集者画面</h1>

                <div class="tab-pane fade in active" id="recommend">
                  <!--タブ切り替え-->
                  <div class="tab_wrap">
                  <input id="tab1" type="radio" name="tab_btn" checked="checked">
                  <input id="tab2" type="radio" name="tab_btn">
                  <div class="tab_area">
                    <div class="week_mon">
                      <a href="#"><label class="tab1_label" for="tab1">お祭り管理</label></a>
                      <a href="#" class="month2"><label class="tab2_label" for="tab2">記事管理</label></a>
                    </div>
                  </div>
                  <!--main-->
                  <div class="panel_area">
                    <!--WEEKタブ-->
                    <div id="panel1" class="tab_panel">
                      <div id="dnweb-tabtest">
                        <!-- タブの切替部分 -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#fes_tabtest1" data-toggle="tab">祭り一覧</a></li>
                          <li><a href="#fes_tabtest2" data-toggle="tab">祭り作成</a></li>
                          <li><a href="#fes_tabtest3" data-toggle="tab">祭り編集</a></li>
                          <li><a href="#fes_tabtest3" data-toggle="tab">祭り削除</a></li>
                        </ul>

                        <!-- タブのコンテンツ部分 -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="fes_tabtest1">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">festival_name_en</th>
                                    <th scope="col">location_en</th>
                                    <th scope="col">start_date</th>
                                    <th scope="col">end_date</th>
                                    <th scope="col">tel</th>
                                    <th scope="col">fax</th>
                                    <th scope="col">email</th>
                                    <th scope="col">sponsor</th>
                                    <th scope="col">festival_status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festivals']->value, 'festival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['festival']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_name_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['location_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['end_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['tel'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['fax'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['sponsor'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_status'];?>
</td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tabtest2">
                            <div class="news_info_event">
                              <div class="box4-inner">
                                <div class="adduser">
                                  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=upload">
                                    <input type="submit" class="touroku" value="Create a festival">
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tabtest3">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">festival_name_en</th>
                                    <th scope="col">location_en</th>
                                    <th scope="col">start_date</th>
                                    <th scope="col">end_date</th>
                                    <th scope="col">tel</th>
                                    <th scope="col">fax</th>
                                    <th scope="col">email</th>
                                    <th scope="col">sponsor</th>
                                    <th scope="col">festival_status</th>
                                    <th scope="col">編集</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festivals']->value, 'festival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['festival']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_name_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['location_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['end_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['tel'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['fax'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['sponsor'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_status'];?>
</td>
                                    <td><a>編集</a></td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tabtest4">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">festival_name_en</th>
                                    <th scope="col">location_en</th>
                                    <th scope="col">start_date</th>
                                    <th scope="col">end_date</th>
                                    <th scope="col">tel</th>
                                    <th scope="col">fax</th>
                                    <th scope="col">email</th>
                                    <th scope="col">sponsor</th>
                                    <th scope="col">festival_status</th>
                                    <th scope="col">削除</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festivals']->value, 'festival');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['festival']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_name_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['location_en'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['start_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['end_date'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['tel'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['fax'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['email'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['sponsor'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['festival']->value['festival_status'];?>
</td>
                                    <td><a>削除</a></td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--MONTHタブ-->
                    <div id="panel2" class="tab_panel">
                      <div id="dnweb-tabtest">
                        <!-- タブの切替部分 -->
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#arc_tabtest1" data-toggle="tab">記事一覧</a></li>
                          <li><a href="#arc_tabtest2" data-toggle="tab">記事作成</a></li>
                          <li><a href="#arc_tabtest3" data-toggle="tab">記事編集</a></li>
                          <li><a href="#arc_tabtest4" data-toggle="tab">記事削除</a></li>
                        </ul>

                        <!-- タブのコンテンツ部分 -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="arc_tabtest1">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">article_id</th>
                                    <th scope="col">article_title</th>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">post_date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="arc_tabtest2">
                            <div class="news_info_event">
                              <div class="box4-inner">
                                <div class="adduser">
                                  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=editer&action=addArticle">
                                    <div><p style="color: red"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</p></div>
                                    <input type="text" class="mailaddress" name="article_name" placeholder="Article Title">
                                    <select name="festival_id" class="country-width">
                                      <option value="">Select Festival</option>
                                      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['festival_id']->value, 'fes_id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['fes_id']->value) {
?>
                                      <option value="<?php echo $_smarty_tpl->tpl_vars['fes_id']->value['festival_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['fes_id']->value['festival_name_en'];?>
</option>
                                      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <textarea name="text" rows="4" cols="40" style="margin-top: 20px">Article Text</textarea>
                                    <input type="submit" class="touroku" value="Create an Article">
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="arc_tabtest3">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">article_id</th>
                                    <th scope="col">article_title</th>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">post_date</th>
                                    <th scope="col">編集</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</td>
                                    <td><a href="">編集</a></td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="arc_tabtest4">
                            <div class="news_info_event">
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">article_id</th>
                                    <th scope="col">article_title</th>
                                    <th scope="col">festival_id</th>
                                    <th scope="col">post_date</th>
                                    <th scope="col">削除</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['articles']->value, 'article');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
?>
                                  <tr class="table">
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['article_title'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['festival_id'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['article']->value['post_date'];?>
</td>
                                    <td><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=editer&action=deleteArticle&article_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['article_id'];?>
">削除</a></td>
                                  </tr>
                                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </tbody>
                              </table> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--MONTHタブ終わり-->
                  </div><!--main終わり-->
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
