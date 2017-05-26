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
		    	  	<form method="POST" action="controleurModifPrixCategorie.php">
		    	  		<div class="col s8 m6">
						    <select name="select">
						      	<option value="" disabled selected>Choississez la catégorie</option>
		                	  <?php while($donnees = $categorie->fetch()){ ?>
		                    	<option value="<?php echo $donnees['idCategorie'] ?>"><?php echo $donnees['type'].' ('.$donnees['prix'].' €)'; ?></option>
		                      <?php } ?>
						    </select>
						    <label>Choississez la catégorie</label>
						    <div class="row">
             					<div class="input-field col s8">
									<input name="prixNouv" type="number" class="validate">
          							<label for="prixNouv">Nouveau prix</label>
          						</div>
          					</div>
          				
			            <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
			              <i class="material-icons right">send</i>
			            </button>
			            </div>
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

<?php
if($a==True){ ?>
<script type="text/javascript">
		 Materialize.toast('Prix modifié avec succés !', 4000) // 4000 is the duration of the toast
</script>
<?php } ?>