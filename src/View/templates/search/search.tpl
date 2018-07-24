<!DOCTYPE html>
<html lang="ja">
<head>
{include file=_HTML_HEAD_DIR}
<script type="text/javascript" src="{_JS_DIR}/search.js"></script>
</head>
<body>
<!--header-->
{include file=_HEADER_DIR}
<div class="box4" id="myTapContent">
  <div class="box4-inner">
    <!-- 表示・非表示ボタン -->
    <p class="openBtn"><i class="fa fa-chevron-down faColor"></i>SEARCHBOX　▼</p>
    <!-- 説明文 -->
    <div class="search">
      <!--formスタート-->
      <form method="post" action="{$SCRIPT_NAME}?type=search&action=kensaku">
        <p>Search by festival name</p>
        <input type="text" placeholder="Search" class="search_text" name="festival_name" />
        <p>Search from the venue</p>
        <select class="pref_name" name="location">
          <option value="" selected>------</option>
          <option value="Hokkaido">Hokkaido</option>
          <option value="Aomori">Aomori</option>
          <option value="Iwate">Iwate</option>
          <option value="Miyagi">Miyagi</option>
          <option value="Akita">Akita</option>
          <option value="Yamagata">Yamagata</option>
          <option value="Fukushima">Fukushima</option>
          <option value="Ibaraki">Ibaraki</option>
          <option value="Tochigi">Tochigi</option>
          <option value="Gunma">Gunma</option>
          <option value="Saitama">Saitama</option>
          <option value="Chiba">Chiba</option>
          <option value="Tokyo">Tokyo</option>
          <option value="Kanagawa">Kanagawa</option>
          <option value="Niigata">Niigata</option>
          <option value="Toyama">Toyama</option>
          <option value="Ishikawa">Ishikawa</option>
          <option value="Fukui">Fukui</option>
          <option value="Yamanashi">Yamanashi</option>
          <option value="Nagano">Nagano</option>
          <option value="Gifu">Gifu</option>
          <option value="Shizuoka">Shizuoka</option>
          <option value="Aichi">Aichi</option>
          <option value="Mie">Mie</option>
          <option value="Shiga">Shiga</option>
          <option value="Kyoto">Kyoto</option>
          <option value="Osaka">Osaka</option>
          <option value="Hyogo">Hyogo</option>
          <option value="Nara">Nara</option>
          <option value="Wakayama">Wakayama</option>
          <option value="Tottori">Tottori</option>
          <option value="Shimane">Shimane</option>
          <option value="Okayama">Okayama</option>
          <option value="Hiroshima">Hiroshima</option>
          <option value="Yamaguchi">Yamaguchi</option>
          <option value="Tokushima">Tokushima</option>
          <option value="Kagawa">Kagawa</option>
          <option value="Ehime">Ehime</option>
          <option value="Kouchi">Kouchi</option>
          <option value="Fukuoka">Fukuoka</option>
          <option value="Saga">Saga</option>
          <option value="Nagasaki">Nagasaki</option>
          <option value="Kumamoto">Kumamoto</option>
          <option value="Oita">Oita</option>
          <option value="Miyazaki">Miyazaki</option>
          <option value="Kagoshima">Kagoshima</option>
          <option value="Okinawa">Okinawa</option>
        </select>

        <p>Search by date</p>
<!--
        <select name="year">
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018" selected>2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
        </select>
-->
        <select name="start_date">
          <option value="" selected>--</option>
          <option value="-01-">01</option>
          <option value="-02-">02</option>
          <option value="-03-">03</option>
          <option value="-04-">04</option>
          <option value="-05-">05</option>
          <option value="-06-">06</option>
          <option value="-07-">07</option>
          <option value="-08-">08</option>
          <option value="-09-">09</option>
          <option value="-10-">10</option>
          <option value="-11-">11</option>
          <option value="-12-">12</option>
        </select>

        <p>Search by tag</p>
        <select name="tag" class="tag_li">
            
        </select>
        <a href="#">
          <input type="submit" class="kensaku" value="検索" />
        </a>
      </form>
    </div>
  </div>
</div>

<!--検索結果表示エリア-->
<div class="search_results_box">
  <div class="search_results_box_inner">
    {foreach from=$searches item=search}
    　<div class="search_results_box1">
    　　<a href="{$SCRIPT_NAME}?type=festival&festival_id={$search.festival_id}">
        　<div class="search_results_box2">
            <div class="search_results_box2-1">
            　　<img src="{_IMGS_DIR}/{$festival.image}" class="event_image">
            </div>
            <div class="search_results_box2-2">
            　<h4 class="search_results_title">{$search.festival_name_en}</h4>
            　<h6 class="search_results_date_big">{$search.start_date}</h6>
            </div>
        　</div>
    　　</a>
    　</div>
    {/foreach}
  </div>
</div>
<!--フッター（SP版では非表示になってる）-->
    {include file=_FOOTER_DIR}
    <script src="{_JS_DIR}/jquery.min.js"></script>
    <script src="{_JS_DIR}/bootstrap.min.js"></script>
    <script src="{_JS_DIR}/tab-change.js"></script>
</body>
</html>
