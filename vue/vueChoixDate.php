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
		<div class="row">
			<h3> Details a venir </h3>
		  <div class="row">
		    <form method="POST" action="controleurChoixDate.php">
		      <div class="row">
		      <p> Choissisez une date de reservation </p>
		        <div class="input-field col s4">
				  <input name="date" type="date">
		        </div>
		      </div>
		      <input type="hidden" name="id" value="<?php  echo ' '.$var.' ' ?>" />
		      <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
    		  		<i class="material-icons right">send</i>
  			  </button>
		    </form>
		 </div>


		<?php include('footer.php'); ?>
	</body>
</html>