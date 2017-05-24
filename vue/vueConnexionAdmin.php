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
                <form action="controleurConnexionAdmin.php" method="post">
                <div class="connexion">
                    <h2> Connexion</h2>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">email</i>
                            <input id="icon_prefix" type="text" name="nom" class="validate" >
                            <label for="icon_prefix">Nom</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="icon_prefix" type="text" name="mdp" class="validate" >
                            <label for="icon_prefix">Mot de passe</label>
                        </div>
                        <button class="btn waves-effect waves-light" type="submit" value="valider">Connexion
                            <i class="material-icons right">send</i>
                        </button>
                </div>
                </form>
            </div>
        </div>
    <?php include("footer.php"); ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.js"></script>

<script> $(document).ready(function(){
        $(".button-collapse").sideNav();
        $('select').material_select();
});
</script>


</body>
</html>