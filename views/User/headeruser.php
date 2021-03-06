<?php
define('ROOT_URL', 'http://localhost/architecture.com/');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>L'architecture</title>
</head>
<header>
    <nav class="nav_desk">
        <a href="#" class="logo"><img id="logo" src="/architecture.com/assets/img-layout/logo.png" alt=""></a>
        <ul>
            <li><a href="<?= ROOT_URL ?>">Accueil</a></li>
            <li><a href="<?= ROOT_URL . 'revues/getListRevues'?>">Nos revues</a></li>
            <li><a href="<?= ROOT_URL . 'views/user/commande.php'?>">Commandes</a></li>
            <li><a href="<?= ROOT_URL . 'actu/getListActu'?>">Actualités</a></li>
            <li><a href="<?= ROOT_URL . 'views/user/appeloffre.php'?>">Appel d'offre</a></li>
            <li><a href="<?= ROOT_URL . 'views/user/contact.php'?>">Contact</a></li>
            <li><a href="<?= ROOT_URL . 'views/user/commande.php'?>"><span>+</span> S'abonner</a></li>
        </ul>
    </nav>

    <div class="burger">
        <a href="#"><img src="/architecture.com/assets/img-layout/logo.png" alt=""></a>
        <div class="burger_art">
            <div class="trait_burger"></div>
            <div class="trait_burger"></div>
            <div class="trait_burger"></div>
        </div>
    </div>
    <div class="nav_burger active">
        <nav>
            <ul>
                <a href=""><li>Accueil</li></a>
                <a href=""><li>Nos revues</li></a>
                <a href=""><li>Commandes</li></a>
                <a href=""><li>Actualités</li></a>
                <a href=""><li>Appel d'offre</li></a>
                <a href=""><li>Contact</li></a>
                <a href=""><li><span>+</span> S'abonner</li></a>
            </ul>
        </nav>
    </div>
</header>
