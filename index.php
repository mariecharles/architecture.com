<?php
var_dump($_GET);
require 'config/database.php';

require 'vendor/autoload.php';
$controller = 'controllers\\';

if($_GET['controller'] == "") {
    $controller .= 'home';
} else {
    $controller .= $_GET['controller'];
}

if ($_GET['action'] == '')
{
    $action = 'index';
} else {
    $action = $_GET['action'];
}

$test = new $controller($action, 'test');
$test->execAction();

echo 'bonjour';


