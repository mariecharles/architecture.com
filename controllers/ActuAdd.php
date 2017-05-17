<?php
require_once "Actumvc.php";

$News = new Actu();
//$News->insert([
//    'date'          =>strtotime('18/11/1998'),
//    'architecte'    => 'yolo',
//    'realisations'  => 'fefe',
//    'rubrique'      => 'hfsss',
//    'lieu'          => 'algeee',
//    'departement'   =>'seine'
//]);
$newsletters = $News->selectAll();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<main>
    <table>
        <tr>
            <td>ID</td>
            <td>Date</td>
            <td>Nom architecte</td>
            <td>Réalisation</td>
            <td>Rubriques</td>
            <td>Lieu</td>
            <td>Départements</td>
        </tr>

        <?php foreach ($newsletters as $newsletter): ?>

            <tr>
                <td><?php echo $newsletter['id']; ?></td>
                <td><?php echo $newsletter['date']; ?></td>
                <td><?php echo $newsletter['nom_architectes']; ?></td>
                <td><?php echo $newsletter['realisations']; ?></td>
                <td><?php echo $newsletter['rubriques']; ?></td>
                <td><?php echo $newsletter['lieu']; ?></td>
                <td><?php echo $newsletter['departement']; ?></td>
                <td><a href="ActuEdit.php?id=<?php echo $newsletter['id']; ?>">Éditer</a></td>
                <td><a href="ActuDelete.php?id=<?php echo $newsletter['id']; ?>">Supprimer</a></td>
            </tr>

        <?php endforeach; ?>
    </table>
</main>
</body>
</html>