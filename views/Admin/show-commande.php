<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">
    <title>larchitecture.com - Interface Admin</title>
</head>
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

</ul>

</body>

</html>