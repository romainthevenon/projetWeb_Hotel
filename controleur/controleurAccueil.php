<?php 

require '../modele/modele.php';

$var = $_POST['id'];
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

require '../vue/vueChoixDate.php';

?>


