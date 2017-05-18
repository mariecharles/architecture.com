<?php include 'headeruser.php' ?>

<body id="newsletter" class="clearfix">
<main>
    <h1>Nos newsletter</h1>

    <?php

    foreach ($viewmodel as $element):


            ?>
        <section>
            <a href="<?='getPageActu/' . $element['id']?>">
            <?php if ($viewmodel %2 != 0) :?>
            <img src="/architecture.com/assets/img-content/<?=$element['img']?>" alt="">
            <?php endif;?>

                <div class="text-f">
                    <h2><?=$element['architecte']?></h2>
                    <p><?=$element['realisations']?></p>
                    <p><?=$element['lieu']?><?=$element['date']?></p>
                    <p><?=$element['rubrique']?></p>
                </div>
                <?php if ($viewmodel %2 != 1) :?>
                    <img src="/architecture.com/assets/img-content/<?=$element['img']?>" alt="">
                <?php endif;?>
            </a>
        </section>

<?php endforeach; ?>
</main>

<?php include 'footer.php' ?>

</body>



</html>