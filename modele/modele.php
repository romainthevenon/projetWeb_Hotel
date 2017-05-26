<?php 

	//renvoie la liste des hotels
	function getHotels() {
		$bdd = getBdd();
		$hotels = $bdd->query('SELECT * FROM hotel');
		return $hotels;
	}

	function getCategorie() {
		$bdd = getBdd();
		$categorie = $bdd->query('SELECT * FROM categorie');
		return $categorie;
	}

	function recupHotelDonne($idHotel){
		$bdd = getBdd();
		$hotel = $bdd->query('SELECT * FROM hotel WHERE idHotel = '.$idHotel.'');
		$res = $hotel->fetch();
		return $res;
	}

	function recupReservationSelonIDReservation($idReservation){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation WHERE idReservation = '.$idReservation.'');
		$res = $reservation->fetch();
		return $res;
	}	

	function recupReservationSelonIDHotel($idHotel){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation WHERE idHotel = '.$idHotel.'');
		return $reservation;	
	}

	function recupPrixService($idService){
		$bdd = getBdd();
		$service = $bdd->query('SELECT * FROM service WHERE idService = '.$idService.'');
		$donnee = $service->fetch();
		$prix = $donnee['prix'];
		return $prix;
	}

	function recupServices(){
		$bdd = getBdd();
		$service = $bdd->query('SELECT * FROM service');
		return $service;		
	}

	function recupPrixChambre($idCategorie){
		$bdd = getBdd();
		$categorie = $bdd->query('SELECT * FROM categorie WHERE idCategorie = '.$idCategorie.'');
		$donnee = $categorie->fetch();
		$prix = $donnee['prix'];
		return $prix;		
	}

	function recupHotel($numChambre){
		$bdd = getBdd();
		$hotels = $bdd->query('SELECT * FROM chambre WHERE numChambre = '.$numChambre.'');
		$donnee = $hotels->fetch();
		$idHotel = $donnee['idHotel'];
		return $idHotel;
	}

	function recupIdCategorie($numChambre){
		$bdd = getBdd();
		$chambre = $bdd->query('SELECT * FROM chambre WHERE numChambre = '.$numChambre.'');
		$donnee = $chambre->fetch();
		$idCategorie = $donnee['idCategorie'];
		return $idCategorie;
	}

	function recupPrix($idCategorie){
		$bdd = getBdd();
		$categorie = $bdd->query('SELECT * FROM categorie WHERE idCategorie = '.$idCategorie.'');
		$donnee = $categorie->fetch();
		$prix = $donnee['prix'];
		return $prix;
	}

	//renvoie la liste des chambres associé a l'hotel passé en paramètre
	function recupChambres($idHotel) {
		$bdd = getBdd();
		$nombre = $bdd->query('SELECT * FROM chambre WHERE idHotel = '.$idHotel.'');
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
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, reservation AS r, hotel AS h WHERE c.numChambre=r.numchambre AND h.idHotel=? AND c.idHotel=h.idHotel AND c.idHotel=r.idHotel AND r.DateReservation<>?');
		$chambre->execute(array($id,$date));
		return $chambre;
	}

	function recupChambrePasDansReservation($id){
		$bdd = getBdd();
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, hotel AS h WHERE h.idHotel=? AND c.idHotel=h.idHotel AND c.numChambre NOT IN(SELECT numChambre FROM reservation WHERE idHotel=?)');
		$chambre->execute(array($id,$id));
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

	function recupClientDonne($numClient){
		$bdd = getBdd();
		$client = $bdd->query('SELECT * FROM client WHERE numClient = '.$numClient.'');
		return $client;
	}

	//Effectue la connexion à la BDD
	function getBdd() {
		/* $bdd = new PDO('mysql:host=localhost;dbname=test_projet;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); */
		 $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u831133719_hotel','u831133719_bonni','23Se1996',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));   
		return $bdd;
	}


?>