CREATE DATABASE sneak_me;
CREATE TABLE sneak_me.utilisateurs (
	id_utilisateur INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	nom VARCHAR(255) NOT NULL,
	prenom VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	mot_de_passe VARCHAR(255) NOT NULL,
	droit BOOL NOT NULL,
	adresse varchar(255) NOT NULL
);
CREATE TABLE sneak_me.couleurs (
	id_couleur INT PRIMARY KEY NOT NULL,
	label VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.marques (
	id_marque INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	label VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.sneakers (
	id_sneaker INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	taille FLOAT NOT NULL,
	prix FLOAT NOT NULL,
	image VARCHAR(255) NOT NULL,
	id_couleur INT NOT NULL,
	id_marque INT NOT NULL,
	CONSTRAINT fk_couleur FOREIGN KEY (id_couleur) REFERENCES couleurs(id_couleur),
	CONSTRAINT fk_marque FOREIGN KEY (id_marque) REFERENCES marques(id_marque)
);
CREATE TABLE sneak_me.paniers (
	id_utilisateur INT NOT NULL,
	id_sneaker INT NOT NULL,
	quantite INT NOT NULL,
	CONSTRAINT panier_primary_key PRIMARY KEY  (id_utilisateur, id_sneaker),
	CONSTRAINT fk_utilisateur FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur),
	CONSTRAINT fk_sneaker FOREIGN KEY (id_sneaker) REFERENCES sneakers(id_sneaker)
);
CREATE TABLE sneak_me.commande_sneakers(
	id_commande INT NOT NULL,
	id_sneaker INT NOT NULL,
	quantite INT NOT NULL,
	CONSTRAINT panier_primary_key PRIMARY KEY  (id_commande, id_sneaker)
);
CREATE TABLE sneak_me.statuts (
	id_statut INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	label VARCHAR(255) NOT NULL
);
CREATE TABLE sneak_me.commandes (
	id_commande INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	id_utilisateur INT NOT NULL,
	date_commande DATE NOT NULL,
	id_statut INT NOT NULL,
	CONSTRAINT fk_statut FOREIGN KEY (id_statut) REFERENCES statuts(id_statut),
	CONSTRAINT fk_utilisateur2 FOREIGN KEY (id_utilisateur) REFERENCES utilisateurs(id_utilisateur)
);
