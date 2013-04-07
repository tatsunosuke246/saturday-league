<?php
/**
 * フロントコントローラ
 */

defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

set_include_path( implode( PATH_SEPARATOR, array( realpath( APPLICATION_PATH . '/../library' ), get_include_path(), ) ) );

set_include_path( implode( PATH_SEPARATOR, array( realpath( APPLICATION_PATH . '/models'), get_include_path(), ) ) );
set_include_path( implode( PATH_SEPARATOR, array( realpath( APPLICATION_PATH . '/utility'), get_include_path(), ) ) );

require_once 'Zend/Controller/Front.php';
require_once 'Zend/Db.php';
require_once 'Zend/Config/Ini.php';
require_once 'Zend/Registry.php';
Require_once 'Zend/Controller/Router/Rewrite.php';

require_once 'Smarty-2.6.27/libs/Smarty.class.php';

// Smarty生成と保存
$smarty = new Smarty();

$smarty->debugging = false;
$smarty->force_compile = false;
$smarty->caching = false;
$smarty->compile_check = true;
$smarty->cache_lifetime = -1;

$smarty->trusted_dir  = APPLICATION_PATH . '/views/templates';
$smarty->template_dir = APPLICATION_PATH . '/views/templates';
$smarty->compile_dir  = APPLICATION_PATH . '/views/templates_c';
$smarty->cache_dir    = APPLICATION_PATH . '/views/cache';
$smarty->plugins_dir  = array('plugins', APPLICATION_PATH . '/views/plugins');

$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';

Zend_Registry::set('smarty', $smarty);

Zend_Controller_Front::getInstance()->setParam( 'noViewRenderer', true );
/*
$router = new Zend_Controller_Router_Rewrite();
Zend_Controller_Front::getInstance()->setControllerDirectory('../application/controllers');

Zend_Controller_Front::getInstance()->setControllerDirectory('../application/controllers')
->setRouter($router)
->setBaseUrl('/public');
*/
// アプリケーションを実行する
$front = Zend_Controller_Front::run('../application/controllers');

