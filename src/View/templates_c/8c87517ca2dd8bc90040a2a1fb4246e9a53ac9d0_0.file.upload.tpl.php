<?php
/* Smarty version 3.1.32, created on 2018-07-25 16:07:17
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/upload/upload.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b58a035de3193_43111288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c87517ca2dd8bc90040a2a1fb4246e9a53ac9d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/upload/upload.tpl',
      1 => 1532534668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b58a035de3193_43111288 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
    <head>
        <?php $_smarty_tpl->_subTemplateRender(_HTML_UPLOAD_HEAD_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo _JS_DIR;?>
/upload.js"><?php echo '</script'; ?>
>
      <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!--header-->
        <?php $_smarty_tpl->_subTemplateRender(_HEADER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <form class="" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=upload_complete" method="post" enctype="multipart/form-data">

        <!-- 祭り名前 -->
        <div class="form-group">
          <label for="InputFesName" class="control-label col-xs-2 col-sm-2 col-lg-2">祭り名前<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" id="InputFesName" name="name_data" required>
          </div>
        </div>

        <!-- 場所 -->
        <div class="form-group">
          <label for="InputPlace" class="control-label col-xs-2 col-sm-2 col-lg-2">場所<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" style="width:40%"class="form-control" id="InputPost" name="location_data" value="" placeholder="郵便番号" required>
            <select class="form-control" name="pref_name_data" required>
              <option value="" selected>都道府県</option>
              <option value="北海道">北海道</option>
              <option value="青森県">青森県</option>
              <option value="岩手県">岩手県</option>
              <option value="宮城県">宮城県</option>
              <option value="秋田県">秋田県</option>
              <option value="山形県">山形県</option>
              <option value="福島県">福島県</option>
              <option value="茨城県">茨城県</option>
              <option value="栃木県">栃木県</option>
              <option value="群馬県">群馬県</option>
              <option value="埼玉県">埼玉県</option>
              <option value="千葉県">千葉県</option>
              <option value="東京都">東京都</option>
              <option value="神奈川県">神奈川県</option>
              <option value="新潟県">新潟県</option>
              <option value="富山県">富山県</option>
              <option value="石川県">石川県</option>
              <option value="福井県">福井県</option>
              <option value="山梨県">山梨県</option>
              <option value="長野県">長野県</option>
              <option value="岐阜県">岐阜県</option>
              <option value="静岡県">静岡県</option>
              <option value="愛知県">愛知県</option>
              <option value="三重県">三重県</option>
              <option value="滋賀県">滋賀県</option>
              <option value="京都府">京都府</option>
              <option value="大阪府">大阪府</option>
              <option value="兵庫県">兵庫県</option>
              <option value="奈良県">奈良県</option>
              <option value="和歌山県">和歌山県</option>
              <option value="鳥取県">鳥取県</option>
              <option value="島根県">島根県</option>
              <option value="岡山県">岡山県</option>
              <option value="広島県">広島県</option>
              <option value="山口県">山口県</option>
              <option value="徳島県">徳島県</option>
              <option value="香川県">香川県</option>
              <option value="愛媛県">愛媛県</option>
              <option value="高知県">高知県</option>
              <option value="福岡県">福岡県</option>
              <option value="佐賀県">佐賀県</option>
              <option value="長崎県">長崎県</option>
              <option value="熊本県">熊本県</option>
              <option value="大分県">大分県</option>
              <option value="宮崎県">宮崎県</option>
              <option value="鹿児島県">鹿児島県</option>
              <option value="沖縄県">沖縄県</option>
            </select>
            <input type="text" class="form-control" id="InputPlace" name="location_details_data" value="" required placeholder="詳細場所" required>
          </div>
        </div>

        <!-- 時間 -->
        <div class="form-inline">
          <label for="InputDate"class="col-xs-2 col-md-2 col-lg-2">時間<span>＊</span></label>
          <div class="form-group col-xs-10 col-md-10 col-lg-10">
            <input type="date" name="start_date_data" value="" required>
            <input type="text" name="start_hour_data" value="" required>
            <label for="InputYear">時</label>
            <input type="text" name="start_minute_data" value="" required>
            <label for="InputYear">分(開始)</label><br>
            <input type="date" name="end_date_data" value="" required>
            <input type="text" name="end_hour_data" value="" required>
            <label for="InputYear">時</label>
            <input type="text" name="end_minute_data" value="" required>
            <label for="InputYear">分(終了)</label>
          </div>
        </div>

        <!-- URL -->
        <div class="form-group">
          <label for="InputURL" class="control-label col-xs-2 col-sm-2 col-lg-2">URL</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" id="InputURL" name="url_data" value="">
          </div>
        </div>

        <!-- 祭り説明 -->
        <div class="form-group">
          <label for="InputDetailed" class="control-label col-xs-2 col-sm-2 col-lg-2">祭り詳細<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <textarea name="InputDetailed" class="form-control" rows="8" cols="80"required></textarea>
          </div>
        </div>

        <!-- 動画 -->
        <div class="form-group">
          <label for="InputVideoURL" class="control-label col-xs-2 col-sm-2 col-lg-2">動画</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputVideoURL" value="">
          </div>
        </div>

        <!-- 座標 -->
        <div class="form-inline">
          <label for="InputCoordinate"class="col-xs-2 col-md-2 col-lg-2">座標<span>＊</span></label>
          <div class="form-group col-xs-10 col-md-10 col-lg-10">
            <label for="InputLatitude">緯度</label>
            <input type="text" name="x_data" value="" required>
            <label for="InputLongitude">経度</label>
            <input type="text" name="y_data" value="" required>
          </div>
        </div>

        <!-- TEL -->
        <div class="form-group">
          <label for="InputTel" class="control-label col-xs-2 col-sm-2 col-lg-2">TEL<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputTEL" value="" required>
          </div>
        </div>

        <!-- FAX -->
        <div class="form-group">
          <label for="InputFAX" class="control-label col-xs-2 col-sm-2 col-lg-2">FAX</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputFAX" value="">
          </div>
        </div>

        <!-- e-mail -->
        <div class="form-group">
          <label for="InputE-mail" class="control-label col-xs-2 col-sm-2 col-lg-2">E-MAIL<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputE-mail" value="" required>
          </div>
        </div>

        <!-- FACEBOOK -->
        <div class="form-group">
          <label for="InputFacebook" class="control-label col-xs-2 col-sm-2 col-lg-2">FACEBOOK</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputFacebook" value="">
          </div>
        </div>

        <!-- Twitter -->
        <div class="form-group">
          <label for="InputTwitter" class="control-label col-xs-2 col-sm-2 col-lg-2">Twitter</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="text" class="form-control" name="InputTwitter" value="">
          </div>
        </div>

        <!-- 参加◯× -->
        <div class="form-group">
          <label for="InputTF" class="control-label col-xs-2 col-sm-2 col-lg-2">参加<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <label class="radio-inline">
              <input type="radio" id="true" name="radio-inline" value="◯" required>◯
            </label>
            <label class="radio-inline">
              <input type="radio" id="false" name="radio-inline" value="×" required>×
            </label>
          </div>
        </div>

        <!-- 祭りのタイムテーブル -->
        <div class="form-group" style="clear:both">
          <label for="InputTimeTable" class="control-label col-xs-2 col-sm-2 col-lg-2">祭りのタイムテーブル<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <textarea name="InputTimeTable" class="form-control" rows="8" cols="80" required></textarea>
          </div>
        </div>

        <!-- スポンサー情報 -->
        <div class="form-group">
          <label for="InputSponsor" class="control-label col-xs-2 col-sm-2 col-lg-2">スポンサー情報</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <textarea name="InputSponsor" class="form-control" rows="8" cols="80"required></textarea>
          </div>
        </div>

        <!-- 祭り歴史 -->
        <div class="form-group">
          <label for="InputFesHistory" class="control-label col-xs-2 col-sm-2 col-lg-2">祭りの歴史</label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <textarea name="InputFesHistory" class="form-control" rows="8" cols="80"></textarea>
          </div>
        </div>

        <!-- トップ画像 -->
        <div class="form-group">
          <label for="InputImage" class="control-label col-xs-2 col-sm-2 col-lg-2">TOP画像<span>＊</span></label>
          <div class="col-xs-10 col-sm-10 col-lg-10">
            <input type="file" name="img" value="" accept=".jpg,.jpeg" multiple required>
          </div>
        </div>

        <!-- お土産 -->
        <div class="form-group" style="clear:both">
          <label for="InputSpecialty" class="control-label col-xs-2 col-md-2 col-lg-2">お土産</label>
          <div class="form-inline col-xs-10 col-md-10 col-lg-10">
            <div class="form-group">

              <!-- specialty 1 -->
              <label for="InputSpecName" class="sr-only">名前</label>
              <input type="text" class="form-control" name="gift_name1" value="" placeholder="名前">
            </div>
            <div class="form-group">
              <label for="InputFile" class="sr-only">File</label>
              <input type="file"  name="gift_image1" value="" accept=".jpg,.jpeg">
            </div>
            <div class="form-group">
              <label for="InputPrice" class="sr-only">価格</label>
              <input type="text" class="form-control" name="gift_price1" value="" placeholder="価格">
            </div>
            <br>

            <!-- specialty 2 -->
            <div class="form-group">
              <label for="InputSpecName" class="sr-only">名前</label>
              <input type="text" class="form-control" name="gift_name2" value="" placeholder="名前">
            </div>
            <div class="form-group">
              <label for="InputFile" class="sr-only">File</label>
              <input type="file"  name="gift_image2" value="" accept=".jpg,.jpeg">
            </div>
            <div class="form-group">
              <label for="InputPrice" class="sr-only">価格</label>
              <input type="text" class="form-control" name="gift_price2" value="" placeholder="価格">
            </div>
            <br>

            <!-- specialty 3 -->
            <div class="form-group">
              <label for="InputSpecName" class="sr-only">名前</label>
              <input type="text" class="form-control" name="gift_name3" value="" placeholder="名前">
            </div>
            <div class="form-group">
              <label for="InputFile" class="sr-only">File</label>
              <input type="file"  name="gift_image3" value="" accept=".jpg,.jpeg">
            </div>
            <div class="form-group">
              <label for="InputPrice" class="sr-only">価格</label>
              <input type="text" class="form-control" name="gift_price3" value="" placeholder="価格">
            </div>
            <br>

            <!-- specialty 4 -->
            <div class="form-group">
              <label for="InputSpecName" class="sr-only">名前</label>
              <input type="text" class="form-control" name="gift_name4" value="" placeholder="名前">
            </div>
            <div class="form-group">
              <label for="InputFile" class="sr-only">File</label>
              <input type="file"  name="gift_image4" value="" accept=".jpg,.jpeg">
            </div>
            <div class="form-group">
              <label for="InputPrice" class="sr-only">価格</label>
              <input type="text" class="form-control" name="gift_price4" value="" placeholder="価格">
            </div>
          </div>


        </div>

        <!-- タグ -->
        <div class="form-group" style="clear:both">
          <label for="InputTag" class="control-label col-xs-2 col-md-2 col-lg-2">タグ<span>＊</span></label>
          <div class="form-inline col-xs-10 col-md-10 col-lg-10">
            <div class="form-group">
              <label for="SelectSeason" class="sr-only">季節</label>
              <select class="season_tag" name="season_tag" required>
                <option value="" selected>季節</option>
                <option value="春">春</option>
                <option value="夏">夏</option>
                <option value="秋">秋</option>
                <option value="冬">冬</option>
              </select>
            </div>
            <div class="form-group">
              <label for="SelectPlace" class="sr-only">地方</label>
              <select class="place_tag" name="place_tag" required>
                <option value="" selected>地方</option>
                <option value="北海道">北海道</option>
                <option value="東北">東北</option>
                <option value="関東">関東</option>
                <option value="中部">中部</option>
                <option value="近畿">近畿</option>
                <option value="中国">中国</option>
                <option value="四国">四国</option>
                <option value="九州沖縄">九州沖縄</option>
              </select>
            </div>
            <div class="form-group">
              <input type="button" name="" value="追加" onclick="add()">
            </div>
            <div class="form-group" id="add"></div>
          </div>
        </div>

        <input type="submit" class="btn btn-default btn-lg" name="" value="送信">
        </form>
      
    </body>
    <div id="footer">
    <!--フッター（SP版では非表示になってる）-->
    <?php $_smarty_tpl->_subTemplateRender(_FOOTER_DIR, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>
</html><?php }
}
