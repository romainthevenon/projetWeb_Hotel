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

  				<div class="input-field col s12">
  					<form method="POST" action="controleurChoixHotelAdmin.php">
					    <select name="select">
					      	<option value="" disabled selected>Choississez l'hotel</option>
	                	  <?php while($donnees = $hotels->fetch()){ ?>
	                    	<option value="<?php echo $donnees['idHotel'] ?>"><?php echo $donnees['nom']; ?></option>
	                      <?php } ?>
					    </select>
					    <label>Choississez l'hotel sur lequel vous voulez consulter les reservations</label>
			            <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
			              <i class="material-icons right">send</i>
			            </button>
					</form>
				</div>

			</div>
		</div>

		<?php include("footer.php"); ?>
	</body>
</html>

<script type="text/javascript">
  $(document).ready(function() {
    $('select').material_select();
  });
</script>


