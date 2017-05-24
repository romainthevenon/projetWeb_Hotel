<?php

include(dirname(__FILE__).'/../modele/modele.php');

$service = recupServices();
$idHotel = $_POST['idHotel'];

$date=$_POST['date'];
if(empty($_POST['numChambre'])){
	$numChambre=$_POST['numChambre2'];
}else{
	$numChambre=$_POST['numChambre'];
}

include(dirname(__FILE__).'/../vue/vueRenseignement.php');

?>