<?php 

require ('modele/modele.php');

function accueil() {
	$hotels = getHotels();
	require ('vue/vueAccueil.php');
}

?>