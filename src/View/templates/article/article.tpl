<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
  <body>
    <!--header-->
    {include file=_HEADER_DIR}

    <!-- maincontents -->
    <div class="main_content" id="myTapContent">
      <div class="main_content_fes_inner">
        <!--記事or祭りタイトル-->
        <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">{$article.article_title}</h1>
        <!--祭りor記事画像(仮)-->
        <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <a href="#"><img src="{_IMGS_SERVER_DIR}/{$article.image}" alt="祭り"></a>
        </div>
        <!--お気に入りボタン-->
        <div class="fev_button_box">
          <a href="{$SCRIPT_NAME}?type=article&article_id={$article.article_id}&f" style="text-decoration:none;"><div class="fev_button"><p>♡</p></div></a>
        </div>
        <!--記事の日付とサブタイトル？-->
        <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="date_box2">
            <!--この下のdate2をアクセスカウンターで稲買いします-->
            <h5 class="date2">アクセスカウンター（仮）</h5>
            <h5 class="date">{$article.post_date}</h5>
          </div>
        </div>
        <!--記事本文-->
        <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <p>{$article.text}</p>
        </div>
        <!--関連-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Related article</h2>
        </div>
        <!--wrapのようなもの-->
        <div class="news_info_event">
          <!--記事1-->
          {foreach from=$relation_tag item=relation}
          <div class="news_info_event_box">
            <a href="{$SCRIPT_NAME}?type=article&article_id={$relation.article_id}">
              <div class="news_box">
                <div class="news_box1">
                  <img src="{_IMGS_SERVER_DIR}/{$relation.image}" class="event_image">
                </div>
                <div class="news_box2">
                  <h4 class="news_title">{$relation.article_title}</h4>
                  <h6 class="date_big">{$relation.post_date}</h6>
                </div>
              </div>
            </a>
          </div>
          {/foreach}
        </div>
      </div>
    </div>
    
    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
  </body>
</html>
