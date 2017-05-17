<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">
    <title>larchitecture.com - Interface Admin</title>
</head>
<body id="mainbackoffice">

    <header>

        <p>Bonjour <span>Machin</span></p>
        <a href="">Retourner sur le site</a>

    </header>

    <h1>Bienvenue Administrateur</h1>

    <h2>Que voulez-vous faire ?</h2>

    <ul class="tabs">
        <li>Gérer les revues</li>
        <li>Gérer les actualités</li>
        <li>Gérer les commandes</li>
    </ul>

    <div class="wrapper-list revues">

        <a href="" class="add-btn">+ Ajouter une revue</a>

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

                    <button><a href="<?='getPageActu/' . $revue['id']?>">Modifier</a></button>
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


        <a href="" class="add-btn">+ Ajouter un article</a>

        <table>
            <tr>
                <th>Architecte</th>
                <th>Réalisation</th>
                <th>Date</th>
            </tr>

            <?php

            foreach ($viewmodel['actu'] as $actu):

            ?>

                <tr>
                    <td><?= $actu['architecte'] ?></td>
                    <td><?= $actu['réalisations'] ?></td>
                    <td><?= $actu['date'] ?></td>
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

    <div class="wrapper-list commandes">


        <table class="list-clients">
            <tr>
                <th colspan="3">Edouard lol</th>
            </tr>
            <tr>
                <td>N°260</td>
                <td>Edition IDF</td>
                <td>Quantité: 4</td>
            </tr>
        </table>
        <table>

            <tr>
                <th colspan="3">Edouard lol</th>
            </tr>
            <tr>
                <td>N°260</td>
                <td>Edition IDF</td>
                <td>Quantité: 4</td>
            </tr>
        </table>

    </div>

</body>
</html>