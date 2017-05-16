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
    <div><?= $viewmodel[0]['date'] ?></div>
    <div><?= $viewmodel[0]['architecte'] ?></div>
    <div><?= $viewmodel[0]['realisations'] ?></div>
    <div><?= $viewmodel[0]['rubrique'] ?></div>
    <div><?= $viewmodel[0]['lieu'] ?></div>
    <div><?= $viewmodel[0]['departement'] ?></div>
    <div><?= $viewmodel[0]['contenu'] ?></div>
    <img src="/architecture.com/assets/img-content/<?= $viewmodel[0]['img'] ?>" alt="">
</div>

</body>
</html>