<?php 

include(dirname(__FILE__).'/../modele/modele.php');

if(isset($_GET['id'])){

	$var = $_GET['id'];

	$chambre = recupChambres($var);

	$a = 0;
	$b = 0;
	while($donnees = $chambre->fetch()){ 
		$idCategorie=$donnees['idCategorie'];
		if($idCategorie==1){
			$a++;
		}elseif($idCategorie==2){
			$b++;
		}
	}
	$a = False;
	include(dirname(__FILE__).'/../vue/vueChoixDate.php');
}else{
	echo 'erreur';
}
?>