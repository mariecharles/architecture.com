<?php include 'headeradmin.php' ?>

<body id="mainbackoffice">

<header>

    <p>Bonjour <span>François</span></p>
    <a href="../revues">Retourner sur le site</a>

</header>

<h1>Bienvenue Administrateur</h1>

<h2>Détail de la commande</h2>

<ul class="wrapper-detail">

    <li>Commande n°<?= $viewmodel[0]['id'] ?></li>
    <li><?= $viewmodel[0]['nom'] ?></li>
    <li><?= $viewmodel[0]['raisonsociale'] ?></li>
    <li><?= $viewmodel[0]['fonction'] ?></li>
    <li><?= $viewmodel[0]['activite'] ?></li>
    <li><?= $viewmodel[0]['adresse'] ?></li>
    <li><?= $viewmodel[0]['codepostal'] ?></li>
    <li><?= $viewmodel[0]['pays'] ?></li>
    <li><?= $viewmodel[0]['telephone'] ?></li>
    <li><?= $viewmodel[0]['fax'] ?></li>
    <li><?= $viewmodel[0]['mail'] ?></li>
    <li><?= $viewmodel[0]['zonegeographique'] ?></li>
    <li><?= $viewmodel[0]['choixrevue'] ?></li>
    <li><?= $viewmodel[0]['quantite'] ?></li>

</ul>

</body>

</html>