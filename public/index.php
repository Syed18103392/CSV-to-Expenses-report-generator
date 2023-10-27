<?php

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;
$root_path = PHP_URL_PATH;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'view' . DIRECTORY_SEPARATOR);


/**!SECTION
 * 
 * Required_once
 */

require_once(APP_PATH . "App.php");
require_once(VIEW_PATH . "View.php");