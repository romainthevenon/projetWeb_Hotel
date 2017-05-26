#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        idCategorie int (11) Auto_increment  NOT NULL ,
        type        Varchar (50) ,
        prix        Float ,
        PRIMARY KEY (idCategorie )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: chambre
#------------------------------------------------------------

CREATE TABLE chambre(
        numChambre  Int NOT NULL ,
        idHotel     Int NOT NULL ,
        idCategorie Int ,
        PRIMARY KEY (numChambre ,idHotel )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reservation
#------------------------------------------------------------

CREATE TABLE reservation(
        idReservation   int (11) Auto_increment  NOT NULL ,
        DateReservation Date ,
        numChambre      Int ,
        idHotel         Int NOT NULL ,
        numClient       Int ,
        PRIMARY KEY (idReservation )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        numClient  int (11) Auto_increment  NOT NULL ,
        nom        Varchar (30) ,
        prenom     Varchar (30) ,
        adresse    Varchar (255) ,
        codePostal Varchar (10) ,
        ville      Varchar (30) ,
        numTel     Varchar (10) ,
        PRIMARY KEY (numClient )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: service
#------------------------------------------------------------

CREATE TABLE service(
        idService int (11) Auto_increment  NOT NULL ,
        type      Varchar (50) ,
        prix      Float ,
        PRIMARY KEY (idService )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hotel
#------------------------------------------------------------

CREATE TABLE hotel(
        idHotel    int (11) Auto_increment  NOT NULL ,
        nom        Varchar (50) ,
        adresse    Varchar (255) ,
        codePostal Varchar (10) ,
        ville      Varchar (50) ,
        numTel     Varchar (10) ,
        PRIMARY KEY (idHotel )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contenir
#------------------------------------------------------------

CREATE TABLE contenir(
        idReservation Int NOT NULL ,
        idService     Int NOT NULL ,
        PRIMARY KEY (idReservation ,idService )
)ENGINE=InnoDB;

ALTER TABLE chambre ADD CONSTRAINT FK_chambre_idHotel FOREIGN KEY (idHotel) REFERENCES hotel(idHotel);
ALTER TABLE chambre ADD CONSTRAINT FK_chambre_idCategorie FOREIGN KEY (idCategorie) REFERENCES categorie(idCategorie);
ALTER TABLE reservation ADD CONSTRAINT FK_reservation_numChambre FOREIGN KEY (numChambre) REFERENCES chambre(numChambre);
ALTER TABLE reservation ADD CONSTRAINT FK_reservation_idHotel FOREIGN KEY (idHotel) REFERENCES hotel(idHotel);
ALTER TABLE reservation ADD CONSTRAINT FK_reservation_numClient FOREIGN KEY (numClient) REFERENCES client(numClient);
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idReservation FOREIGN KEY (idReservation) REFERENCES reservation(idReservation);
ALTER TABLE contenir ADD CONSTRAINT FK_contenir_idService FOREIGN KEY (idService) REFERENCES service(idService);
