<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/css/screen.css">
    <title>larchitecture.com - Interface Admin</title>
</head>
<body>
<h1>Bienvenue Administrateur</h1>

<div class="wrapper-list">

    <h2>Gérer les revues</h2>

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
                <a href="resume.php?id=<?=$row['id']?>">Modifier</a>
            </td>
            <td>
                <form method="post" action="delete.php">
                    <input type="hidden" value="<?= $row['id']?>" name ="id">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>

        <?php endforeach; ?>

    </table>


    <h2>Gérer les actualités</h2>

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
                    <a href="resume.php?id=<?=$row['id']?>">Modifier</a>
                </td>
                <td>
                    <form method="post" action="delete.php">
                        <input type="hidden" value="<?= $row['id']?>" name ="id">
                        <input type="submit" value="Supprimer">
                    </form>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

</div>

</body>
</html>