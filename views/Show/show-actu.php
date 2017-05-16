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
<h1>Coucou c'est les actu</h1>
<?php

foreach ($viewmodel as $element):

    ?>

    <div><a href="<?='article/articles/' . $element['id']?>">
        <div><?= $element['date'] ?></div>
        <div><?= $element['architecte'] ?></div>
        <div><?= $element['realisations'] ?></div>
        <div><?= $element['rubrique'] ?></div>
        <div><?= $element['lieu'] ?></div>
        <div><?= $element['departement'] ?></div>
        <div><?= $element['contenu'] ?></div>
        <img src="assets/img-content/<?= $element['img'] ?>" alt="">
    </div></a>

<?php endforeach; ?>

</body>
</html>