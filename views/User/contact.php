<?php include 'headeruser.php' ?>

<body id="contact">

<div class="container-fluide background">

<div class="container formulaire-contact">
    <div class="nous-contacter">
        <article class="contacter">
            <h1>Nous contacter</h1>
            <p>Pour nous contacter, veuillez utiliser le formulaire ci-dessous. Merci de renseigner tous les champs</p>
        </article>
    </div>

    <div class="formulaire">
        <div class="message">
            <textarea cols="50" rows="4" id="message" name="message" placeholder="Ecrivez votre message"></textarea>
        </div>

        <form class="" action="index.html" method="post">
            <div>
                <label for="raison">Raison Sociale</label>
                <input type="text" id="raison-social" name="raison" placeholder="">
            </div>

            <div>
                <label for="nom">Nom complet</label>
                <input type="text" id="nom complet" name="nom" placeholder="">
            </div>

            <div>
                <label for="telephone">Téléphone</label>
                <input type="text" id="telephone" name="telephone" placeholder="">
            </div>

            <div>
                <label for="mail">Mail</label>
                <input type="text" id="mail" name="mail" placeholder="">
            </div>

            <label for="Service">Service</label>
            <select>
                <optgroup>
                    <option value="commercial" selected>Commercial</option>
                    <option value="rédactionnel">Rédactionnel/Publicité</option>
                    <option value="administratif">Administratif/comptabilité</option>
                    <option value="Direction">Direction</option>
                </optgroup>
            </select>

            <button type="text" name="button">Envoyer</button>

        </form>

    </div>

</div>

<div class="container-fluide message-2">
    <img class="envoyer" src="img-content/send-button.png" alt="">
    <textarea cols="50" rows="4" id="message" name="message" placeholder="">
      </textarea>
</div>

</div>

<?php include 'footer.php' ?>

</body>

</html>