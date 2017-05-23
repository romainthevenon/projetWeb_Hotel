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

		<?php include("vue/header.php"); ?>
		<p> Veuillez completer le formulaire : </p>

  <div class="row">
    <form class="col s12" method="POST" action="controleur/controleurFormulaireClient.php">
      <div class="row">
        <div class="input-field col s12">
          <input name="nom" type="text" class="validate">
          <label for="nom">Votre nom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="prenom" type="text" class="validate">
          <label for="prenom">Votre prenom</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="adresse" type="text" class="validate">
          <label for="adresse">Votre adresse</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="codePostal" type="text" class="validate">
          <label for="codePostal">Votre code postal</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="ville" type="text" class="validate">
          <label for="ville">Votre ville</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="numTel" type="text" class="validate">
          <label for="numTel">Votre numero de telephone</label>
        </div>
      </div>
      <input type="hidden" name="numChambre" value="<?php  echo ' '.$numChambre.' ' ?>" />
      <input type="hidden" name="date" value="<?php  echo ' '.$date.' ' ?>" />
     <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>

		<?php include("vue/footer.php"); ?>
	</body>
</html>