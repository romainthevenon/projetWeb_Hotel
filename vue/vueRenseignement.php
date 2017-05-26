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
<!--Contenu de la page --> 
    <div class="container">
      <div class="section">
        <p> Veuillez completer le formulaire : <br/>
        * : champs obligatoires</p>
        <div class="row">
          <form method="POST" action="controleurFormulaire.php?idHotel=<?php echo $idHotel; ?>&amp;date=<?php echo $date; ?>&amp;numChambre=<?php echo $numChambre; ?>">
          <div class="col s8 m6">
            <div class="row">
              <div class="input-field col s8">
                <input name="nom" type="text" class="validate">
                <label for="nom">Votre nom *</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="prenom" type="text" class="validate">
                <label for="prenom">Votre prenom *</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="adresse" type="text" class="validate">
                <label for="adresse">Votre adresse *</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="codePostal" type="text" class="validate">
                <label for="codePostal">Votre code postal *</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="ville" type="text" class="validate">
                <label for="ville">Votre ville *</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s8">
                <input name="numTel" type="text" class="validate">
                <label for="numTel">Votre numero de telephone *</label>
              </div>
            </div>
            <button class="btn waves-effect waves-light" type="submit" value="valider">Envoyer
              <i class="material-icons right">send</i>
            </button>
          </div>
          <div class="col s12 m6">
          <div class="input-field col s6">
              <select name="occasion[]" multiple>
                <option value="" disabled selected>Choissez les services</option>
                <?php while($donnees = $service->fetch()){ ?>
                    <option value="<?php echo $donnees['idService'] ?>"><?php echo $donnees['type'].' ('.$donnees['prix'].'€)'; ?></option>
                <?php } ?>
              </select>
              <label>Choississez les différents services voulues</label>
          </div>
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
     Materialize.toast('Informations fausses !', 4000) // 4000 is the duration of the toast
</script>
<?php } ?>