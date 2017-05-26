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
			    	<h4>Que voulez-vous faire ? </h4>
			        	<div class="col s12 m4">
			          		<div class="card horizontal">
			          			<div class="card-stacked">
	        				    	<div class="card-content">
	        				    		<p class="light"> Vous pouvez modifier le prix de la catégorie </p>
	        				    	</div>	
	        				    	<div class="card-action">
										<a class="waves-effect waves-teal btn-flat" href="../controleur/controleurmodifierAccueilAdmin.php">Modifier prix</a>
									</div>
								</div>
							</div>
						</div>

			        	<div class="col s12 m4">
			          		<div class="card horizontal">
			          			<div class="card-stacked">
	        				    	<div class="card-content">
	        				    		<p class="light"> Vous pouvez consulter les réservations en fonction de l'hotel choisi </p>
	        				    	</div>	
	        				    	<div class="card-action">
										<a class="waves-effect waves-teal btn-flat" href="../controleur/controleurReservationAccueilAdmin.php">Consulter réservations</a>
									</div>
								</div>
							</div>
						</div>

			        	<div class="col s12 m4">
			          		<div class="card horizontal">
			          			<div class="card-stacked">
	        				    	<div class="card-content">
	        				    		<p class="light"> Vous pouvez consulter la liste des clients </p>
	        				    	</div>	
	        				    	<div class="card-action">
										<a class="waves-effect waves-teal btn-flat" href="../controleur/controleurClientAccueilAdmin.php">Consulter clients</a>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>


		<?php include("footer.php"); ?>
</body>
</html>