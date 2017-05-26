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
		    <p>Nos différents hotels sont composé de deux catégories de chambres pour toucher différents types de clients : une catégorie simple et une catégorie double </p>
			<div class="row">
				<div class="col s8 m6">
		    		<img class="responsive-img" src="../img/categorieSimple.jpg" alt="categorie Simple" />
		    	</div>
		    	<div class="col s8 m6">
		    		<p>Les chambres de la catégorie simple sont constitué d'un lit double. Elle correspond à 1 ou 2 personnes.</p>
		    	</div>
		    </div>
		    <div class="row">
				<div class="col s8 m6">
					<p>Les chambres de la catégorie double sont constitué de deux lits double. Elle correspond à 3 ou 4 personnes</p>
		    	</div>
		    	<div class="col s8 m6">
		    		<img class="responsive-img" src="../img/categorieDouble.jpg" alt="categorie Double" />
		    	</div>
		    </div>
		    <p>Chaqu'une de nos chambres, possède la wifi et la télé pour vous permettre d'être comme chez vous.</p>
		      <!--   Icon Section   -->
		      <div class="row">
		        <div class="col s12 m6">
		          	<div class="card horizontal">
		          		<div class="card-stacked">
        					<div class="card-content">
		          				<p> Categorie simple (1/2 personnes) (<?php echo $prixCat1; ?>€) :</p>
		          				<?php if($a!=0){ ?>
									<p class="light"> <?php echo 'Il y a '.$a.' chambres disponibles.'; ?> </p>
									<div class="card-action">
										<a class="waves-effect waves-teal btn-flat" href="controleurCategorie.php?idHotel=<?php echo $id; ?>&amp;date=<?php echo $date; ?>&amp;numChambre=<?php echo $numChambre; ?>">Reserver</a>
									</div>
								<?php }else{ ?>
									<p class="light"> <?php echo 'Desole il n\'y a plus de chambres disponibles'; ?> </p>
								<?php } ?>
							</div>
						</div>
		          	</div>
		        </div>
		        <div class="col s12 m6">
		          	<div class="card horizontal">
		          		<div class="card-stacked">
        					<div class="card-content">
		          				<p> Categorie double (3/4 personnes) (<?php echo $prixCat2; ?>€) :</p>
		          				<?php if($b!=0){ ?>
									<p class="light"> <?php echo 'Il y a '.$b.' chambres disponibles.'; ?> </p>
									<div class="card-action">
										<a class="waves-effect waves-teal btn-flat" href="controleurCategorie.php?idHotel=<?php echo $id; ?>&amp;date=<?php echo $date; ?>&amp;numChambre=<?php echo $numChambre2; ?>">Reserver</a>
									</div>
								<?php }else{ ?>
									<p class="light"> <?php echo 'Desole il n\'y a plus de chambres disponibles'; ?> </p>
								<?php } ?>
		          			</div>
		        		</div>
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