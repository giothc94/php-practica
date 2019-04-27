<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';
include_once '../bdconnection/connection.php';
include_once '../bdconnection/select.php';

$baseDir=str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseURL='http://' .$_SERVER['HTTP_HOST'] .$baseDir;
define('BASE_URL', $baseURL);

// function render($filename,$params=[]){
//   ob_start();
//   extract($params);
//   include $filename;
//   return ob_get_clean();
// }

$route=$_GET['route'] ?? '/';

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$router=new RouteCollector();
$router->controller('/', App\Controllers\IndexController::class);
$router->controller('/admin', App\Controllers\Admin\IndexController::class);
$router->controller('/admin/manage', App\Controllers\Admin\Manage\IndexController::class);
$router->controller('/admin/manage/newpost', App\Controllers\Admin\Manage\Newpost\PostController::class);


$dispatcher=new Dispatcher($router->getData());
$response=$dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);
echo $response;
