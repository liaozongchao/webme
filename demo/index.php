<?php
/**
 * Example Application
 *
 * @package Example-application
 */
define(APP_PATH, dirname(__FILE__));
define(ROOT_PATH, dirname(APP_PATH));

require_once APP_PATH.'/configs/config.php';
require_once APP_PATH.'/include/SmartySetup.class.php';
$smarty = new SmartySetup();




$smarty->display('home/index.tpl');
