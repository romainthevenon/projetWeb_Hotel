<?php

include(dirname(__FILE__).'/../modele/modele.php');

$categorie = getCategorie();
$a = False;

include(dirname(__FILE__).'/../vue/vueModifPrix.php');

?>