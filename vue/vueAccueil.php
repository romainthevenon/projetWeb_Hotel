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

		<!-- En-tete -->
		<header>
			<nav>
			    <div class="nav-wrapper">
			      <a href="index.php" class="brand-logo">Hotel Bonnier</a>
			      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			      <ul class="right hide-on-med-and-down">
			        <li><a href="index.php">Accueil</a></li>
			        <li><a href="controleur/controleurAdminAccueil.php">Administrateur</a></li>
			        <li><a href="#">Contact</a></li>
			      </ul>
			      <ul class="side-nav" id="mobile-demo">
			        <li><a href="index.php">Accueil</a></li>
			        <li><a href="controleur/controleurAdminAccueil.php">Administrateur</a></li>
			        <li><a href="#">Contact</a></li>
			      </ul>
			    </div>
			</nav>
		</header>
		<div class="carousel">
				<a class="carousel-item" href="#two!"><img src="img/hotel.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel1.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel2.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel3.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel4.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel5.jpg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/hotel6.jpg"></a>
		</div>

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
							<form method="POST" action="controleur/controleurChoixHotelAccueil.php">
							<input type="hidden" name="id" value="<?php  echo ' '.$donnees['idHotel'].' ' ?>" />
							<input type="submit" value="Reserver" />
						</form> 
		          </div>
		        </div>
		       <?php } ?>
		      </div>
		     </div>
		     </div>

	<!-- Bas de page -->
	        <footer class="page-footer">
	          <div class="container">
	            <div class="row">
	              <div class="col l6 s12">
	                <p class="grey-text text-lighten-4">Le groupe Bonnier est à votre écoute et prêt a satisfaire tous vos besoins.</p>
	              </div>
	              <div class="col l4 offset-l2 s12">
	                <a class="grey-text text-lighten-3" href="https://www.facebook.com/"><img src="img/facebook.png" alt="icone" /></a>
	                <a class="grey-text text-lighten-3" href="https://twitter.com/"><img src="img/twitter.png" alt="icone" /></a>
	              </div>
	            </div>
	          </div>
	          <div class="footer-copyright">
	            <div class="container">
	            © 2017 Thevenon Romain
	            <a class="grey-text text-lighten-4 right" href="#!">Hotel Bonnier</a>
	            </div>
	          </div>
	        </footer>
	</body>
</html>



<!-- Script javascript -->
<script type="text/javascript">
	$(document).ready(function(){
      	$('.carousel').carousel();
      	$(".button-collapse").sideNav();
    });
</script>