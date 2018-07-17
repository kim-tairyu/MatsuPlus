<?php
// index表示
define('_ROOT_DIR', __DIR__ . '/');
require_once _ROOT_DIR . '../src/init.php';
$controller = new IndexController();
$controller->run();

exit;
