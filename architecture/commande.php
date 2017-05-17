<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="style/css/master.css">
	<meta charset="UTF-8">
	<title>Commande - Abonnement</title>
</head>
<body>
	<header>
		<div class="header">
			<div class="logo">
				<figure>
					<a href="#"><img class="menu" src="img-content/menu.png" alt="logo"></a>
				</figure>
			</div>
			<div class="nav">
				<nav>
					<ul>
						<a href="#"><li>Accueil</li></a>
						<a href="#"><li>Nos revues</li></a>
						<a href="#"><li>Commande</li></a>
						<a href="#"><li>Appel d'offre</li></a>
						<a href="#"><li>Actualités</li></a>
						<a href="#"><li>Contact</li></a>
					</ul>
				</nav>
			</div>
		</div>
	</header>



	<div id="filters">
        <div class="head-filters">
            <span class="filter-commande active">commande</span>
            <span class="filter-abonnement ">abonnement</span>
        </div>
    </div>


	<main id="commande">

		<div>
			<label for="raison_sociale">Raison sociale</label>
			<input type="text" name="raison_sociale" id="raison">
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
			<label for="mailconfirm">Confirmation</label>
			<input type="text" name="mailconfirm" id="mailconfirm" >
		</div>

		<div>
			<label for="zone_geographique">Zone géographique </label>
			<select name="zone_geographique" id="zone_geographique">
				<option value="zone1">France métropolitaine</option>
				<option value="zone2">Suisse</option>
				<option value="zone3" selected="">Belgique</option>
			</select>
		</div>

		<div>
			<label for="revue">Choix revue * </label>
			<select name="revue" id="revue" required="">
				<option value="revue1">France métropolitaine</option>
				<option value="revue2">Suisse</option>
				<option value="revue3" selected="">Belgique</option>
			</select>
		</div>

		<div>
			<button type="button" name="button">Commander</button>
		</div>


	</main>

</body>

<script>
        var main_name = document.querySelector('main#commande');
        var filter_commande = document.querySelector('#filters span.filter-commande');
        var main_abonnement = document.querySelector('main#abonnement');
        var filter_abonnement = document.querySelector('#filters span.filter-abonnement');
        filter_commande.addEventListener('click', function () {
            body.id = 'commande';
            this.classList.add('active');
            filter_abonnement.classList.remove('active');
            main_commande.style.display = 'block';
            main_abonnement.style.display = 'none';

        });

        filter_commande.addEventListener('click', function () {
            body.id = 'abonnement';
            this.classList.add('active');
            filter_commande.classList.remove('active');
            main_abonnement.style.display = 'block';
            main_commande.style.display = 'none';
        });
    </script>
</html>
