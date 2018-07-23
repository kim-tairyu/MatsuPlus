<?php
/* Smarty version 3.1.32, created on 2018-07-23 07:31:32
  from 'C:\xampp\htdocs\kimu\src\View\templates\include\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b5568346b3301_94024979',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3dd7afb76102327855bb3b16864f270ca20102b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kimu\\src\\View\\templates\\include\\footer.tpl',
      1 => 1532323317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5568346b3301_94024979 (Smarty_Internal_Template $_smarty_tpl) {
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
