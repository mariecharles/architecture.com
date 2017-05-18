<?php include 'headeruser.php' ?>

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

<?php include 'footer.php' ?>

</body>


</html>