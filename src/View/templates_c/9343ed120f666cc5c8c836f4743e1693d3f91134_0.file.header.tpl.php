<?php
/* Smarty version 3.1.32, created on 2018-07-23 07:31:32
  from 'C:\xampp\htdocs\kimu\src\View\templates\include\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5568345d4338_72775950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9343ed120f666cc5c8c836f4743e1693d3f91134' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\include\\header.tpl',
      1 => 1532323317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5568345d4338_72775950 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
  <!--boxA-innerはヘッダー内の諸々が1190px以上外に出ないようにするためのもの-->
  <div class="boxA-inner">
    <!--boxKUUHAKUはSP版表示になった時に左上に空白を持たせておくためのもの（今後戻るボタンなどがはいるかもしれない）-->
    <div class="boxse">
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search"><img src="<?php echo _IMGS_DIR;?>
/se.png" alt="" width="25" height="auto"></a>
    </div>
    <!--ロゴ画像のボックス-->
    <div class="box1">
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
"><img src="<?php echo _IMGS_DIR;?>
/logo.png" alt="" width="140" height="auto"></a>
    </div>
    <!--PC版表示の時のメニューボックス-->
    <div class="box2">
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
"><div class="box2-1">Home</div></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=search"><div class="box2-2">Search</div></a>
      <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"><div class="box2-3"><?php echo $_smarty_tpl->tpl_vars['changeBtn_name']->value;?>
</div></a>
    </div>
    <!--マイページに遷移する為のボックス-->
    <div class="box3">
      <div class="box3-1">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
"><img src="<?php echo _IMGS_DIR;?>
/my.png" alt="" width="25" height="auto"></a>
      </div>
      <!--スケジュールに遷移する為のボックス-->
      <div class="box3-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=<?php echo $_smarty_tpl->tpl_vars['schedule']->value;?>
"><img src="<?php echo _IMGS_DIR;?>
/kare.png" alt="" width="28" height="auto"></a>
      </div>
    </div>
  </div>
</header>
<?php }
}
