<?php
/* Smarty version 3.1.32, created on 2018-07-10 17:13:09
  from '/Applications/MAMP/htdocs/matsuri/htdocs/index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b44e9250512b7_64711456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ab45d020e13a2448b06e89405f31b2c7781f179' => 
    array (
      0 => '/Applications/MAMP/htdocs/matsuri/htdocs/index.php',
      1 => 1531241544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b44e9250512b7_64711456 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>// index表示
define('_ROOT_DIR', __DIR__ . '/');
require_once _ROOT_DIR . '../src/init.php';
$controller = new IndexController();
$controller->run();

exit;
<?php }
}
