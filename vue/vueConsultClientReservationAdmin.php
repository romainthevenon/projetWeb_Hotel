<!-- Affichage -->
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="../img/bed.png" />
		<!-- materialize -->
	    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	    <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/> 
	    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  

		<title>Hotel Bonnier</title>
		<meta charset="utf_8/">
	</head>
	<body>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.min.js"></script>

		<?php include("headerAdmin.php"); ?>
    	<div class="container">
      		<div class="section">
      			<div class="row">
      				<h4>FACTURE N° <?php echo $idReservation; ?></h4>
      				<h5>Client :</h5>
      				<p>Le client est <?php echo $client['prenom']; ?> <?php echo $client['nom']; ?> habitant à <?php echo $client['adresse']; ?> <?php echo $client['codePostal']; ?> <?php echo $client['ville']; ?>. </p>
      				<h5>Reservation :</h5>
      				<p>La réservation concerne la chambre <?php echo $reservation['numChambre']; ?> de l'hôtel <?php echo $hotel['nom']; ?> à <?php echo $hotel['adresse']; ?> <?php echo $hotel['codePostal']; ?> <?php echo $hotel['ville']; ?>.</p>
      				</div>
      			</div>
      		</div>
      	</div>

		<?php include("footer.php"); ?>
</body>
</html>
