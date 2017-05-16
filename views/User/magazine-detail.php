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
<h1>Un magazine</h1>

    <div>
        <div><?= $viewmodel[0]['num']?></div>
        <div><?= $viewmodel[0]['zone'] ?></div>
        <div><?= $viewmodel[0]['date'] ?></div>
        <img src="/architecture.com/assets/img-content/<?= $viewmodel[0]['img'] ?>" alt="">
    </div>

</body>
</html>