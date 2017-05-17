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

    <h2>Modifier l'article</h2>

    <form method="post" action="edditActu">
        <div>
            <label for="architecte">Architecte</label>
            <input type="text" name="architecte" id="architecte" placeholder="<?= $viewmodel[0]['architecte']?>">
        </div>
        <div>
            <label for="realisation">Réalisation</label>
            <input type="text" name="realisation" id="realisation" placeholder="<?= $viewmodel[0]['realisation']?>">
        </div>
        <div>
            <label for="rubrique">Rubrique</label>
            <input type="text" name="rubrique" id="rubrique" placeholder="<?= $viewmodel[0]['rubrique']?>">
        </div>
        <div>
            <label for="lieu">Lieu</label>
            <input type="text" name="lieu" id="lieu" placeholder="<?= $viewmodel[0]['lieu']?>">
        </div>
        <div>
            <label for="departement">Département</label>
            <input type="text" name="departement" id="lieu" placeholder="<?= $viewmodel[0]['departement']?>">
        </div>
        <div>
            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"><?= $viewmodel[0]['contenu']?></textarea>
        </div>

        <input type="submit" value="Enregistrer les modifications">


    </form>


</body>
</html>