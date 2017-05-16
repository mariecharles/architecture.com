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
<h1>Un article</h1>

<div>
    <div><?= $viewmodel['date'] ?></div>
    <div><?= $viewmodel['architecte'] ?></div>
    <div><?= $viewmodel['realisations'] ?></div>
    <div><?= $viewmodel['rubrique'] ?></div>
    <div><?= $viewmodel['lieu'] ?></div>
    <div><?= $viewmodel['departement'] ?></div>
    <div><?= $viewmodel['contenu'] ?></div>
    <img src="assets/img-content/<?= $viewmodel['img'] ?>" alt="">
</div>

</body>
</html>