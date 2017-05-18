<?php include 'headeradmin.php' ?>

<body id="mainbackoffice">

    <header>

        <p>Bonjour <span>François</span></p>
        <a href="../revues">Retourner sur le site</a>

    </header>

    <h1>Bienvenue Administrateur</h1>

    <h2>Ajouter une revue</h2>

    <div class="form-wrapper">

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
                <input type="file" class="img-upload" name="img" id="img">
            </div>

            <div>
                <input type="submit" value="Enregistrer les modifications">
            </div>

        </form>

    </div>


</body>
</html>