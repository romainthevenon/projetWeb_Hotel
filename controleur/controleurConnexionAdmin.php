<?php 

include(dirname(__FILE__).'/../modele/modele.php');

if(isset($_COOKIE['nom']) AND isset($_COOKIE['mdp'])){
	include(dirname(__FILE__).'/../vue/vueAccueilAdmin.php');
}else{
	$nom = $_POST['nom'];
	$mdp = sha1($_POST['mdp']);

	if($nom=="admin" AND $mdp==sha1("123") ){
		setcookie("nom", $nom, time()+(60*60*24*30),'/');
		setcookie("mdp", $mdp, time()+(60*60*24*30),'/');
		include(dirname(__FILE__).'/../vue/vueAccueilAdmin.php');
	}else{
		include(dirname(__FILE__).'/../index.php');
	}
}

?>