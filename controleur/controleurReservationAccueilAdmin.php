<?php

include(dirname(__FILE__).'/../modele/modele.php');

$hotels = getHotels();
$a=False;
include(dirname(__FILE__).'/../vue/vueChoixHotelAdmin.php');

?>