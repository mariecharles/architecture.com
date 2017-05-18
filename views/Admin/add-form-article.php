<?php include 'headeradmin.php' ?>

<body id="mainbackoffice">

    <header>

        <p>Bonjour <span>François</span></p>
        <a href="../revues">Retourner sur le site</a>

    </header>

    <h1>Bienvenue Administrateur</h1>

    <h2>Ajouter un article</h2>

    <div class="form-wrapper">

        <form method="post" action="../../admin/addActu">
            <div>
                <label for="architecte">Architecte</label>
                <input type="text" name="architecte" id="architecte">
            </div>
            <div>
                <label for="realisations">Réalisation</label>
                <input type="text" name="realisations" id="realisations">
            </div>
            <div>
                <label for="rubrique">Rubrique</label>
                <input type="text" name="rubrique" id="rubrique">
            </div>
            <div>
                <label for="lieu">Lieu</label>
                <input type="text" name="lieu" id="lieu">
            </div>
            <div>
                <label for="departement">Département</label>
                <input type="text" name="departement" id="lieu">
            </div>
            <div>
                <label for="contenu">Contenu</label>
                <textarea name="contenu" id="contenu" cols="80" rows="20"></textarea>
            </div>

            <div>
                <input type="submit" value="Enregistrer les modifications">
            </div>

        </form>
    </div>

</body>
</html>