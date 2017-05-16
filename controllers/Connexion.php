<?php
session_start();
require_once "Connexion.class.php";

if(isset($_POST) && count($_POST) > 0)
{

    if (isset($_POST['connexion_bouton']) && isset($_POST['username']) && isset($_POST['password']))
    {

        $connexion = new Connexion($_POST['username'], $_POST['password']);
        $verif = $connexion->verif();

        if ($verif == "ok")
        {
            if($connexion->session())
            {
                header("Location: Panel_admin.php");
                exit();
            }
        }
    }
    else
    {
        echo "Il y à une erreur lors de la connexion";
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
<header>
    <h1>Connexion</h1>
</header>

<main>
    <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
    <form action="Connexion.php" method="post">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="username" placeholder="Pseudo" class="input_text" required></td>

            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" placeholder="Mot de passe" name="password" class="input_text" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"  name="connexion_bouton" class="input_text submit" value="Se Connecter" ></td>
            </tr>
        </table>
    </form>
</main>
</body>
</html>