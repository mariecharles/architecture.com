<?php
require_once "../helper/connect.php";


require_once "FormulaireCommandemvc.php";

$News = new Commande();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$News->insert($_POST);
	header("Location: commande.php");
	exit();
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Commande - Abonnement</title>
</head>
<body>

	<div id="filters">
        <div class="head-filters">
            <span class="filter-commande active">commande</span>
            <span class="filter-abonnement ">abonnement</span>
        </div>
    </div>


	<main id="commande">
		<form action="commande.php" method="post">

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
			<label for="mailconfirm">Confirmation</label> 
			<input type="text" name="mailconfirm" id="mailconfirm" >
		</div>

		<div>
			<label for="zonegeographique">Zone géographique </label>
			<select name="zonegeographique" id="zone_geographique">
				<option value="zone1">France métropolitaine</option>
				<option value="zone2">Suisse</option>
				<option value="zone3" selected="">Belgique</option>
			</select>
		</div>

		<div>
			<label for="choixrevue">Choix revue * </label>
			<select name="choixrevue" id="revue" required>
				<option value="revue1">France métropolitaine</option>
				<option value="revue2">Suisse</option>
				<option value="revue3" selected="">Belgique</option>
			</select>
		</div>
		<input type="submit" name="validation_boutton" value="Ajouter">
		</form>
	</main>
	
</body>

<!--<script>-->
<!--        var main_name = document.querySelector('main#commande');-->
<!--        var filter_commande = document.querySelector('#filters span.filter-commande');-->
<!--        var main_abonnement = document.querySelector('main#abonnement');-->
<!--        var filter_abonnement = document.querySelector('#filters span.filter-abonnement');-->
<!--        filter_commande.addEventListener('click', function () {-->
<!--            body.id = 'commande';-->
<!--            this.classList.add('active');-->
<!--            filter_abonnement.classList.remove('active');-->
<!--            main_commande.style.display = 'block';-->
<!--            main_abonnement.style.display = 'none';-->
<!---->
<!--        });-->
<!---->
<!--        filter_commande.addEventListener('click', function () {-->
<!--            body.id = 'abonnement';-->
<!--            this.classList.add('active');-->
<!--            filter_commande.classList.remove('active');-->
<!--            main_abonnement.style.display = 'block';-->
<!--            main_commande.style.display = 'none';-->
<!--        });-->
<!--    </script>-->
</html>