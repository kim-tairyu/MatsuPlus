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
        <h1 class="matsuri_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">{$festival.festival_name_en}</h1>
          <!--祭りor記事画像(仮)-->
        <div class="home_img2 col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <a href="#"><img src="{_IMGS_SERVER_DIR}/{$festival.image}" alt="祭り"></a>
        </div>
        <!--お気に入りボタン-->
        <div class="fev_button_box">
          <a href="{$SCRIPT_NAME}?type=festival&festival_id={$festival.festival_id}&action=favorite" style="text-decoration:none;"><div class="fev_button">
          <img src="{_IMGS_DIR}/fev.png" width="40" height="40" alt="サンプル"></div></a>
          <!--スケジュール追加ボタン-->
          <a href="#" style="text-decoration:none;"><div class="fev_button2" id="Modal_Open" class="btn_price">
          <img src="{_IMGS_DIR}/plus.png" width="40" height="40" alt="サンプル"></div></a>
        </div>
        <!--モーダルウインドウ-->
        <div id="Modal_Content">
          <p>Scheduling</p>
          <!--イベント-->
          <form action="{$SCRIPT_NAME}?type=festival" method="post">
            <input type="text" id="event" name="event" placeholder="event"><br/>
            <!--場所-->
            <input type="text" id="place" name="place" placeholder="place"><br/>
            <div class="suke-box">
            <!--カレンダー開始1-->
            <!-- <input type="text" id="calendar" class="suke-box1" placeholder="startDay" data-mindate=today> -->
            <input type="date" id="calendar" name="start_date" class="suke-box1" placeholder="startDay" data-mindate=today>
            <!--時間開始1-->
            <select name="start_time" id="time">
              <option value="time"></option>
              <option value="0:00">0:00</option>
              <option value="0:30">0:30</option>
              <option value="1:00">1:00</option>
              <option value="1:30">1:30</option>
              <option value="2:00">2:00</option>
              <option value="2:30">2:30</option>
              <option value="3:00">3:00</option>
              <option value="3:30">3:30</option>
              <option value="4:00">4:00</option>
              <option value="430">4:30</option>
              <option value="5:00">5:00</option>
              <option value="5:30">5:30</option>
              <option value="6:00">6:00</option>
              <option value="6:30">6:30</option>
              <option value="7:00">7:00</option>
              <option value="7:30">7:30</option>
              <option value="8:00">8:00</option>
              <option value="8:30">8:30</option>
              <option value="9:00">9:00</option>
              <option value="9:30">9:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="24:00">24:00</option>
            </select>
            </div>
            <!--カレンダー開始１と時間開始１終了-->
            <div class="suke-box">
            <!--カレンダー開始2-->
            <input type="date" id="calendar" name="end_date" class="suke-box1" placeholder="endDay" data-mindate=today>
            <!--時間開始2-->
            <select name="end_time" id="time">
              <option value="0:00">0:00</option>
              <option value="0:30">0:30</option>
              <option value="1:00">1:00</option>
              <option value="1:30">1:30</option>
              <option value="2:00">2:00</option>
              <option value="2:30">2:30</option>
              <option value="3:00">3:00</option>
              <option value="3:30">3:30</option>
              <option value="4:00">4:00</option>
              <option value="430">4:30</option>
              <option value="5:00">5:00</option>
              <option value="5:30">5:30</option>
              <option value="6:00">6:00</option>
              <option value="6:30">6:30</option>
              <option value="7:00">7:00</option>
              <option value="7:30">7:30</option>
              <option value="8:00">8:00</option>
              <option value="8:30">8:30</option>
              <option value="9:00">9:00</option>
              <option value="9:30">9:30</option>
              <option value="10:00">10:00</option>
              <option value="10:30">10:30</option>
              <option value="11:00">11:00</option>
              <option value="11:30">11:30</option>
              <option value="12:00">12:00</option>
              <option value="12:30">12:30</option>
              <option value="13:00">13:00</option>
              <option value="13:30">13:30</option>
              <option value="14:00">14:00</option>
              <option value="14:30">14:30</option>
              <option value="15:00">15:00</option>
              <option value="15:30">15:30</option>
              <option value="16:00">16:00</option>
              <option value="16:30">16:30</option>
              <option value="17:00">17:00</option>
              <option value="17:30">17:30</option>
              <option value="18:00">18:00</option>
              <option value="18:30">18:30</option>
              <option value="19:00">19:00</option>
              <option value="19:30">19:30</option>
              <option value="20:00">20:00</option>
              <option value="20:30">20:30</option>
              <option value="21:00">21:00</option>
              <option value="21:30">21:30</option>
              <option value="22:00">22:00</option>
              <option value="22:30">22:30</option>
              <option value="23:00">23:00</option>
              <option value="23:30">23:30</option>
              <option value="24:00">24:00</option>
            </select>
            </div>
            <input type="hidden" name="festival_id" value="{$festival.festival_id}">
            <!--コメント-->
            <textarea id="free" name="free" placeholder=""></textarea>
            <!--決定-->
            <div class="user_button4">
              <input type="submit" class="enter" id="e" value="ENTER">
            </div>
          </form>
      {*
          <script>
            // flatpickrの初期化
            flatpickr('#calendar');
          </script>
      *}
          <!--<button id="Modal_Enter" class="btn_link">はい</button>
          <button id="Modal_Close" class="btn_link">いいえ</button>
          <input type="checkbox" id="Modal_Cbox"/>-->
        </div>
        <!--記事の日付とサブタイトル？-->
        <div class="article_header col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <div class="date_box2">
            <!--この下のdate2をアクセスカウンターで稲買いします-->
            <h5 class="date2">{$festival.start_time}</h5>
            <h5 class="date">{$festival.start_time}</h5>
          </div>
        </div>
        <!--記事本文-->
        <div class="article col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <p>{$festival.description_en}</p>
        </div>
        <!--動画-->
        <p>{$festival.movie_url}</p>
        <!--MAP-->
        <iframe class="col-xs-12 col-md-12 col-lg-10 col-lg-offset-1"src="http://maps.google.com/maps?q={$festival.x_coordinate},{$festival.y_coordinate}&output=embed" width=100% height="450" frameborder="0" style="border:0"></iframe>
        <!--グッズ-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Souvenir</h2>
          <div class="souvenir_img_box">
            {foreach from=$gifts item=gift}
            <div class="souvenir_img_box2">
              <a href="#">
                <div class="souvenir_img_box3">
                  <div class="souvenir_img_boxA">
                    <img src="{_IMGS_SERVER_DIR}/{$gift.image}" alt="ねぶた祭お土産">
                  </div>
                  <div class="souvenir_img_boxB">
                    <h4 class="souvenir_title">{$gift.gift_name_en}</h4>
                  </div>
                </div>
              </a>
            </div>
            {foreachelse}
            <div>No Gift Data!</div>
            {/foreach}
          </div>
        </div>
        <!--コメントエリア-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Comment</h2>
          {foreach from=$reviews item=review}
          <!--コメント１-->
          <div class="comment_content">
            <div class="">
              <div class="comment_user_img">
                  <img src="{_IMGS_SERVER_DIR}/{$review.user_icon}" alt="ユーザーアイコン">
              </div>
              <div class="comment_hosi">
                {for $evaluation=1 to {$review.star}}<p>★</p>{/for}
              </div>
              <div class="comment_user_name">
                <p>{$review.user_name}</p>
              </div>
              <div class="comment">
                <p>{$review.review}</p>
              </div>
            </div>
          </div>
          {foreachelse}
          <div>No Review!</div>
          {/foreach}
          <!--コメント入力エリア-->
          <div class="comment_content2">
            <div class="comment_submit">
              <form action="{$SCRIPT_NAME}?type=festival" method="post">
                comment<br>
                <!--星評価-->
                <div class="user_hosi">
                  <div class="evaluation">
                    <input id="star1" type="radio" name="star" value="5" />
                    <label for="star1"><span class="text">Very good</span>★</label>
                    <input id="star2" type="radio" name="star" value="4" />
                    <label for="star2"><span class="text">Good</span>★</label>
                    <input id="star3" type="radio" name="star" value="3" />
                    <label for="star3"><span class="text">Medium</span>★</label>
                    <input id="star4" type="radio" name="star" value="2" />
                    <label for="star4"><span class="text">Bad</span>★</label>
                    <input id="star5" type="radio" name="star" value="1" />
                    <label for="star5"><span class="text">Very Bad</span>★</label>
                  </div>
                </div>
                <!--コメント記入-->
                <textarea name="kanso" rows="4" cols="40" class="comment_area"></textarea><br>
                <!-- 祭りID -->
                <input type="hidden" name="festival_id" value="{$festival.festival_id}">
                <input type="submit" value="送信" class="comment_button">
                <input type="reset" value="リセット" class="comment_button">
              </form>
            </div>
          </div>
        </div>
        <!--タグエリア-->
        <div class="related_article_title col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          <h2>Tag</h2>
        </div>

        <div class="related_article_title_tag col-xs-12 col-md-12 col-lg-10 col-lg-offset-1">
          {foreach from=$tags item=tag}
          <a href="#" class="tag">{$tag.tag_name_en}</a>
          {foreachelse}
          <div>No Tag!</div>
          {/foreach}
        </div>

      </div>
    </div>
    
    <!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/modal.js"></script>
  </body>
</html>
