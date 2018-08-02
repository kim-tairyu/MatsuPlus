<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

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
                            {foreach from=$users item=user}
                            <tr class="table">
                              <td>{$user.user_id}</td>
                              <td>{$user.password}</td>
                              <td>{$user.user_name}</td>
                              <td>{$user.mail_address}</td>
                              <td>{$user.country_name}</td>
                              <td>{$user.language}</td>
                              <td>{$user.user_status}</td>
                              <td>{$user.user_icon}</td>
                              <td>{$user.authority}</td>
                            </tr>
                            {/foreach}
                          </tbody>
                        </table> 
                      </div>
                    </div>
                    <div class="tab-pane" id="user_tab2">
                      <div class="news_info_event">
                        <div class="box4-inner">
                          <div class="adduser">
                            <form method="post" action="{$SCRIPT_NAME}?type=manager&action=addAccount">
                              <div><p style="color: red">{$errMsg}</p></div>
                              <input type="text" class="mailaddress" name="user_id" placeholder="User ID">
                              <input type="text" class="mailaddress" name="mail_address" placeholder="Mail Address">
                              <input type="password" class="password" name="password" placeholder="Password">
                              <input type="text" class="name" name="user_name" placeholder="Name">
                              <select name="country_id" class="country-width">
                                <option value="">Select Country</option>
                                {foreach from=$countrys item=country}
                                <option value="{$country.country_id}">{$country.country_name}</option>
                                {/foreach}
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
                            {foreach from=$users item=user}
                            <tr class="table">
                              <td>{$user.user_id}</td>
                              <td>{$user.password}</td>
                              <td>{$user.user_name}</td>
                              <td>{$user.mail_address}</td>
                              <td>{$user.country_name}</td>
                              <td>{$user.language}</td>
                              <td>{$user.user_status}</td>
                              <td>{$user.user_icon}</td>
                              <td>{$user.authority}</td>
                              <td><a>編集</a></td>
                            </tr>
                            {/foreach}
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
                            {foreach from=$users item=user}
                            <tr class="table">
                              <td>{$user.user_id}</td>
                              <td>{$user.password}</td>
                              <td>{$user.user_name}</td>
                              <td>{$user.mail_address}</td>
                              <td>{$user.country_name}</td>
                              <td>{$user.language}</td>
                              <td>{$user.user_status}</td>
                              <td>{$user.user_icon}</td>
                              <td>{$user.authority}</td>
                              <td><a href="{$SCRIPT_NAME}?type=manager&action=delete&user_id={$user.user_id}">削除</a></td>
                            </tr>
                            {/foreach}
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
                          {foreach from=$munis item=muni}
                          <tr class="table">
                            <td>{$muni.muni_id}</td>
                            <td>{$muni.muni_pass}</td>
                            <td>{$muni.muni_name}</td>
                            <td>{$muni.festival_id}</td>
                            <td>{$muni.muni_mail}</td>
                            <td>{$muni.muni_tel}</td>
                          </tr>
                          {/foreach}
                        </tbody>
                      </table> 
                    </div>
                    </div>
                    <div class="tab-pane" id="muni_tab2">
                      <div class="news_info_event">
                        <div class="box4-inner">
                          <div class="adduser">
                            <form method="post" action="{$SCRIPT_NAME}?type=manager&action=addMuniAccount">
                              <div><p style="color: red">{$errMsg}</p></div>
                              <input type="text" class="mailaddress" name="muni_id" placeholder="Municipality ID">
                              <input type="password" class="password" name="muni_pass" placeholder="Municipality Password">
                              <input type="text" class="name" name="muni_name" placeholder="Municipality Name">
                              <select name="festival_id" class="country-width">
                                <option value="">Select Festival</option>
                                {foreach from=$festival_id item=fes_id}
                                <option value="{$fes_id.festival_id}">{$fes_id.festival_name_en}</option>
                                {/foreach}
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
                          {foreach from=$munis item=muni}
                          <tr class="table">
                            <td>{$muni.muni_id}</td>
                            <td>{$muni.muni_pass}</td>
                            <td>{$muni.muni_name}</td>
                            <td>{$muni.festival_id}</td>
                            <td>{$muni.muni_mail}</td>
                            <td>{$muni.muni_tel}</td>
                            <td><a>編集</a></td>
                          </tr>
                          {/foreach}
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
                          {foreach from=$munis item=muni}
                          <tr class="table">
                            <td>{$muni.muni_id}</td>
                            <td>{$muni.muni_pass}</td>
                            <td>{$muni.muni_name}</td>
                            <td>{$muni.festival_id}</td>
                            <td>{$muni.muni_mail}</td>
                            <td>{$muni.muni_tel}</td>
                            <td><a href="{$SCRIPT_NAME}?type=manager&action=muni_delete&muni_id={$muni.muni_id}">削除</a></td>
                          </tr>
                          {/foreach}
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
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/tab-change.js"></script>
  </body>
</html>
