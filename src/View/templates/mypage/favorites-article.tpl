<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

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
            {foreach from=$favorite_art item=article}
            <div class="news_info_event_box">
              <a href="#" style="text-decoration:none;"><div class="fev_button-top"><p>♡</p></div></a>
                <a href="{$SCRIPT_NAME}?type=article&article_id={$article.article_id}">
                  <div class="news_box">
                    <div class="news_box1">
                      <img src="{_IMGS_SERVER_DIR}/{$article.image}" class="event_image">
                    </div>
                    <div class="news_box2">
                      <h4 class="news_title">{$article.article_title}</h4>
                      <!--この下のdata_big2がアクセスカウンタでおねがいします-->
                      <div class="date_box">
                      <h6 class="date_big2"></h6>
                      <h6 class="date_big">{$article.post_date}</h6>
                      </div>
                    </div>
                  </div>
                </a>
            </div>
            {foreachelse}
            <div>No Favorite Festival!</div>
            {/foreach}
          </div>
        </div>
      </div>
    </div>

    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
  </body>
</html>
