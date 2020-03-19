<?php
define('SYSTEM', dirname(__DIR__) . '/system/');
define('APP', dirname(__DIR__) . '/admin/');
define('CONFIG', dirname(__DIR__) . '/system/config/');
define('HTTP_SERVER', 'ocflame');
$app_config = 'admin';
require_once SYSTEM . '/bootstrap.php';