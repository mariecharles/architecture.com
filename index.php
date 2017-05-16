<?php


require 'vendor/autoload.php'; // Autoload qui récupère toutes les class

define('ROOT_URL', 'localhost/architecture.com/');

$controller = 'controllers\\';  // On rentre dans le namespace controllers

if($_GET['controller'] == "") {
    $controller .= 'Home';
} else {
    $controller .= $_GET['controller'];
}

if ($_GET['action'] == '')
{
    $action = 'index';
} else {
    $action = $_GET['action']; // Si aucun controller n'est passé en action, on redirige vers la page HOME, sinon, sur la page du controller sélectionné
}


$test = new $controller($action);

$test->execAction();




