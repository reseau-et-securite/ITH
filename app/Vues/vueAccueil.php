<!-- Titre de la page -->
<?php $this->titre = "Accueil"; ?>
<?php if (isset($_SESSION['id']) && $_SESSION['id'] == 1): ?>


  <!--DataTables -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

  <table id="myTable" class="hover row-border stripe">

    <thead>
      <tr>
        <th>Mail</th>
        <th>Prénom</th>
        <th>Nom</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($donnees as $key => $value): ?>
          <tr onclick="window.location.href='/ITH/<?php echo $value['id_u'] ?>' ">
            <td> <?php echo $value['email_u'] ?> </td>
            <td> <?php echo $value['prenom_u'] ?> </td>
            <td> <?php echo $value['nom_u'] ?> </td>
          </tr>
      <?php endforeach; ?>
    </tbody>

  </table>

  <script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable({
      paging: false,
      info: false
    });
  });
  </script>

<?php else: ?>
    <div id="body">
        <div class="row" id="slide1">
            <div id="house_1" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            </div>
        </div>
        <div class="row topspace row_retour_ligne_s" id="slide2">
            <div class="col-xs-hide col-sm-hide col-md-1 col-lg-1"></div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 content">
                <h2>Qui sommes-nous ?</h2>
                <p>Domisep est une entreprise spécialisée dans la télésurveillance d'immeubles, grâce à la pose de systèmes d'alarme sans fil adaptés aux besoins des particuliers et une centrale d'alarme opérationnelle 24h/24. Domisep gère un parc de plusieurs milliers d’habitations dans plus d’une dizaine de pays en Europe.</p>
            </div>
            <div class="col-xs-hide col-sm-hide col-md-0 col-lg-0"></div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 content">
                <h2>Ce que nous proposons</h2>
                <p>Domisep offrira à chacun de ses clients, la possibilité de se connecter en toute sécurité afin de :<br/>
                    <ul class="pres">
                        <li>
                            Piloter son domicile : ouvertures et fermetures automatiques, mise en route et extinction d'équipements électroniques, etc.
                        </li>
                        <li>
                            Protéger son domicile : détection d'intrusion, alarmes, détection de fuites, etc.
                        </li>
                        <li>
                            Réduire ses factures de chauffage ou d'énergie : contrôle de température
                        </li>
                    </ul>
                </p>
            </div>
            <div class="col-xs-hide col-sm-hide col-md-0 col-lg-0"></div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 content">
                <h2>Pour quelle clientèle ?</h2>
                <p>Dans le cadre de son expansion et de la diversification de ses activités, Domisep souhaite proposer une gestion complète des habitations connectées (immeubles et maisons) pour les particuliers. Domisep souhaite, pour ce faire, rassembler toutes les technologies de l'informatique, des télécommunications et de l'électronique et les mettre au service de ses clients, grâce à un traitement optimisé des signaux et des informations.</p>
            </div>
            <div class="col-xs-hide col-sm-hide col-md-1 col-lg-1"></div>
        </div>
        <div class="row" id="slide3">
            <div id="house_2" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
            </div>
        </div>
    </div>
<?php endif; ?>
