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

		<?php include('header.php'); ?>
		<?php include('carousel.php'); ?>

		  <div class="container">
		    <div class="section">

		      <!--   Icon Section   -->
		      <div class="row">
		      <h2 class="center brown-text"> Choissisez l'hotel dans lequel vous voulez effectuer une réservation </h2>
		      <?php while($donnees = $hotels->fetch()){ ?>
		        <div class="col s12 m4">
		          <div class="icon-block">
		        <!--    <h2 class="center brown-text"><img src="img/icone.png" alt="icone" /></h2> -->
						<p class="light"> <?php 
							echo 'Vous pouvez reserver dans l\'hotel '.$donnees['nom'].' se trouvant à '.$donnees['ville'].'. L\'adresse exacte est '.$donnees['adresse'].' '.$donnees['codePostal'].' '.$donnees['ville'].'.<br/>Vous pouvez appeller au '.$donnees['numTel'].'.';
						?> </p>
							<form method="POST" action="controleur/controleurAccueil.php">
							<input type="hidden" name="id" value="<?php  echo ' '.$donnees['idHotel'].' ' ?>" />
							<input type="submit" value="Reserver" />
						</form> 
		          </div>
		        </div>
		       <?php } ?>
		      </div>
		     </div>
		     </div>


		<?php include('footer.php'); ?>
	</body>
</html>