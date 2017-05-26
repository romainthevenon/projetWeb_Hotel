/* remplissage de la table categorie */

INSERT INTO `categorie` (`idCategorie`, `type`, `prix`) VALUES
(1, 'simple', 45),
(2, 'double', 65);

/* remplissage de la table hotel */

INSERT INTO `hotel` (`idHotel`, `nom`, `adresse`, `codePostal`, `ville`, `numTel`) VALUES
(1, 'Lafayette', '4 cours Lafayette', '69003', 'Lyon', '0478455265'),
(2, 'Decilyo', '10 rue de Lyon', '13015', 'Marseille', '0458789654'),
(3, 'Voltaire', '20 boulevard Voltaire', '75011', 'Paris', '0469745821');

/* remplissage de la table Chambre */

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (1,1,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (2,1,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (3,1,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (4,1,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (5,1,1);

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (6,1,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (7,1,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (8,1,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (9,1,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (10,1,2);

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (1,2,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (2,2,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (3,2,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (4,2,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (5,2,1);

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (6,2,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (7,2,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (8,2,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (9,2,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (10,2,2);

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (1,3,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (2,3,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (3,3,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (4,3,1);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (5,3,1);

INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (6,3,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (7,3,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (8,3,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (9,3,2);
INSERT INTO `chambre`(`numChambre`, `idHotel`, `idCategorie`) VALUES (10,3,2);


/* remplissage de la table Service */

INSERT INTO `service` (`idService`, `type`, `prix`) VALUES
(1, 'menage', 10),
(2, 'petit dejeuner', 5),
(3, 'bagagerie', 5),
(4, 'pressing', 5);