<?php include 'headeruser.php' ?>

<body>
<h1>Un magazine</h1>

    <div>
        <div><?= $viewmodel[0]['num']?></div>
        <div><?= $viewmodel[0]['zone'] ?></div>
        <div><?= $viewmodel[0]['date'] ?></div>
        <img src="/architecture.com/assets/img-content/<?= $viewmodel[0]['img'] ?>" alt="">
    </div>

<?php include 'footer.php' ?>

</body>
</html>