<?php

$date=$_POST['date'];
if(isset($_POST['numChambre'])){
	$numChambre=$_POST['numChambre'];
}else{
	$numChambre=$_POST['numChambre2'];
}

require 'vue/vueFormulaireClient.php';

?>