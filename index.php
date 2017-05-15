<?php
require 'config/database.php';

require 'classes/Controller.php';
require 'Controller/home.php';


if($_GET['controller'] == "") {
    $controller = 'home';
} else {

}

$test = new $controller();


echo 'bonjour';


