<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/architecture.com/assets/styles/css/screen.css">

    <title>larchitecture.com - Newsletter</title>
</head>

<body id="achat">

<div id="filters">
    <div class="head-filters">
        <span class="filter-commande active">commande/</span>
        <span class="filter-abonnement ">abonnement</span>
    </div>
</div>


<main id="commande">
    <form action="../../admin/addCommandes" method="post" class="active">

        <div>
            <label for="raisonsociale">Raison sociale</label>
            <input type="text" name="raisonsociale" id="raison">
        </div>

        <div>
            <label for="fonction">Fonction</label>
            <input type="text" name="fonction" id="fonction">
        </div>

        <div>
            <label for="activite">Activité</label>
            <input type="text" name="activite" id="activite">
        </div>


        <div>
            <label for="nom">Nom complet *</label>
            <input type="text" name="nom" id="nom" required>
        </div>


        <div>
            <label for="adresse">Adresse *</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>

        <div>
            <label for="codepostal">Code postal</label>
            <input type="text" name="codepostal" id="codepostal">
        </div>

        <div>
            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays">
        </div>

        <div>
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone">
        </div>

        <div>
            <label for="fax">Fax</label>
            <input type="text" name="fax" id="fax">
        </div>

        <div>
            <label for="mail">Mail *</label>
            <input type="text" name="mail" id="mail" required>
        </div>

        <div>
            <label for="zonegeographique">Zone géographique </label>
            <select name="zonegeographique" id="zonegeographique">
                <option value="zonegeographique">France métropolitaine</option>
                <option value="zonegeographique">Suisse</option>
                <option value="zonegeographique" selected="">Belgique</option>
            </select>
        </div>

        <div>
            <label for="choixrevue">Choix revue *</label>
            <select name="choixrevue" id="choixrevue" required>
                <option value="choixrevue">France métropolitaine</option>
                <option value="choixrevue">Suisse</option>
                <option value="choixrevue" selected="">Belgique</option>
            </select>
        </div>

        <div>
            <label for="quantite">Quantité</label>
            <input type="text" name="quantite" id="quantite" >

        </div>

        <div>
            <button>Voir tarif en euros</button>
            <button>Voir tarif en francs</button>
        </div>

        <input class="send" type="submit" name="validation_boutton" value="Commander">

    </form>

</main>


<main id="abonnement">
    <form action="../../admin/addAbonnement" method="post">

        <div>
            <label for="raisonsociale">Raison sociale</label>
            <input type="text" name="raisonsociale" id="raison">
        </div>

        <div>
            <label for="fonction">Fonction</label>
            <input type="text" name="fonction" id="fonction">
        </div>

        <div>
            <label for="activite">Activité</label>
            <input type="text" name="activite" id="activite">
        </div>


        <div>
            <label for="nom">Nom complet *</label>
            <input type="text" name="nom" id="nom" required>
        </div>


        <div>
            <label for="adresse">Adresse *</label>
            <input type="text" name="adresse" id="adresse" required>
        </div>

        <div>
            <label for="codepostal">Code postal</label>
            <input type="text" name="codepostal" id="codepostal">
        </div>

        <div>
            <label for="pays">Pays</label>
            <input type="text" name="pays" id="pays">
        </div>

        <div>
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone">
        </div>

        <div>
            <label for="fax">Fax</label>
            <input type="text" name="fax" id="fax">
        </div>

        <div>
            <label for="mail">Mail *</label>
            <input type="text" name="mail" id="mail" required>
        </div>

        <div>
            <label for="zonegeographique">Zone géographique </label>
            <select name="zonegeographique" id="zonegeographique">
                <option value="zonegeographique">France métropolitaine</option>
                <option value="zonegeographique">Suisse</option>
                <option value="zonegeographique">Belgique</option>
            </select>
        </div>

        <div >
            <label for="duree">Durée</label>
            <input type="text" name="duree" id="duree">
        </div>

        <div>
            <button>Voir tarif en euros</button>
            <button>Voir tarif en francs</button>
        </div>

        <input class="send" type="submit" name="validation_boutton" value="Commander">

    </form>

</main>

</body>

<script>
    var link = document.querySelectorAll('.head-filters span');
    var form = document.querySelectorAll('form');

    link[0].addEventListener('click', function () {
        form[0].classList.add('active');
        form[1].classList.remove('active');
    });

    link[1].addEventListener('click', function () {
        form[1].classList.add('active');
        form[0].classList.remove('active');
    });

</script>