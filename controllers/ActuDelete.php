<?php
require_once "Actumvc.php";

$News = new Actu();
$News->delete($_GET["id"]);

header("Location: ActuAdd.php");