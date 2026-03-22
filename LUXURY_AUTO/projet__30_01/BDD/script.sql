CREATE DATABASE cfa_sport;

use cfa_sport; --selection de la base de données cfa_sport

CREATE Table membres (
    id INT NOT NULL AUTO_INCREMENT,
    genre BOOLEAN,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    mdp VARCHAR(255) NOT NULL,
    telephone VARCHAR(255) NOT NULL UNIQUE,
    adresse VARCHAR(255),
    PRIMARY KEY(id)
);

CREATE TABLE sport (
    id INT NOT NULL AUTO_INCREMENT,
    libelle VARCHAR (255) NOT NULL,
    PRIMARY KEY (id)
);
/* req insert sport */
INSERT INTO sport (libelle) values ('football');
INSERT INTO sport (libelle) values ('hanball');
INSERT INTO sport (libelle) values ('tennis');
INSERT INTO sport (libelle) values ('baskeball');

CREATE TABLE inscription (  --table inscription pour lier les membres et les sports
    id INT NOT NULL AUTO_INCREMENT,
    membre int,
    sport int,
    PRIMARY KEY (id),
    FOREIGN KEY (membre) REFERENCES membres (id), -- Foreign key pour lier la table inscription à la table membres
    FOREIGN KEY (sport) REFERENCES sport(id)
);
/* rendre la table unique */
ALTER TABLE `sport` ADD UNIQUE(`libelle`);
/* trs insert membre*/

INSERT INTO membres (genre, nom, prenom, email, mdp, telephone, adresse)
    values
(1, "CAMARA", "Allama", "allama@gmail.com", "1234", "0641339356", "3 rue du japon 75019");

INSERT INTO membres (genre, nom, prenom, email, mdp, telephone, adresse)
    values
(1, "CAMARA", "Mohamed", "mohamed@gmail.com", "1234", "0641339357", "3 rue du japon 75019");

INSERT INTO membres (genre, nom, prenom, email, mdp, telephone, adresse)
    values
(1, "sisoko", "mamadou", "mamadou@gmail.com", "1234", "0641339359", "3 rue du japon 75019");

INSERT INTO membres (genre, nom, prenom, email, mdp, telephone, adresse)
    values
(1, "Sinayoko", "Bintou", "Bintou@gmail.com", "1234", "0641339358", "3 rue du japon 75019");
