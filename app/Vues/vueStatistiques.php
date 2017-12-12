<!-- Titre de la page -->
<?php $this->titre = "Statistiques"; ?>
<!-- Titre de la page -->
<?php $this->titre = "Editer Ma Maison"; ?>

<div id="body">
    <div class="row">


        <div id="maison-image" class="col-xs-hide col-sm-4 col-md-7 col-lg-9"></div>

        <div id="form-container" class="col-xs-12 col-sm-8 col-md-5 col-lg-3">
            <h2>Modal Example</h2>

            <!-- Trigger/Open The Modal -->
            <button class="button" type="button" id="button_piece">Ajouter une pièce</button></br>
            <button class="button" type="button" id="button_capteur">Ajouter un capteur</button></br>

            <!-- The Modal -->
            <div id="modal_piece" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Ajouter une pièce :</h1>
                    <form action="#" method="post">
                        <label for="dimensions"><p>Dimensions :</p></label>
                        <input type="text" name="longueur"
                               placeholder="longueur"></br>
                        <input type="text" name="largeur"
                               placeholder="largeur"></br>
                        <input type="text" name="hauteur"
                               placeholder="hauteur"></br>
                        <label for="type_de_piece"><p>Type de pièce :</p></label>
                        <select>
                            <option value="chambre">Chambre</option>
                            <option value="cuisine">Cuisine</option>
                            <option value="bureau">Bureau</option>
                            <option value="salon">Salon</option>
                            <option value="autre">Autre</option>
                        </select>
                        <label for="emplacement"><p>Emplacement :</p></label>
                        <input type="text" name="emplacement"></br>
                        <label><p>Description :</p></label></br>
                        <textarea name="Question" rows="4" cols="40"></textarea>
                        <input id="submit-button" name="valider" type="submit" value="Valider">
                        <input id="submit-button" name="valider" type="submit" value="Annuler">
                    </form>

                    </form>

                </div>
            </div>
            <script>
                // Get the modal
                var modal = document.getElementById('modal_piece');

                // Get the button that opens the modal
                var btn = document.getElementById("button_piece");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal
                btn.onclick = function() {
                    modal.style.display = "block";
                };

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                    modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>

            <!-- Modale des capteurs-->


            <!-- The Modal -->
            <div id="modal_capteur" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h1>Ajouter un capteur :</h1>
                    <form action="#" method="post">
                        <label for="type_capteur">Type de capteur :</label>
                        <input type="text" name="type_capteur"></br>
                        <label for="piece_capteur">Pièce du capteur :</label>
                        <input type="text" name="piece_capteur"></br>
                        <label>Description :</label></br>
                        <textarea name="Question" rows="4" cols="40"></textarea>
                    </form>

                    </form>

                </div>

            </div>
            <!-- Ajouter la partie "script" pour créer la modal, mais le copié/collé ne fonctinne pas-->
        </div>

    </div>
</div>
