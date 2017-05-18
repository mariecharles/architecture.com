<?php include 'headeruser.php' ?>

<body id="actualite">
<main id="actualite-main">

    <div class="container-fluid description-article-image nopadding">
        <div class="description-article">
            <article class="description">
                <h1><?= $viewmodel[0]['architecte'] ?></h1>
                <h3><?= $viewmodel[0]['rubrique'] ?></h3>
                <h4><?= $viewmodel[0]['date'] ?></h4>
                <p><?= $viewmodel[0]['realisations'] ?></p>
            </article>
        </div>


        <div class="article">
            <figure>
                <img class="article-image" src="../../assets/img-content/<?= $viewmodel[0]['img'] ?>" alt="">
            </figure>
        </div>
    </div>



    <div class="container-fluide">
        <div class="container texte">
            <div class="container-fluide">
                <article class="description-1">
                    <p><?= $viewmodel[0]['contenu'] ?></p>
                </article>
            </div>
        </div>
    <div class="container-fluide">
            <div class="container images">
                <div class="col-md-12">
                    <div class="image-left">

                        <figure>
                            <img class="left" src="../../assets/img-content/1.jpg" alt="">
                        </figure>

                        <figure>
                            <img class="left" src="../../assets/img-content/2.jpg" alt="">
                        </figure>

                        <figure>
                            <img class="left" src="../../assets/img-content/3.jpg" alt="">
                        </figure>

                    </div>

                    <div class="image-right">


                        <figure>
                            <img class="right" src="../../assets/img-content/4.jpg" alt="">
                        </figure>

                        <figure>
                            <img class="right" src="../../assets/img-content/5.jpg" alt="">
                        </figure>

                        <figure>
                            <img class="right" src="../../assets/img-content/5.jpg" alt="">
                        </figure>

                    </div>


                </div>
</main>

<?php include 'footer.php' ?>


</body>