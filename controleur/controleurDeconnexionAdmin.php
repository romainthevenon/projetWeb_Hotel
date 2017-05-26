<?php


if(isset($_COOKIE['nom']) AND isset($_COOKIE['mdp'])){

	$nom = $_COOKIE['nom'];
	$mdp = $_COOKIE['mdp'];

	setcookie("nom", $nom);
	setcookie("mdp", $mdp);

	$hotels = getHotels();

		include(dirname(__FILE__).'/../vue/vueAccueil.php');

?>