create table rubriq (
	ID_Rubriq		int NOT NULL AUTO_INCREMENT,
	Nom_Rubriq		varchar(30),
	PRIMARY KEY (ID_Rubriq)
	);

create table sousrubriq (
	ID_Sousrubriq	int NOT NULL AUTO_INCREMENT,
	Nom_Sousrubriq	varchar(30),
	ID_Rubriq		int ,
	FOREIGN KEY (ID_Rubriq) REFERENCES rubriq (ID_Rubriq),
	PRIMARY KEY (ID_Sousrubriq)
	);

create table produit (
	ID_Produit		int NOT NULL AUTO_INCREMENT,
	Ref_Fournisseur varchar(25),
	Lib_C			varchar(25), 
	Lib_L			varchar(50),
	PUHT			int,
	Photo			varchar(25),
	ID_Sousrubriq 	int,
	FOREIGN KEY (ID_Sousrubriq) REFERENCES sousrubriq (ID_Sousrubriq), 
	PRIMARY KEY (ID_Produit)
	);

create table commercial (
	ID_Commercial	int NOT NULL AUTO_INCREMENT,
	Nom_Commercial  varchar(30),
	PRIMARY KEY (ID_Commercial)
	);

create table client (
	id				int NOT NULL AUTO_INCREMENT,
	Nom_Client		varchar(30),
	Prenom_Client	varchar(30),
	Adr_Factur		varchar(50),
	Adr_Livr		varchar(50),
	Categorie		varchar(20),
	Coeff			numeric,
	Authentif		varchar(20),
	Password		varchar(20),		
	ID_Commercial	int,
	FOREIGN KEY (ID_Commercial) REFERENCES commercial(ID_Commercial),
	PRIMARY KEY (id)
	);

create table commande (
	ID_Commande		int NOT NULL AUTO_INCREMENT,
	PTTC			int,
	Info_Paiement	varchar(50),
	Etat_Commande	varchar(20),
	Date_Commande	varchar(20),
	Date_Paiement	varchar(20),
	PTHT			int,
	Reduc_Sup		int,
	id		int,
	FOREIGN KEY (id) REFERENCES client(id),
	PRIMARY KEY (ID_Commande)
	);


create table livraison (
	ID_Livr			int NOT NULL AUTO_INCREMENT,
	Date_Livr		varchar(20),
	Etat_Livr		int,
	ID_Commande		int,
	FOREIGN KEY (ID_Commande) REFERENCES commande(ID_Commande),
	PRIMARY KEY (ID_Livr)
	);


create table regroupe (
	Nbr_Produit		int,
	ID_Produit		int,
	FOREIGN KEY (ID_Produit) REFERENCES produit(ID_Produit),
	ID_Livr			int,
	FOREIGN KEY(ID_Livr) REFERENCES livraison(ID_Livr),
	PRIMARY KEY (ID_Produit, ID_Livr)
	);


create table secomposede (
	Qte				int,
	ID_Produit		int,
	FOREIGN KEY (ID_Produit) REFERENCES produit(ID_Produit),
	ID_Commande		int,
	FOREIGN KEY (ID_Commande) REFERENCES commande(ID_Commande),
	PRIMARY KEY (ID_Produit, ID_Commande)
	);







-- set_insert rubriq on ;

INSERT INTO rubriq (ID_Rubriq, Nom_Rubriq)
VALUES (1, 'Guitare');

INSERT INTO rubriq (ID_Rubriq, Nom_Rubriq)
VALUES (2, 'MAO');

INSERT INTO rubriq (ID_Rubriq, Nom_Rubriq)
VALUES (3, 'DJ');

INSERT INTO rubriq (ID_Rubriq, Nom_Rubriq)
VALUES (4, 'Batteries');

-- set_insert rubriq off;




-- set_insert sousrubriq on;

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (11, 'Guitare electrique', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (12, 'Guitare acoustique', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (13, 'Guitare basse', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (14, 'Ampli', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (15, 'Pedale d''effet', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (16, 'Cordes', 1);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (21, 'Interface audio', 2);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (22, 'Logiciel', 2);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (23, 'Enceinte de monitoring', 2);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (31, 'Platine', 3);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (32, 'Table de mixage', 3);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (33, 'Casque', 3);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (41, 'Batterie acoustique', 4);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (42, 'Batterie electronique', 4);

INSERT INTO sousrubriq (ID_Sousrubriq, Nom_Sousrubriq, ID_Rubriq)
VALUES (43, 'Baguette', 4);

-- set_insert sousrubriq off;




-- set_insert produit on;

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (1111, 'Gibson', 'Les Paul', 'Custom Black Beauty', 3500, 'C:\image1.jpg', 11);

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (1121, 'Fender', 'Telecaster', 'American Standard maple', 1400, 'C:\image54.jpg', 11);

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (1345, 'Warwick', 'Streamer', 'Stage II', 2400, 'C:\image78.jpg', 13);

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (2265, 'Toontrack', 'EZMIX 2', 'Swedish Grindcore', 39, 'C:\image89.jpg', 22);

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (3378, 'Beyerdynamic', '770pro', '80 ohm', 149, 'C:\image789.jpg', 33);

INSERT INTO produit (ID_Produit, Ref_Fournisseur, Lib_C, Lib_L, PUHT, Photo, ID_Sousrubriq)
VALUES (4187, 'Tama', 'Starclassic', 'maple bubinga', 1900, 'C:\image4256.jpg', 41);

-- set_insert produit off;


-- set_insert commercial on;

INSERT INTO commercial (ID_Commercial, Nom_Commercial)
VALUES (51, 'Jean Comm');

INSERT INTO commercial (ID_Commercial, Nom_Commercial)
VALUES (52, 'Gerard de Souza');

INSERT INTO commercial (ID_Commercial, Nom_Commercial)
VALUES (53,'Hugues Balloches');

-- set_insert commercial off;



-- set_insert client on;

INSERT INTO client (id, Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (3945,'Despintes', 'Jean-René', '2 rue des pins 80000 Amiens','2 rue des pins 80000 Amiens', 'Professionnel', 2,'jeanre98', 'toto23', 51);

INSERT INTO client (id,Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (1418, 'Dufour', 'Jean-Louis', '56 rue des cajous 75000 Paris', '4 rue barrette 80000 Amiens', 'Particulier', 2,'jeanjean', 'riri', 52);

INSERT INTO client (id,Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (1515, 'Ducas', 'Titi', '78 rue des binouzes 63000 Clermont-Ferrand', '45 rue du bug 63010 Billon', 'Particulier', 1, 'dudu22', 'lala', 53);

INSERT INTO client (id,Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (1916, 'Boitrelle', 'Maxime', '1 rue des feuilles 60360 Auchy', '1 rue des feuilles 60360 Auchy', 'Professionnel', 1,'lemotard', 'zr7', 52);

INSERT INTO client (id,Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (2400, 'Guenot', 'Pierre', '214 avenue des pigeons 80000 Amiens', '54 rue des grous 60000 Beauvais', 'Particulier', 1, 'piteurhenriz', 'famineetdisette', 51);

INSERT INTO client (id,Nom_Client, Prenom_Client, Adr_Factur, Adr_Livr, Categorie, Coeff, Authentif, Password, ID_Commercial)
VALUES (850, 'Bessière', 'François', '22 allée des vues 13000 Marseille', '120 rue du grand mage 13000 Marseille', 'Professionnel', 1, 'franco45', 'golf', 51);

-- set_insert client off;



-- set_insert commande on;

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (789, 16600, 'carte bancaire', 'saisie', '22/07/2015', '22/07/2015', 14000, 200, 3945);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (790, 8300, 'virement bancaire', 'en préparation', '25/08/2015', '26/08/2015', 7000, 100, 1418);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (800, 629, 'paiement en 3 fois', 'facturée', '13/09/2015', '13/11/2015', 540, 20, 1515);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (856, 290, 'chèque', 'soldée', '22/10/2015', '04/11/2015', 250, 10, 1916);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (870, 336, 'virement bancaire', 'facturée', '25/10/2015', '30/11/2015', 292, 20, 1515);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (880, 3689, 'chèque', 'en préparation', '22/01/2016', '27/01/2016', 3490, 50, 1916);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (889, 3709, 'chèque', 'saisie', '21/02/2016', '27/02/2016', 3490, 30, 2400);

INSERT INTO commande (ID_Commande, PTTC, Info_Paiement, Etat_Commande, Date_Commande, Date_Paiement, PTHT, Reduc_Sup, id)
VALUES (890, 2230, 'carte bancaire', 'facturée', '27/02/2016', '10/03/2016', 1900, 50, 2400);


-- set_insert commande off;


-- set_insert livraison on;

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (4587, '30/07/2015', 1, 789);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (4780, '15/09/2015', 2, 790);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (5120, '08/10/2015', 3, 800);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (7025, '30/10/2015', 4, 856);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (8001, '01/11/2015', 3, 870);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (8002, '02/11/2015', 3, 880);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (8010, '04/12/2015', 7, 889);

INSERT INTO livraison (ID_Livr, Date_Livr, Etat_Livr, ID_Commande)
VALUES (8020, '04/12/2015', 1, 890);

-- set_insert livraison off;




INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (4, 1111, 4587);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (3, 1121, 4780);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (7, 2265, 5120);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (1, 4187, 7025);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (3, 2265, 8001);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (1, 1111, 8002);

INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (1, 1111, 8010);


INSERT INTO regroupe (Nbr_Produit, ID_Produit, ID_Livr)
VALUES (1, 4187, 8020);




INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (4, 1111, 789);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (5, 1121, 790);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (7, 2265, 800);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (2, 4187, 856);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (8, 2265, 870);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (1, 1111, 880);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (1, 1111, 889);

INSERT INTO secomposede (Qte, ID_Produit, ID_Commande)
VALUES (1, 4187, 890);













	

























