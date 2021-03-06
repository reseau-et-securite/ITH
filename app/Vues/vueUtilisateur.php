<?php $this->titre = "Utilisateur" ?>

<!--DataTables -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<h1><?php foreach ($donnees as $key => $value): ?>
  <?php echo $value; ?>
<?php endforeach; ?></h1>

<h3>Habitations:</h3>

<table id="myTable" class="hover row-border stripe">

  <thead>
    <td>Ville</td>
    <td>Pays</td>
    <td>Rue</td>
  </thead>

  <tbody>
    <?php foreach ($donnees_habitation as $key => $value): ?>
      <tr>
        <?php foreach ($value as $key => $valeurs): ?>
          <td><?php echo $valeurs ?></td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>


<form class="user" action="" method="post">
  <input type="submit" name="addAdmin" value="Ajouter en tant qu'admin">
</form>


<!-- Trigger/Open The Modal -->
<button class="submit-button" id="myBtn">Ajouter Habitaion</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <form class="habitation" action="" method="post">
      <h5>Adresse</h5>
      <input type="text" name="pays" placeholder="Pays"><br>
      <input type="text" name="ville" placeholder="Ville"><br>
      <input type="number" name="num_rue" placeholder="Numéro de Rue" min="0"><br>
      <input type="text" name="rue" placeholder="Rue"><br>
      <input type="number" name="sup" placeholder="Superficie" min="0"><br>
      <!--
      Immeuble:
      <input type="radio" name="type_habitation" value="immeuble"><br>
      Maison:
      <input type="radio" name="type_habitation" value="maison"><br>-->
      <input type="submit" name="envoyer" value="Envoyer">
    </form>
  </div>

</div>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

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


<script type="text/javascript">
$(document).ready( function () {
  $('#myTable').DataTable({
    paging: false,
    info: false
  });
});
</script>
