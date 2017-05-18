<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">

    <title>larchitecture.com - Newsletter</title>
</head>
<body id="newsletter" class="clearfix">
<main>
    <h1>Nos newsletter</h1>

    <?php

    foreach ($viewmodel as $element):

        if ($viewmodel %2 != 0) :

  ?>   <section>
        <a href="<?='getPageActu/' . $element['id']?>">
        <div class="text-f">
            <h2><?=$element['architecte']?></h2>
            <p><?=$element['realisations']?></p>
             <p><?=$element['lieu']?><?=$element['date']?></p>
             <p><?=$element['rubrique']?></p>
         </div>
         <img src="/architecture.com/assets/img-content/<?=$element['img']?>" alt="">
         </a>
    </section>

    <?php else : ?>

    <section>
        <a href="<?='getPageActu/' . $element['id']?>">
            <img src="/architecture.com/assets/img-content/<?=$element['img']?>" alt="">
            <div class="text-f">
                <h2><?=$element['architecte']?></h2>
                <p><?=$element['realisations']?></p>
                <p><?=$element['lieu']?><?=$element['date']?></p>
                <p><?=$element['rubrique']?></p>
            </div>

        </a>
    </section>

    <?php endif;

    endforeach; ?>
</main>

</body>

</html>