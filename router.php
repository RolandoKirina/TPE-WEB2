<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once './app/controllers/chocolatecontroller.php';
require_once './app/controllers/homecontroller.php';
require_once './app/controllers/usercontroller.php';

$action = 'brands';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 

$params = explode('/', $action);

$homecontroller = new Homecontroller();
$chocolatecontroller = new Chocolatecontroller();

switch ($params[0]) {
    case 'brands':
        switch ($params[1]) {
            case 'showAdd':
                # muestra form de agregar
                break;
            case 'delete':
                # brandController->eliminar(param[2]);
                break;
            case 'add':
                # brandController->add();
                break;            
            case 'showEdit':
                # brandController->showEdit(param[2]);
                break;
            case 'edit':
                # brandController->edit(param[2]);
                break;
            default:
                # code...
                break;
        }
        break;
    case 'chocolate':
        switch ($param[1]) {
            case 'value':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        break;
    default:
        echo 'error 404';
        break;
}

