<?php
include(dirname(__FILE__).'/../modele/modele.php');

if(isset($_GET['id'])){
	$idReservation = $_GET['id'];
	$reservation = recupReservationSelonIDReservation($idReservation);
	$cat = recupClientDonne($reservation['numClient']);
	$client = $cat->fetch();
	$hotel = recupHotelDonne($reservation['idHotel']);

include(dirname(__FILE__).'/../vue/vueConsultClientReservationAdmin.php');
}
?>