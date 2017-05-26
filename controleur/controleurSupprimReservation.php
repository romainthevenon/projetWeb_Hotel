<?php
include(dirname(__FILE__).'/../modele/modele.php');

$id = $_GET['id'];

$bdd = getBdd();
$req = $bdd->exec('DELETE FROM contenir WHERE idReservation = '.$id.'');
$req = $bdd->exec('DELETE FROM reservation WHERE idReservation = '.$id.'');

$hotels = getHotels();
$a=True;
include(dirname(__FILE__).'/../vue/vueChoixHotelAdmin.php');
?>