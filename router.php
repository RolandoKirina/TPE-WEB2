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
    case 'add':
        $controller = new brandcontroller();
        $controller->addData();
        break;
    case 'delete':
        $id = $params[1];
        $controller = new brandcontroller ();
        $controller->delete($id);
        break;

    /*case 'edit':
        $controller = new brandcontroller();
        echo "editar";
        break;*/
    /*case 'login':
      $controller = new usercontroller();
      $controller->login(); 
    break;*/
    /*case 'logout':
     $controller = new usercontroller();
     $controller->logout();
    break;*/   
    /*case 'detail':
        echo "mostrardetail";
    break;*/
     /*case 'item':
        $controller = new itemcontroller();
        $controller->showitems(); 
    break;*/
    default:
        echo 'error 404';
        break;
}

