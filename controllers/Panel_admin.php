<?php
session_start();
require_once "../helper/connect.php";

if(!isset($_SESSION["username"]))
{
    header("Location: Connexion.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<main>
    <h1>Bienvenue</h1>
    <div>
        <?php
        echo 'Bienvenue : '.$_SESSION['username']. ' <a href="Deconnexion.php">Déconnexion</a>';
        ?>
    </div>
    <a href="Newsindex.php">Newsletter</a>
</main>
</body>
</html>