<?php 

require 'modele/modele.php';


if(empty($_POST['nom']) OR empty($_POST['prenom']) OR empty($_POST['adresse']) OR empty($_POST['codePostal']) OR empty($_POST['ville']) OR empty($_POST['numTel'])){
	$date=$_POST['date'];
	$numChambre = $_POST['numChambre'];
	
	require 'vue/vueFormulaireClient.php';
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

	$date=$_POST['date'];
	$numChambre = $_POST['numChambre'];
	$numClient =  $bdd->lastInsertId();

	$req = $bdd->prepare('INSERT INTO reservation(dateReservation, numChambre, numClient) VALUES(:dateReservation, :numChambre, :numClient)');
	$req->execute(array(
		'dateReservation' => $date,
		'numChambre' => $numChambre,
		'numClient' => $numClient
		));

	$idReservation =  $bdd->lastInsertId();

	require 'vue/vueAjoutClient.php';
}
?>