<?php
/* Smarty version 3.1.32, created on 2018-07-25 14:55:01
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/manager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b588f4527c1b9_94300822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a872bcd9ee27184da4189779eb69893a124ea251' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/manager/manager.tpl',
      1 => 1532529658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b588f4527c1b9_94300822 (Smarty_Internal_Template $_smarty_tpl) {
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
        <h1>管理者画面</h1>
        
        <div class="tab-pane fade in active" id="recommend">
          <!--タブ切り替え-->
          <div class="tab_wrap">
            <input id="tab1" type="radio" name="tab_btn" checked="checked">
            <input id="tab2" type="radio" name="tab_btn">
            <div class="tab_area">
              <div class="week_mon">
                <a href="#"><label class="tab1_label" for="tab1">ユーザアカウント管理</label></a>
                <a href="#" class="month2"><label class="tab2_label" for="tab2">自治体アカウント管理</label></a>
              </div>
            </div>
            <!--main-->
            <div class="panel_area">
              <!--WEEKタブ-->
              <div id="panel1" class="tab_panel">
                <div id="dnweb-tabtest">
                  <!-- タブの切替部分 -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#user_tab1" data-toggle="tab">アカウント一覧</a></li>
                    <li><a href="#user_tab2" data-toggle="tab">アカウント作成</a></li>
                    <li><a href="#user_tab3" data-toggle="tab">アカウント編集</a></li>
                    <li><a href="#user_tab4" data-toggle="tab">アカウント削除</a></li>
                  </ul>

                  <!-- タブのコンテンツ部分 -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="user_tab1">
                      <div class="news_info_event">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">user_id</th>
                              <th scope="col">password</th>
                              <th scope="col">user_name</th>
                              <th scope="col">mail_address</th>
                              <th scope="col">country</th>
                              <th scope="col">language</th>
                              <th scope="col">user_status</th>
                              <th scope="col">user_icon</th>
                              <th scope="col">authority</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                            <tr class="table">
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail_address'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['country_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['language'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_status'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_icon'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['authority'];?>
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
                    <div class="tab-pane" id="user_tab2">
                      <div class="news_info_event">
                        <div class="box4-inner">
                          <div class="adduser">
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=manager&action=addAccount">
                              <div><p style="color: red"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</p></div>
                              <input type="text" class="mailaddress" name="user_id" placeholder="User ID">
                              <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
                              <input type="password" class="password" name="password" placeholder="Password">
                              <input type="text" class="name" name="user_name" placeholder="Name">
                              <select name="country_id" class="country-width">
                                <option value="">Select Country</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countrys']->value, 'country');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['country_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                              </select>
                              <select name="authority" class="country-width">
                                <option value="">Select Authority</option>
                                <option value="comon">comon</option>
                                <option value="editer">editer</option>
                                <option value="manager">manager</option>
                              </select>
                              <input type="submit" class="touroku" value="Create an account">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="user_tab3">
                      <div class="news_info_event">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">user_id</th>
                              <th scope="col">password</th>
                              <th scope="col">user_name</th>
                              <th scope="col">mail_address</th>
                              <th scope="col">country</th>
                              <th scope="col">language</th>
                              <th scope="col">user_status</th>
                              <th scope="col">user_icon</th>
                              <th scope="col">authority</th>
                              <th scope="col">編集</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                            <tr class="table">
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail_address'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['country_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['language'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_status'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_icon'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['authority'];?>
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
                    <div class="tab-pane" id="user_tab4">
                      <div class="news_info_event">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">user_id</th>
                              <th scope="col">password</th>
                              <th scope="col">user_name</th>
                              <th scope="col">mail_address</th>
                              <th scope="col">country</th>
                              <th scope="col">language</th>
                              <th scope="col">user_status</th>
                              <th scope="col">user_icon</th>
                              <th scope="col">authority</th>
                              <th scope="col">削除</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
                            <tr class="table">
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['password'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['mail_address'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['country_name'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['language'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_status'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_icon'];?>
</td>
                              <td><?php echo $_smarty_tpl->tpl_vars['user']->value['authority'];?>
</td>
                              <td><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=manager&action=delete&user_id=<?php echo $_smarty_tpl->tpl_vars['user']->value['user_id'];?>
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
              </div>
              <!--MONTHタブ-->
              <div id="panel2" class="tab_panel">
                <div id="dnweb-tabtest">
                  <!-- タブの切替部分 -->
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#muni_tab1" data-toggle="tab">アカウント一覧</a></li>
                    <li><a href="#muni_tab2" data-toggle="tab">アカウント作成</a></li>
                    <li><a href="#muni_tab3" data-toggle="tab">アカウント編集</a></li>
                    <li><a href="#muni_tab4" data-toggle="tab">アカウント削除</a></li>
                  </ul>
                  
                  <!-- タブのコンテンツ部分 -->
                  <div class="tab-content">
                    <div class="tab-pane active" id="muni_tab1">
                      <div class="news_info_event">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">muni_id</th>
                            <th scope="col">muni_pass</th>
                            <th scope="col">muni_name</th>
                            <th scope="col">festival_id</th>
                            <th scope="col">muni_mail</th>
                            <th scope="col">muni_tel</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['munis']->value, 'muni');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['muni']->value) {
?>
                          <tr class="table">
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_pass'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['festival_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_mail'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_tel'];?>
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
                    <div class="tab-pane" id="muni_tab2">
                      <div class="news_info_event">
                        <div class="box4-inner">
                          <div class="adduser">
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=manager&action=addMuniAccount">
                              <div><p style="color: red"><?php echo $_smarty_tpl->tpl_vars['errMsg']->value;?>
</p></div>
                              <input type="text" class="mailaddress" name="muni_id" placeholder="Municipality ID">
                              <input type="password" class="password" name="muni_pass" placeholder="Municipality Password">
                              <input type="text" class="name" name="muni_name" placeholder="Municipality Name">
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
                              <input type="text" class="name" name="muni_mail" placeholder="Municipality Mail">
                              <input type="text" class="name" name="muni_tel" placeholder="Municipality TEL">
                              <input type="submit" class="touroku" value="Create a municipality account">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="muni_tab3">
                      <div class="news_info_event">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">muni_id</th>
                            <th scope="col">muni_pass</th>
                            <th scope="col">muni_name</th>
                            <th scope="col">festival_id</th>
                            <th scope="col">muni_mail</th>
                            <th scope="col">muni_tel</th>
                            <th scope="col">編集</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['munis']->value, 'muni');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['muni']->value) {
?>
                          <tr class="table">
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_pass'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['festival_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_mail'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_tel'];?>
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
                    <div class="tab-pane" id="muni_tab4">
                      <div class="news_info_event">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">muni_id</th>
                            <th scope="col">muni_pass</th>
                            <th scope="col">muni_name</th>
                            <th scope="col">festival_id</th>
                            <th scope="col">muni_mail</th>
                            <th scope="col">muni_tel</th>
                            <th scope="col">削除</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['munis']->value, 'muni');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['muni']->value) {
?>
                          <tr class="table">
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_pass'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['festival_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_mail'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_tel'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=manager&action=muni_delete&muni_id=<?php echo $_smarty_tpl->tpl_vars['muni']->value['muni_id'];?>
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
              </div>
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
