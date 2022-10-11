<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once './app/controllers/chocolatecontroller.php';
require_once './app/controllers/brandcontroller.php';
require_once './app/controllers/usercontroller.php';

 if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'brands'; // acción por defecto si no envían
}


$params = explode('/', $action);

$brandcontroller = new Brandcontroller();
$chocolatecontroller = new Chocolatecontroller();
$usercontroller = new Usercontroller();

switch ($params[0]) {
    case 'brands':
        switch ($params[1]) {
            case 'add':
                $brandcontroller->add();
                break;   
            case 'delete':
                $id = $params[2];
                //$error = $params[3];
                $brandcontroller->delete($id);
                break;
            case 'edit':
                $id = $params[2];
                $brandcontroller->edit($id);
                break;
            default:
                $brandcontroller->showbrandstable();
                break;
        }
        break;
    case 'item':
        switch ($params[1]) {
            case 'add':
                $chocolatecontroller->adddata();
                break;
            case 'delete':
                $id = $params[2];
                $chocolatecontroller->delete($id);
                break;
            case 'edit':
                $id = $params[2];
                $chocolatecontroller->edit($id);
                break;
            case 'detail':
                $id = $params[2];
                $chocolatecontroller->detail($id);
                break;
            case 'filter':
                $id = $params[2];
                $chocolatecontroller->filter($id);
                break;
            default:
                $chocolatecontroller->showchocolatetable();
                break;
        }
        break;
    case 'login':
        switch ($params[1]) {
            case 'validate':
                $usercontroller->validateuser();
                break;
            case 'logout':
                $usercontroller->logout();
            default:
                $usercontroller->showformlogin();
                break;
        }
        break;
    default:
        echo('404 Page not found'); 
        break;
}
?>