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

    <h2>Ajouter une revue</h2>

    <form method="post" action="../../admin/addRevues">
        <div>
            <label for="zone">Zone</label>
            <input type="text" name="zone" id="zone">
        </div>
        <div>
            <label for="date">Date</label>
            <input type="text" name="date" id="date">
        </div>
        <div>
            <label for="num">Numéro</label>
            <input type="text" name="num" id="num">
        </div>
        <div>
            <label for="img">Image</label>
            <input type="text" name="img" id="img">
        </div>

        <div>
            <input type="submit" value="Enregistrer les modifications">
        </div>


    </form>


</body>
</html>