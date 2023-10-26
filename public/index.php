<?php

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEW_PATH', $root . 'view' . DIRECTORY_SEPARATOR);


/**!SECTION
 * 
 * Required_once
 */

require_once(APP_PATH . "App.php");

$app_instance = new App();
$files = $app_instance->readFile(FILES_PATH);

foreach ($files as $single_file) {
    var_dump($app_instance->readFileData($single_file));
}