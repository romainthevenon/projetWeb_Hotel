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

		<?php include("header.php"); ?>

		<div class="container">
			<div class="section">
				<p>Bonjour <?php echo $prenom.' '.$nom; ?> <br/></p> 
				<p>Vous avez effectué une réservation pour la nuit du <?php echo $date; ?> <br/></p>
				<p>Veuillez conservez le numero de réservation : <?php echo $idReservation; ?> <br/></p>
				<p>Cordialement. Hotel Bonnier<br/></p>
				<p>Le prix est de : <?php echo $prix; ?> </p>

			</div>
		</div>


		<?php include("footer.php"); ?>
	</body>
</html>