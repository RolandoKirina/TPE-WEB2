<?php

include_once 'views/showlist.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


$action = 'home';

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} 


$params = explode('/', $action);

switch ($params) {
    case 'home':
        renderlist();
        break;
    default:
        echo 'error 404';
        break;
}

