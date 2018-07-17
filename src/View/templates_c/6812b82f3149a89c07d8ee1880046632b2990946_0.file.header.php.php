<?php
/* Smarty version 3.1.32, created on 2018-07-12 04:53:36
  from '/Applications/MAMP/htdocs/matsuri/src/View/templates/include/header.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b46ded0d41e64_50704013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6812b82f3149a89c07d8ee1880046632b2990946' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/src/View/templates/include/header.php',
      1 => 1530201822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b46ded0d41e64_50704013 (Smarty_Internal_Template $_smarty_tpl) {
?>  <header>
    <!--boxA-innerはヘッダー内の諸々が1190px以上外に出ないようにするためのもの-->
    <div class="boxA-inner">
      <!--boxKUUHAKUはSP版表示になった時に左上に空白を持たせておくためのもの（今後戻るボタンなどがはいるかもしれない）-->
      <div class="boxse">
        <a href="search.php"><img src="../imgs/se.png" alt="" width="25" height="auto"></a>
      </div>
      <!--ロゴ画像のボックス-->
      <div class="box1">
        <a href="index.php"><img src="../imgs/logo.png" alt="" width="140" height="auto"></a>
      </div>
      <!--PC版表示の時のメニューボックス-->
      <div class="box2">
        <a href="index.php"><div class="box2-1">Home</div></a>
        <a href="search.php"><div class="box2-2">Search</div></a>
        <a href="<?php echo '<?php ';?>echo $link_mypage <?php echo '?>';?>"><div class="box2-3"><?php echo '<?php ';?>echo $link_mypage_name <?php echo '?>';?></div></a>
      </div>
      <!--マイページに遷移する為のボックス-->
      <div class="box3">
      <div class="box3-1">
        <a href="<?php echo '<?php ';?>echo $link_mypage <?php echo '?>';?>"><img src="../imgs/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="<?php echo '<?php ';?>echo $link_schedule <?php echo '?>';?>"><img src="../imgs/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
    </div>
</header>
<?php }
}
