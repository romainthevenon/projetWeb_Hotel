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

		      <!--   Icon Section   -->
		      <div class="row">
		        <div class="col s12 m4">
		          <div class="icon-block">
		          		<p> Categorie simple (1/2 personnes) (<?php echo $prixCat1; ?>€) :</p>
		          		<?php if($a!=0){ ?>
							<p class="light"> <?php echo 'Il y a '.$a.' chambres disponibles.'; ?> </p>
							<form method="POST" action="controleurCategorie.php">
								<input type="hidden" name="date" value="<?php  echo ' '.$date.' ' ?>" />
								<input type="hidden" name="idHotel" value="<?php  echo ' '.$id.' ' ?>" />
								<input type="hidden" name="numChambre" value="<?php  echo ' '.$numChambre.' ' ?>" />
								<input type="submit" value="Reserver" />
							</form>
						<?php }else{ ?>
							<p class="light"> <?php echo 'Desole il n\'y a plus de chambres disponibles'; ?> </p>
						<?php } ?>
		          </div>
		        </div>
		        <div class="col s12 m4">
		          <div class="icon-block">
		          		<p> Categorie double (3/4 personnes) (<?php echo $prixCat2; ?>€) :</p>
		          		<?php if($b!=0){ ?>
							<p class="light"> <?php echo 'Il y a '.$b.' chambres disponibles.'; ?> </p>
							<form method="POST" action="controleurCategorie.php">
								<input type="hidden" name="date" value="<?php  echo ' '.$date.' ' ?>" />
								<input type="hidden" name="idHotel" value="<?php  echo ' '.$id.' ' ?>" />
								<input type="hidden" name="numChambre2" value="<?php  echo ' '.$numChambre2.' ' ?>" />
								<input type="submit" value="Reserver" />
							</form>
						<?php }else{ ?>
							<p class="light"> <?php echo 'Desole il n\'y a plus de chambres disponibles'; ?> </p>
						<?php } ?>
		          </div>
		        </div>
		      </div>
		     </div>
		     </div>
<?php 
include("footer.php");
?>
</body>
</html>