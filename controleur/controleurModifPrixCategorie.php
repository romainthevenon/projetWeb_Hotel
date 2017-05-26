<?php

include(dirname(__FILE__).'/../modele/modele.php');

$idCategorie = $_POST['select'];
$prix = $_POST['prixNouv'];

$reservation = recupCategorie($idCategorie);

$bdd = getBdd();
$req = $bdd->exec('UPDATE categorie SET prix='.$prix.' WHERE idCategorie='.$idCategorie.'');

$categorie = getCategorie();
$a = True;
include(dirname(__FILE__).'/../vue/vueModifPrix.php');

?>