<?php


include(dirname(__FILE__).'/../modele/modele.php');

if(empty($_POST['date']) OR $_POST['date'] < date("Y-m-d")){

		$var=$_POST['id'];
		$a = True;
		include(dirname(__FILE__).'/../vue/vueChoixDate.php');
	
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

		$prixCat1 = recupPrixChambre(1);
		$prixCat2 = recupPrixChambre(2);

		include(dirname(__FILE__).'/../vue/vueChoixCategorie.php');
	
}

?>