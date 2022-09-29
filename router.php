<?php

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
require_once 'app/controllers/itemcontroller.php';
require_once 'app/controllers/brandcontroller.php';

$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $controller = new itemcontroller();
        $controllerbrand = new brandcontroller();
        $controller->showlist();
        $controller->showitems();
        $controllerbrand->showbrand();
        break;
    default:
        echo 'error 404';
        break;
}

