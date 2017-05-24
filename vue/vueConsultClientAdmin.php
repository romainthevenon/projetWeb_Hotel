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
		<div class="row">
				<table>
					<tr>
						<td> Prenom </td>
						<td> Nom </td>
						<td> Adresse </td>
						<td> Code Postal </td>
						<td> Ville </td>
						<td> Numero de telephone </td>
					</tr>
			    <?php while($donnees = $client->fetch()){ ?>
			    	<tr>
			    		<td><?php echo $donnees['prenom']; ?></td>
			    		<td><?php echo $donnees['nom']; ?></td>
			    		<td><?php echo $donnees['adresse']; ?></td>
			    		<td><?php echo $donnees['codePostal']; ?></td>
			    		<td><?php echo $donnees['ville']; ?></td>
			    		<td><?php echo $donnees['numTel']; ?></td>
			    	</tr>
			    <?php } ?>
			    </table>
			
		</div>


		<?php include("footer.php"); ?>
</body>
</html>