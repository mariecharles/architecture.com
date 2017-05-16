<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Panel admin</h1>

<h2>Revues</h2>

<?php

foreach ($viewmodel['revues'] as $revue): ?>

    <div>
        <a href="<?='revues/getPageMagazine/' . $revue['id']?>">
            <div><?= $revue['num'] ?></div>
            <div><?= $revue['zone'] ?></div>
            <div><?= $revue['date'] ?></div>
            <img src="/architecture.com/assets/img-content/<?= $revue['img'] ?>" alt="">
        </a>
    </div>

<?php endforeach; ?>


<h2>Actu</h2>

<?php

foreach ($viewmodel['actu'] as $actu):

    ?>

    <div><a href="<?='getPageActu/' . $actu['id']?>">
            <div><?= $actu['date'] ?></div>
            <div><?= $actu['architecte'] ?></div>
            <div><?= $actu['realisations'] ?></div>
            <div><?= $actu['rubrique'] ?></div>
            <div><?= $actu['lieu'] ?></div>
            <div><?= $actu['departement'] ?></div>
            <div><?= $actu['contenu'] ?></div>
            <img src="assets/img-content/<?= $actu['img'] ?>" alt="">
    </div></a>

<?php endforeach; ?>

</body>
</html>