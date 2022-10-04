<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once './app/controllers/chocolatecontroller.php';
require_once './app/controllers/homecontroller.php';
require_once './app/controllers/usercontroller.php';

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 

$params = explode('/', $action);

$homecontroller = new homecontroller();
$chocolatecontroller = new chocolatecontroller();
         

switch ($params[0]) {
    case 'home':
        $homecontroller->showgeneraltable();
        break;
    case 'add':
        $chocolatecontroller->addData();
        break;
    case 'delete':
        $id = $params[1];
        $homecontroller->delete($id);
        break;
    case 'detail':
        $id = $params[1];
        $chocolatecontroller->detail($id);
        break;
    case 'edit':
        $id = $params[1];
        $brandname = $homecontroller->getbrandName();
        $itemname = $homecontroller->getbrandName();
        $homecontroller->edit($id, $brandname, $itemname);
        break;
    /*case 'login':
      $controller = new usercontroller();
      $controller->login(); 
    break;*/
    /*case 'logout':
     $controller = new usercontroller();
     $controller->logout();
    break;*/   
    default:
        echo 'error 404';
        break;
}

