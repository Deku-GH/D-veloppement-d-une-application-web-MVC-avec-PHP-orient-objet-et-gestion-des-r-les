<?php 
namespace Mvc\Public;
require '../../vendor/autoload.php';

use Mvc\App\Core\Router;


$router = new Router();
$router->handle($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);
var_dump($_SERVER['REQUEST_METHOD']);