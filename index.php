<?php
require 'vendor/autoload.php'; // Autoload qui récupère toutes les class

require 'config.php';

define('ROOT_URL', 'localhost/architecture.com/');

$controller = 'controllers\\';  // On rentre dans le namespace controllers

if($_GET['controller'] == "") {
    $controller .= 'Index';
} else {
    $controller .= $_GET['controller'];
}

if ($_GET['action'] == '')
{
    $action = 'getListActu';
} else {
    $action = $_GET['action'];
}


$test = new $controller($action);

$test->execAction();





