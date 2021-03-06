<?php

include(dirname(__FILE__).'/../modele/modele.php');

if(isset($_GET['date']) AND isset($_GET['numChambre']) AND isset($_GET['idHotel'])){
	if(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['adresse']) OR empty($_POST['codePostal']) OR empty($_POST['ville']) OR empty($_POST['numTel'])){
		$service = recupServices();

		$date=$_GET['date'];
		$numChambre = $_GET['numChambre'];
		$idHotel = $_GET['idHotel'];

		$a=True;
		include(dirname(__FILE__).'/../vue/vueRenseignement.php');
	}else{
		//on recupere les valeurs du formulaire
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$codePostal=$_POST['codePostal'];
		$ville=$_POST['ville'];
		$numTel=$_POST['numTel'];

		//on insere les valeurs dans la bdd
		$bdd = getBdd();
		$req = $bdd->prepare('INSERT INTO client(prenom, nom, adresse, codePostal, ville, numTel) VALUES(:prenom, :nom, :adresse, :codePostal, :ville, :numTel)');
		$req->execute(array(
			'prenom' => $prenom,
			'nom' => $nom,
			'adresse' => $adresse,
			'codePostal' => $codePostal,
			'ville' => $ville,
			'numTel' => $numTel
			));

		$date=$_GET['date'];
		$numChambre = $_GET['numChambre'];
		$numClient =  $bdd->lastInsertId();

		$idHotel = $_GET['idHotel'];

		$req = $bdd->prepare('INSERT INTO reservation(dateReservation, numChambre, idHotel, numClient) VALUES(:dateReservation, :numChambre, :idHotel, :numClient)');
		$req->execute(array(
			'dateReservation' => $date,
			'numChambre' => $numChambre,
			'idHotel' => $idHotel,
			'numClient' => $numClient
			));

		$idReservation =  $bdd->lastInsertId();

		$idCategorie = recupIdCategorie($numChambre);
		$prix = recupPrixChambre($idCategorie);

		
		if(!empty($_POST['occasion'])){
			$tab = $_POST['occasion'];
			foreach ($tab as $selectValue) {
				$req = $bdd->prepare('INSERT INTO contenir(idReservation, idService) VALUES(:idReservation, :idService)');
				$req->execute(array(
					'idReservation' => $idReservation,
					'idService' => $selectValue
				));
				$prixService = recupPrixService($selectValue);
				$prix = $prix + $prixService;
			}
		}
		include(dirname(__FILE__).'/../vue/vueConsultReservation.php');
	}
}

?>