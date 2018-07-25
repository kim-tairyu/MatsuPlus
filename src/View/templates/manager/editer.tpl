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
                          <li class="active"><a href="#fes_tab1" data-toggle="tab">祭り一覧</a></li>
                          <li><a href="#fes_tab2" data-toggle="tab">祭り作成</a></li>
                          <li><a href="#fes_tab3" data-toggle="tab">祭り編集</a></li>
                          <li><a href="#fes_tab4" data-toggle="tab">祭り削除</a></li>
                        </ul>

                        <!-- タブのコンテンツ部分 -->
                        <div class="tab-content">
                          <div class="tab-pane active" id="fes_tab1">
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
                                  {foreach from=$festivals item=festival}
                                  <tr class="table">
                                    <td>{$festival.festival_id}</td>
                                    <td>{$festival.festival_name_en}</td>
                                    <td>{$festival.location_en}</td>
                                    <td>{$festival.start_date}</td>
                                    <td>{$festival.end_date}</td>
                                    <td>{$festival.tel}</td>
                                    <td>{$festival.fax}</td>
                                    <td>{$festival.email}</td>
                                    <td>{$festival.sponsor}</td>
                                    <td>{$festival.festival_status}</td>
                                  </tr>
                                  {/foreach}
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tab2">
                            <div class="news_info_event">
                              <div class="box4-inner">
                                <div class="adduser">
                                  <form method="post" action="{$SCRIPT_NAME}?type=upload">
                                    <input type="submit" class="touroku" value="Create a festival">
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tab3">
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
                                  {foreach from=$festivals item=festival}
                                  <tr class="table">
                                    <td>{$festival.festival_id}</td>
                                    <td>{$festival.festival_name_en}</td>
                                    <td>{$festival.location_en}</td>
                                    <td>{$festival.start_date}</td>
                                    <td>{$festival.end_date}</td>
                                    <td>{$festival.tel}</td>
                                    <td>{$festival.fax}</td>
                                    <td>{$festival.email}</td>
                                    <td>{$festival.sponsor}</td>
                                    <td>{$festival.festival_status}</td>
                                    <td><a>編集</a></td>
                                  </tr>
                                  {/foreach}
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="fes_tab4">
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
                                  {foreach from=$festivals item=festival}
                                  <tr class="table">
                                    <td>{$festival.festival_id}</td>
                                    <td>{$festival.festival_name_en}</td>
                                    <td>{$festival.location_en}</td>
                                    <td>{$festival.start_date}</td>
                                    <td>{$festival.end_date}</td>
                                    <td>{$festival.tel}</td>
                                    <td>{$festival.fax}</td>
                                    <td>{$festival.email}</td>
                                    <td>{$festival.sponsor}</td>
                                    <td>{$festival.festival_status}</td>
                                    <td><a>削除</a></td>
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
                                  {foreach from=$articles item=article}
                                  <tr class="table">
                                    <td>{$article.article_id}</td>
                                    <td>{$article.article_title}</td>
                                    <td>{$article.festival_id}</td>
                                    <td>{$article.post_date}</td>
                                  </tr>
                                  {/foreach}
                                </tbody>
                              </table> 
                            </div>
                          </div>
                          <div class="tab-pane" id="arc_tabtest2">
                            <div class="news_info_event">
                              <div class="box4-inner">
                                <div class="adduser">
                                  <form method="post" action="{$SCRIPT_NAME}?type=editer&action=addArticle">
                                    <div><p style="color: red">{$errMsg}</p></div>
                                    <input type="text" class="mailaddress" name="article_name" placeholder="Article Title">
                                    <select name="festival_id" class="country-width">
                                      <option value="">Select Festival</option>
                                      {foreach from=$festival_id item=fes_id}
                                      <option value="{$fes_id.festival_id}">{$fes_id.festival_name_en}</option>
                                      {/foreach}
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
                                  {foreach from=$articles item=article}
                                  <tr class="table">
                                    <td>{$article.article_id}</td>
                                    <td>{$article.article_title}</td>
                                    <td>{$article.festival_id}</td>
                                    <td>{$article.post_date}</td>
                                    <td><a href="">編集</a></td>
                                  </tr>
                                  {/foreach}
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
                                  {foreach from=$articles item=article}
                                  <tr class="table">
                                    <td>{$article.article_id}</td>
                                    <td>{$article.article_title}</td>
                                    <td>{$article.festival_id}</td>
                                    <td>{$article.post_date}</td>
                                    <td><a href="{$SCRIPT_NAME}?type=editer&action=deleteArticle&article_id={$article.article_id}">削除</a></td>
                                  </tr>
                                  {/foreach}
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
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/tab-change.js"></script>
  </body>
</html>
