<header>
  <!--boxA-innerはヘッダー内の諸々が1190px以上外に出ないようにするためのもの-->
  <div class="boxA-inner">
    <!--boxKUUHAKUはSP版表示になった時に左上に空白を持たせておくためのもの（今後戻るボタンなどがはいるかもしれない）-->
    <div class="boxse">
      <a href="{$SCRIPT_NAME}?type=search"><img src="{_IMGS_DIR}/se.png" alt="" width="25" height="auto"></a>
    </div>
    <!--ロゴ画像のボックス-->
    <div class="box1">
      <a href="{$SCRIPT_NAME}"><img src="{_IMGS_DIR}/logo.png" alt="" width="140" height="auto"></a>
    </div>
    <!--PC版表示の時のメニューボックス-->
    <div class="box2">
      <a href="{$SCRIPT_NAME}"><div class="box2-1">Home</div></a>
      <a href="{$SCRIPT_NAME}?type=search"><div class="box2-2">Search</div></a>
      <a href="{$SCRIPT_NAME}?type={$user}"><div class="box2-3">{$changeBtn_name}</div></a>
    </div>
    <!--マイページに遷移する為のボックス-->
    <div class="box3">
      <div class="box3-1">
        <a href="{$SCRIPT_NAME}?type={$user}"><img src="{_IMGS_DIR}/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="{$SCRIPT_NAME}?type={$schedule}"><img src="{_IMGS_DIR}/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
  </div>
</header>
