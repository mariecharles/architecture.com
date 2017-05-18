<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">
    <title>Document</title>
</head>
<body id="revue">
<h2>Nos revues</h2>

<main>

<?php

foreach ($viewmodel as $element):

    ?>
    <a href="<?='getPageMagazine/' . $element['id']?>">
        <div>
            <img src="/architecture.com/assets/img-content/<?=$element['img']?>">
            <p><?=$element['zone']?> n°<?=$element['num']?></p>
        </div>
    </a>

<?php endforeach; ?>

</main>

</body>
</html>