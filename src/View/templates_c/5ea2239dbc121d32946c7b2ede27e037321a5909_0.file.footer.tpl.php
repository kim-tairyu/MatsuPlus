<?php
/* Smarty version 3.1.32, created on 2018-07-24 09:15:22
  from '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/include/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b56ee2adeae91_31997648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ea2239dbc121d32946c7b2ede27e037321a5909' => 
    array (
      0 => '/Applications/MAMP/htdocs/Matsuri-plus/src/View/templates/include/footer.tpl',
      1 => 1532423720,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b56ee2adeae91_31997648 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
  <div class="box8">
    <div class="box8-1">
      <p class="copy">Copyright © 2018 MATSURI PLUS All Rights Reserved</p>
      <?php if (!empty($_smarty_tpl->tpl_vars['authority']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['authority']->value == 'manager') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=editer">編集者画面</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=manager">管理者画面</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=upload">自治体用入力画面</a>
        <?php } elseif ($_smarty_tpl->tpl_vars['authority']->value == 'editer') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?type=editer">編集者画面</a>
        <?php }?>
      <?php }?>
    </div>
  </div>
</footer>

<?php if (!empty($_smarty_tpl->tpl_vars['debug_str']->value)) {?>
<pre><?php echo $_smarty_tpl->tpl_vars['debug_str']->value;?>
</pre>
<?php }
}
}
