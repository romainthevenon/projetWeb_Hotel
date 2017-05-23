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

		<?php include("vue/headerAdmin.php"); ?>

	    <a href="controleur/controleurAjoutHotel.php">Ajouter un hotel</a><br />
	    <a href="controleur/controleurModifChambre.php">Ajouter une chambre</a><br />
		<a href="controleur/controleurConsultReservationAdmin.php">Consulter les reservations</a><br />
		<a href="controleur/controleurConsultClientAdmin.php">Consulter la liste des clients</a><br />

		<?php include("vue/footer.php"); ?>
</body>
</html>