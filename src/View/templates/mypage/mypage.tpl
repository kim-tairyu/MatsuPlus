<!DOCTYPE html>
<html lang="ja">
  <head>
    {include file=_HTML_HEAD_DIR}
  </head>
<body>
  <!--header-->
  {include file=_HEADER_DIR}

  <!-- maincontents -->
  <div class="mypage">
    <div class="mypage-inner">
      <!-- ユーザーのプロフィール画像 -->
      <div class="my_image">
        <img src="{_IMGS_DIR}/{$smarty.session.user_icon}" class="">
      </div>
      <!-- ユーザーネームをかこっているボックス -->
      <div class="user_name_box">
        <p class="user_name">{$smarty.session.user_name}</p>
      </div>
      <!--祭りお気に入り、記事お気に入り、設定への遷移ボタンをかこっているボックス-->
      <div class="fes_box">
        <div class="btn-fes_box"><a href="{$SCRIPT_NAME}?type=favorites-festival" class="btn-fes">Festival Favorites</a></div>
        <div class="btn-fes_box"><a href="{$SCRIPT_NAME}?type=favorites-article" class="btn-fes">Article Favorites</a></div>
        <div class="btn-fes_box"><a href="{$SCRIPT_NAME}?type=config" class="btn-fes">Configuration</a></div>
      </div>
    </div>
  </div>

  <!--フッター（SP版では非表示になってる）-->
  {include file=_FOOTER_DIR}
</body>
</html>
