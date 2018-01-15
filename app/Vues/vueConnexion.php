<!-- Titre de la page -->
<script src="public/js/connexion.js"></script>
<?php
$this->titre = "Connexion";
if (!empty($erreur)) {
  foreach ($erreur as $key => $text) {
    echo $text;
    echo "<br>";
  }
}
?>

<div id="body">
    <div class="row">

        <div id="background-image" class="col-xs-hide col-sm-4 col-md-7 col-lg-9"></div>

        <div id="form-container" class="col-xs-12 col-sm-8 col-md-5 col-lg-3">
            <h1>me connecter</h1>
            <form action="" method="post" id="formConnexion">
                <label for="email">Adresse mail:</label>
                <input type="text" name="email" id="email"></br>
                <span id="emailErrorMessage" class="errorMessage"></span>
            <label for="mdp">Mot de passe:</label>
            <input type="password" name="passe" id="mdp"
                   placeholder="10 caractères minimum"></br>
            <span id="mdpErrorMessage" class="errorMessage"></span>
            <input class="submit-button" type="submit" name="valider">
            </form>
        </div>

    </div>
</div>