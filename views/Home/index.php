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
<h1>LoL</h1>
<?php

foreach ($viewmodel as $element):

?>

<div>
    <div><?= $element['num'] ?></div>
    <div><?= $element['zone'] ?></div>
    <div><?= $element['date'] ?></div>
    <img src="assets/img-content/<?= $element['img'] ?>" alt="">
</div>

<?php endforeach; ?>

</body>
</html>