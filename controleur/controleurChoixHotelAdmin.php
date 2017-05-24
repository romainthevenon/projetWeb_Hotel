<?php

include(dirname(__FILE__).'/../modele/modele.php');

$idHotel = $_POST['select'];
$reservation = recupReservationSelonID($idHotel);

include(dirname(__FILE__).'/../vue/vueConsultReservationAdmin.php');

?>