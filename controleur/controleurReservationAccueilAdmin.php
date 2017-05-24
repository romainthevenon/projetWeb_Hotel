<?php

include(dirname(__FILE__).'/../modele/modele.php');

$hotels = getHotels();

include(dirname(__FILE__).'/../vue/vueChoixHotelAdmin.php');

?>