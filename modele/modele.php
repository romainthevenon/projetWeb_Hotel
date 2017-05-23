<?php 

	//renvoie la liste des hotels
	function getHotels() {
		$bdd = getBdd();
		$hotels = $bdd->query('SELECT * FROM hotel');
		return $hotels;
	}

	//renvoie la liste des chambres associé a l'hotel passé en paramètre
	function recupChambres($idHotel) {
		$bdd = getBdd();
		$nombre = $bdd->query('SELECT * FROM chambre WHERE idHotel = '.$idHotel.' AND occupe = 0');
		return $nombre;
	}

	function recupCategorie($idCategorie) {
		$bdd = getBdd();
		$Categorie = $bdd->query('SELECT * FROM categorie WHERE idCategorie = '.$idCategorie.'');
		$cat = $Categorie->fetch();
		return $cat;
	}

	function recupChambreDifferentDate($id,$date){
		$bdd = getBdd();
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, reservation AS r, hotel AS h WHERE c.numChambre=r.numchambre AND h.idHotel=? AND c.idHotel=h.idHotel AND r.DateReservation<>?');
		$chambre->execute(array($id,$date));
		return $chambre;
	}

	function recupChambrePasDansReservation($id){
		$bdd = getBdd();
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, hotel AS h WHERE h.idHotel=? AND c.idHotel=h.idHotel AND c.numChambre NOT IN(SELECT numChambre FROM reservation)');
		$chambre->execute(array($id));
		return $chambre;
	}

	function recupReservation(){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation');
		return $reservation;
	}

	function recupClient(){
		$bdd = getBdd();
		$client = $bdd->query('SELECT * FROM client');
		return $client;
	}

	//Effectue la connexion à la BDD
	function getBdd() {
		 $bdd = new PDO('mysql:host=localhost;dbname=projetWeb;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
	/*	 $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u831133719_proj','u831133719_roro','23Se1996',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  */
		return $bdd;
	}


?>