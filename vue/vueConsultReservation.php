<?php 
require 'modele.php';

$bdd = getBdd();
$client = $bdd->query('SELECT * FROM client WHERE numClient = '.$numClient.'');
$cat = $client->fetch();
$nomClient = $cat['nom'];
$prenomClient = $cat['prenom'];

?>


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

		<?php include("header.php"); 

		echo 'Bonjour '.$prenomClient.' '.$nomClient.', vous avez effectué une réservation pour le '.$date.'. Veuillez conservez le numero de reservation : '.$idReservation.'. Merci.';


		include("footer.php"); ?>
	</body>
</html>