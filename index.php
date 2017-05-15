<?php

require 'Controller/home.php';
require 'classes/Controller.php';
if($_GET['controller'] == "") {
    $controller = 'home';
} else {

}

$test = new $controller();


