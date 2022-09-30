<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once 'app/controllers/itemcontroller.php';
require_once 'app/controllers/brandcontroller.php';
require_once 'app/controllers/usercontroller.php';

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controllerbrand = new brandcontroller();
        $controllerbrand->showbrand();
        break;

    case 'brand':
        $marca = $params[1]; 
    break;
    case 'login':
      $controller = new usercontroller();
      $controller->login(); 
    break;
    case 'logout':
     $controller = new usercontroller();
     $controller->logout();
    break;
    case 'delete':
    break;

    case 'edit':
    break;

    case 'detail':
    break;
    
    default:
        echo 'error 404';
        break;
}

