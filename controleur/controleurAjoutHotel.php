<?php 

require 'modele/modele.php';

//on recupere les valeurs du formulaire
$nom=$_POST['nom'];
$adresse=$_POST['adresse'];
$codePostal=$_POST['codePostal'];
$ville=$_POST['ville'];
$numTel=$_POST['numTel'];

//on insere les valeurs dans la bdd
$bdd = getBdd();
$req = $bdd->prepare('INSERT INTO hotel(nom, adresse, codePostal, ville, numTel) VALUES(:nom, :adresse, :codePostal, :ville, :numTel)');
$req->execute(array(
	'nom' => $nom,
	'adresse' => $adresse,
	'codePostal' => $codePostal,
	'ville' => $ville,
	'numTel' => $numTel
	));

require 'vue/vueAjoutHotel.php';
?>