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

		<?php include('header.php'); ?>
		<div class="container">
		    <div class="section">
				<div class="row">
					<div class="col s8 m6">
						<h4>Hotel Bonnier</h4>
						<p>Le groupe Bonnier fondé en 1990, met en oeuvre toutes ses ressources, pour vous procurez un séjour inoubliable.</p>
						<p>De père en fils, nos différents hotels 4 étoiles, vous permettrons de passer une nuit dans les étoiles, avec un personnel qui sera vous rendre la vie plus facile.</p>
						<img class="responsive-img" src="../img/descriptionHotel.jpg" alt="accueil de l'hotel" />
					</div>
					<div class="col s8 m6">
					    <form method="POST" action="../controleur/controleurChoixDate.php">
					    	<input type="hidden" name="id" value="<?php echo $var; ?>">
					    	<div class="row">
					    		<div class="input-field col s8">
					        		<p> Choissisez une date de reservation </p>
									<input name="date" type="date">
					        	</div>
					        </div>
					        <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
			    		  		<i class="material-icons right">send</i>
			  			    </button>
					    </form>
					</div>
				</div>
			</div>
		</div>



		<?php include('footer.php'); ?>
	</body>
</html>
<?php
if($a==True){ ?>
<script type="text/javascript">
		 Materialize.toast('Veuillez choisir une date correcte !', 4000) // 4000 is the duration of the toast
</script>
<?php } ?>