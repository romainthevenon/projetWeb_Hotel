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
		<p> Reservation faite ! </p>
		<form method="POST" action="controleur/controleurConsultReservation.php">
			<input type="hidden" name="date" value="<?php  echo ' '.$date.' ' ?>" />
			<input type="hidden" name="numChambre" value="<?php  echo ' '.$numChambre.' ' ?>" />
			<input type="hidden" name="numClient" value="<?php  echo ' '.$numClient.' ' ?>" />
			<input type="hidden" name="idReservation" value="<?php  echo ' '.$idReservation.' ' ?>" />
     		<button class="btn waves-effect waves-light" type="submit" value="valider">Consulter Reservation
    			<i class="material-icons right">send</i>
  			</button>
		</form>
		<?php include("vue/footer.php"); ?>
	</body>
</html>