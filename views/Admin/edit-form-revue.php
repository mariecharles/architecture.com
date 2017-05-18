<?php include 'headeradmin.php' ?>

<body id="mainbackoffice">

    <header>

        <p>Bonjour <span>François</span></p>
        <a href="../revues">Retourner sur le site</a>

    </header>

    <h1>Bienvenue Administrateur</h1>

    <h2>Modifier la revue</h2>

    <div class="form-wrapper">
        <form method="post" action="../editRevues">
            <div>
                <label for="zone">Zone</label>
                <input type="text" name="zone" id="zone" value="<?=$viewmodel[0]['zone']?>">
            </div>
            <div>
                <label for="date">Date</label>
                <input type="text" name="date" id="date" value="<?=$viewmodel[0]['date']?>">
            </div>
            <div>
                <label for="num">Numéro</label>
                <input type="text" name="num" id="num" value="<?=$viewmodel[0]['num']?>">
            </div>
            <div>
                <label for="img">Image</label>
                <input type="file" name="img" id="img" class="img-upload" value="<?=$viewmodel[0]['img']?>">
            </div>
            <div>
                <input type="hidden" name="id" value="<?=$viewmodel[0]['id']?>">
                <input type="submit" value="Enregistrer les modifications">
            </div>

        </form>
    </div>


</body>
</html>