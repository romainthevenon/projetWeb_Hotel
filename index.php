<?php


	if(isset($_COOKIE['nom']) AND isset($_COOKIE['mdp'])){

		setcookie("nom", "", time() - 3600,'/');
		setcookie("mdp", "", time() - 3600,'/');
	}
	include(dirname(__FILE__).'/modele/modele.php');
	$hotels = getHotels();
	if(isset($hotels)){
		include(dirname(__FILE__).'/vue/vueAccueil.php');
	}





?>