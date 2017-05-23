<!-- Affichage -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="img/bed.png" />
		<!-- materialize -->
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/> 
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  

		<title>Hotel Bonnier</title>
		<meta charset="utf_8/">
	</head>
	<body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

		<?php include("headerAdmin.php"); ?>
		<h2>Ajouter un chambre dans la base de donnee </h2>

  <div class="row">
    <form class="col s12" method="POST" action="ajoutChambre.php">
      <div class="row">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Hotel</option>
            <?php while($donnees = $hotels->fetch()){ ?>
                  <option value="$donnees['idHotel']"><?php echo $donnees['nom'] ?> </option>
            <?php } ?>
          </select>
          <label>Choissisez l'hotel</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select>
            <option value="" disabled selected>Categorie</option>
            <option value="1">simple</option>
            <option value="2">double</option>
          </select>
          <label>Choissisez la categorie</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>

		<?php include("footer.php"); ?>
	</body>
</html>


<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>

