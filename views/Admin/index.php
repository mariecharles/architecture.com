<?php include 'headeradmin.php' ?>

<body id="mainbackoffice">

    <header>

        <p>Bonjour <span>François</span></p>
        <a href="../index">Retourner sur le site</a>

    </header>

    <h1>Bienvenue Administrateur</h1>

    <h2>Que voulez-vous faire ?</h2>

    <ul class="tabs">
        <li>Gérer les revues</li>
        <li>Gérer les actualités</li>
        <li>Demandes clients</li>
    </ul>

    <div class="wrapper-list revues">

        <a href="../views/admin/add-form-revue.php" class="add-btn">+ Ajouter une revue</a>

        <table>
            <tr>
                <th>N°</th>
                <th>Région</th>
                <th>Date</th>
            </tr>

            <?php

            foreach ($viewmodel['revues'] as $revue): ?>

            <tr>

                <td><?= $revue['num'] ?></td>
                <td><?= $revue['zone'] ?></td>
                <td><?= $revue['date'] ?></td>
                <td>

                    <button><a href="<?='getPageRevues/' . $revue['id']?>">Modifier</a></button>
                </td>
                <td>
                    <form method="post" action="deleteRevues">
                        <input type="hidden" value="<?= $revue['id']?>" name ="id">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>

            <?php endforeach; ?>

        </table>
    </div>

    <div class="wrapper-list actu">


        <a href="../views/admin/add-form-article.php" class="add-btn">+ Ajouter un article</a>

        <table>
            <tr>
                <th>Architecte</th>
                <th>Réalisation</th>
                <th>Rubrique</th>
            </tr>

            <?php

            foreach ($viewmodel['actu'] as $actu):

            ?>

                <tr>
                    <td><?= $actu['architecte'] ?></td>
                    <td><?= $actu['realisations'] ?></td>
                    <td><?= $actu['rubrique'] ?></td>
                    <td>
                        <button><a href="<?='getPageActu/' . $actu['id']?>">Modifier</a></button>
                    </td>
                    <td>
                        <form method="post" action="deleteActu">
                            <input type="hidden" value="<?= $actu['id']?>" name ="id">
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

    </div>

    <div class="wrapper-list commandes;">

        <h3>Commandes</h3>

        <table>
            <tr>
                <th>Commande n°</th>
                <th>Nom</th>
                <th>Choix de la revue</th>
            </tr>

            <?php

            foreach ($viewmodel['commandes'] as $commande):

                ?>

                <tr>
                    <td><?= $commande['id'] ?></td>
                    <td>Mme/M. <?= $commande['nom'] ?></td>
                    <td><?= $commande['choixrevue'] ?></td>
                    <td>
                        <button><a href="<?='getPageCommande/' . $commande['id']?>">Voir détail</a></button>
                    </td>
                    <td>
                        <form method="post" action="deleteCommande">
                            <input type="hidden" value="<?= $commande['id']?>" name ="id">
                            <input type="submit" value="Ok/traité">
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

        <h3>Abonnements</h3>

        <table>
            <tr>
                <th>Commande n°</th>
                <th>Nom</th>
                <th>Durée de l'abonnement</th>
            </tr>

            <?php

            foreach ($viewmodel['abonnement'] as $element):

                ?>

                <tr>
                    <td><?= $element['id'] ?></td>
                    <td>Mme/M. <?= $element['nom'] ?></td>
                    <td><?= $element['duree'] ?></td>
                    <td>
                        <button><a href="<?='getPageAbonnement/' . $element['id']?>">Voir détail</a></button>
                    </td>
                    <td>
                        <form method="post" action="deleteCommande">
                            <input type="hidden" value="<?= $element['id']?>" name ="id">
                            <input type="submit" value="Ok/traité">
                        </form>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

    </div>

    <script src="../assets/js/backoffice.js"></script>

</body>
</html>