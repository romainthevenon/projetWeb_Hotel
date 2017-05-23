<?php 

require 'modele/modele.php';

if(empty($_POST['date'])){
	$var=$_POST['id'];
	
	require 'vue/vueChoixDate.php';
}else{

	$date=$_POST['date'];
	$id=$_POST['id'];

	$chambre = recupChambreDifferentDate($id,$date);

	$chambre2 = recupChambrePasDansReservation($id);

	$a = 0;
	$b = 0;
	while($donnees = $chambre->fetch()){ 
		$idCategorie=$donnees['idCategorie'];
		if($idCategorie==1){
			$a++;
			$numChambre = $donnees['numChambre'];
		}elseif($idCategorie==2){
			$b++;
			$numChambre2 = $donnees['numChambre'];
		}
	}
	while($donnees = $chambre2->fetch()){ 
		$idCategorie=$donnees['idCategorie'];
		if($idCategorie==1){
			$a++;
			$numChambre = $donnees['numChambre'];
		}elseif($idCategorie==2){
			$b++;
			$numChambre2 = $donnees['numChambre'];
		}
	}

	require 'vue/vueChoixCategorie.php';
}
?>