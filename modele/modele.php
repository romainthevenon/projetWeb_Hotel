<?php 

	//renvoie la liste des hotels
	function getHotels() {
		$bdd = getBdd();
		$hotels = $bdd->query('SELECT * FROM hotel');
		return $hotels;
	}

	//renvoie la liste des catégories
	function getCategorie() {
		$bdd = getBdd();
		$categorie = $bdd->query('SELECT * FROM categorie');
		return $categorie;
	}

	//renvoie l'hotel qui correspond a l'idHotel qu'on passe en paramètres
	function recupHotelDonne($idHotel){
		$bdd = getBdd();
		$hotel = $bdd->query('SELECT * FROM hotel WHERE idHotel = '.$idHotel.'');
		$res = $hotel->fetch();
		return $res;
	}

	//renvoie la reservation qui correspond a l'idReservation qu'on passe en paramètres
	function recupReservationSelonIDReservation($idReservation){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation WHERE idReservation = '.$idReservation.'');
		$res = $reservation->fetch();
		return $res;
	}	

	//renvoie la reservation qui correspond a l'idHotel qu'on passe en paramètres
	function recupReservationSelonIDHotel($idHotel){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation WHERE idHotel = '.$idHotel.'');
		return $reservation;	
	}

	//renvoie le prix du service qui correspond a l'idService qu'on passe en paramètres
	function recupPrixService($idService){
		$bdd = getBdd();
		$service = $bdd->query('SELECT * FROM service WHERE idService = '.$idService.'');
		$donnee = $service->fetch();
		$prix = $donnee['prix'];
		return $prix;
	}

	//renvoie la liste des services
	function recupServices(){
		$bdd = getBdd();
		$service = $bdd->query('SELECT * FROM service');
		return $service;		
	}

	//renvoie le prix de la chambre qui correspond a l'idCategorie passé en paramètre
	function recupPrixChambre($idCategorie){
		$bdd = getBdd();
		$categorie = $bdd->query('SELECT * FROM categorie WHERE idCategorie = '.$idCategorie.'');
		$donnee = $categorie->fetch();
		$prix = $donnee['prix'];
		return $prix;		
	}

	//renvoie l'idHotel qui correspond au numChambre passé en paramètres
	function recupHotel($numChambre){
		$bdd = getBdd();
		$hotels = $bdd->query('SELECT * FROM chambre WHERE numChambre = '.$numChambre.'');
		$donnee = $hotels->fetch();
		$idHotel = $donnee['idHotel'];
		return $idHotel;
	}

	//renvoie l'idCategorie qui correspond au numChambre passé en paramètre
	function recupIdCategorie($numChambre){
		$bdd = getBdd();
		$chambre = $bdd->query('SELECT * FROM chambre WHERE numChambre = '.$numChambre.'');
		$donnee = $chambre->fetch();
		$idCategorie = $donnee['idCategorie'];
		return $idCategorie;
	}

	//renvoie la liste des chambres associé a l'hotel passé en paramètre
	function recupChambres($idHotel) {
		$bdd = getBdd();
		$nombre = $bdd->query('SELECT * FROM chambre WHERE idHotel = '.$idHotel.'');
		return $nombre;
	}

	//recupère la categorie qui correspond a l'idCategorie passé en paramètres
	function recupCategorie($idCategorie) {
		$bdd = getBdd();
		$Categorie = $bdd->query('SELECT * FROM categorie WHERE idCategorie = '.$idCategorie.'');
		$cat = $Categorie->fetch();
		return $cat;
	}

	//renvoie la liste des chambres qui se trouve dans reservations mais a une date différentes de celle donné en paramètres, selon l'idHotel
	function recupChambreDifferentDate($id,$date){
		$bdd = getBdd();
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, reservation AS r, hotel AS h WHERE c.numChambre=r.numchambre AND h.idHotel=? AND c.idHotel=h.idHotel AND c.idHotel=r.idHotel AND r.DateReservation<>?');
		$chambre->execute(array($id,$date));
		return $chambre;
	}

	//renvoie la liste des chambres qui ne se trouve pas dans la catégorie réservation avec comme paramètre l'idHotel
	function recupChambrePasDansReservation($id){
		$bdd = getBdd();
		$chambre = $bdd->prepare('SELECT * FROM chambre AS c, hotel AS h WHERE h.idHotel=? AND c.idHotel=h.idHotel AND c.numChambre NOT IN(SELECT numChambre FROM reservation WHERE idHotel=?)');
		$chambre->execute(array($id,$id));
		return $chambre;
	}

	//renvoie la liste des reservations
	function recupReservation(){
		$bdd = getBdd();
		$reservation = $bdd->query('SELECT * FROM reservation');
		return $reservation;
	}

	//renvoie la liste des clients
	function recupClient(){
		$bdd = getBdd();
		$client = $bdd->query('SELECT * FROM client');
		return $client;
	}

	//renvoie le client qui correspond au numClient passé en paramètre
	function recupClientDonne($numClient){
		$bdd = getBdd();
		$client = $bdd->query('SELECT * FROM client WHERE numClient = '.$numClient.'');
		return $client;
	}

	//Effectue la connexion à la BDD
	function getBdd() {
		//bdd pour localhost
		 $bdd = new PDO('mysql:host=localhost;dbname=test_projet;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 

		//bdd pour hebergeur en ligne
	/*	 $bdd = new PDO('mysql:host=mysql.hostinger.fr;dbname=u831133719_hotel','u831133719_bonni','23Se1996',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  */
		return $bdd;
	}


?>