<?php 

include(dirname(__FILE__).'/../modele/modele.php');

$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

if($nom=="admin" AND $mdp=="123" ){
	include(dirname(__FILE__).'/../vue/vueAccueilAdmin.php');
}else{
	include(dirname(__FILE__).'/../index.php');
}

?>