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

		<?php include("headerAdmin.php"); ?>
		<div class="row">
		    <div class="input-field col s12">
				<table>
					<tr>
						<td> idReservation </td>
						<td> Date de reservation </td>
						<td> numero de chambre </td>
						<td> numero du client </td>
					</tr>
			    <?php while($donnees = $reservation->fetch()){ ?>
			    	<tr>
			    		<td><?php echo $donnees['idReservation']; ?></td>
			    		<td><?php echo $donnees['DateReservation']; ?></td>
			    		<td><?php echo $donnees['numChambre']; ?></td>
			    		<td><?php echo $donnees['numClient']; ?></td>
			    	</tr>
			    <?php } ?>
			    </table>
			</div>
		</div>


		<?php include("footer.php"); ?>
</body>
</html>