<?php
/* Smarty version 3.1.32, created on 2018-07-19 10:12:29
  from 'C:\xampp\htdocs\matsuri\Matsuri-plus\src\View\templates\include\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b4fe57daf44c5_47991573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a49a1bead1dd9e8e80c69c9f81ee0833ed374d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\matsuri\\Matsuri-plus\\src\\View\\templates\\include\\footer.tpl',
      1 => 1531962444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b4fe57daf44c5_47991573 (Smarty_Internal_Template $_smarty_tpl) {
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
