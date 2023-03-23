<?php
require('inclusions/entete.inc.php');
?>


<section class="gestion-utilisateur">
    <form class="connexion">
        <legend>Ouvrir une connexion</legend>
        <div class="champs">
            <label for="cnx-courriel">Courriel</label>
            <input type="email" name="courriel" id="cnx-courriel" placeholder="Adresse de courriel">
        </div>
        <div class="champs">
            <label for="cnx-mdp">Mot de passe</label>
            <input type="password" name="mdp" id="cnx-mdp" placeholder="Mot de passe">
        </div>
        <input class="btn btn-connexion" type="submit" value="Connexion">
    </form>
</section>

<?php
require('inclusions/pieddepage.inc.php');
?>