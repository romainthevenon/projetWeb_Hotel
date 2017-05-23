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
		<h2>Ajouter un hotel dans la base de donnee </h2>

  <div class="row">
    <form class="col s12" method="POST" action="ajoutHotel.php">
      <div class="row">
        <div class="input-field col s6">
          <input name="nom" type="text" class="validate">
          <label for="nom">Nom de l'hotel</label>
        </div>
        <div class="input-field col s6">
          <input name="adresse" type="text" class="validate">
          <label for="Adresse">Adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="codePostal" type="text" class="validate">
          <label for="codePostal">Code Postal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="ville" type="text" class="validate">
          <label for="ville">Ville</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="numTel" type="text" class="validate">
          <label for="numTel">Numero de Telephone</label>
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