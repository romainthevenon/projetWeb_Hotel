<?php 

$nom = $_POST['nom'];
$mdp = $_POST['mdp'];

if($nom=="admin" AND $mdp=="123" ){
	require 'vue/vueAdministrateur.php';
}else{
	require 'index.php';
}
