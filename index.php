<!-- Acces base de données -->
<?php 
require ('controleur/controleur.php');

try {
	accueil();
}
catch (Exception $e) {
	echo '<html><body>Erreur ! '.$e->getMessage().'</body></html>';
}

?>

