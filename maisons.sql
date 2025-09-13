
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



create database Maisons;
use Maisons ;

CREATE TABLE  location (
    id INT PRIMARY KEY AUTO_INCREMENT,
   nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    localisation VARCHAR(255) NOT NULL,  
   description VARCHAR(255) NOT NULL,
   photo varchar(30) COLLATE latin1_bin NOT NULL,


)ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_bin AUTO_INCREMENT=23 ;



INSERT INTO location (id,nom, prix, localisation, description,photo) VALUES (1, 'Maison en Provence', 1500.00, 'Provence, France', 'Belle maison provençale avec piscine','Images/MaisonProvençale.jpg');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (2,'Appartement à Paris', 2000.00, 'Paris, France', 'Appartement lumineux au coeur de Paris','Images/AppartementParis');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (3,"Villa sur la Côte d'Azur", 3000.00, "Cote 'Azur, France", 'Villa de luxe avec vue sur la mer','Images/VillaAzur.jpg');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (4,'Chalet en Haute-Savoie', 1200.00, 'Haute-Savoie, France', 'Chalet traditionnel au pied des montagnes','Images/Chalet');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (5,'Maison de campagne en Normandie', 1000.00, 'Normandie, France', 'Maison rustique entourée de verdure','Images/Rustique');

INSERT INTO location (id,nom, prix, localisation, description,photo) VALUES (6,'Studio à Lyon', 800.00, 'Lyon, France', 'Studio moderne proche du centre-ville','Images/StudioModer');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (7,'Maison en Bretagne', 1300.00, 'Bretagne, France', 'Maison traditionnelle bretonne avec jardin','Images/MaisonBretonne');

INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (8,'Appartement à Bordeaux', 1500.00, 'Bordeaux, France', 'Appartement rénové dans un quartier animé','Images/AppartementBordeaux');
INSERT INTO location  (id,nom, prix, localisation, description,photo) VALUES (9,'Villa en Corse', 2500.00, 'Corse, France', 'Villa contemporaine avec piscine privée','Images/VillaPiscine');

INSERT INTO location (id,nom, prix, localisation, description,photo) VALUES (10,'Maison de ville à Toulouse', 1100.00, 'Toulouse, France', 'Confortable maison de ville avec terrasse','Images/MaisonToulouse');

