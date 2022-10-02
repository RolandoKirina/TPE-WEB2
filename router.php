<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once './app/controllers/chocolatecontroller.php';
require_once './app/controllers/brandcontroller.php';
require_once './app/controllers/usercontroller.php';

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 

$params = explode('/', $action);

$brandcontroller = new brandcontroller();

switch ($params[0]) {
    case 'home':
        $brandcontroller->showbrand();
        break;
    case 'add':
        $brandcontroller->addData();
        break;
    case 'delete':
        $id = $params[1];
        $brandcontroller->delete($id);
        break;
    case 'edit':
        $id = $params[1];
        $brandcontroller->edit($id);
        break;
    case 'login':
      $controller = new usercontroller();
      $controller->login(); 
    break;
    /*case 'logout':
     $controller = new usercontroller();
     $controller->logout();
    break;*/   
    /*case 'detail':
        echo "mostrardetail";
    break;*/
    /*case 'chocolate':
        $controllerchocolate = new chocolatecontroller();
        $controllerchocolate->showitems();
    break;*/
    default:
        echo 'error 404';
        break;
}

