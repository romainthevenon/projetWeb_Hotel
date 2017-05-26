<?php


include(dirname(__FILE__).'/../modele/modele.php');

$service = recupServices();
if(isset($_GET['idHotel']) AND isset($_GET['date']) AND isset($_GET['numChambre'])){
	$idHotel = $_GET['idHotel'];
	$date=$_GET['date'];
	$numChambre=$_GET['numChambre'];

	$a=False;
	include(dirname(__FILE__).'/../vue/vueRenseignement.php');
}

?>