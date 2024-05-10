
CREATE TABLE unite (
    idu INT PRIMARY KEY AUTO_INCREMENT,
    libelleu VARCHAR(50)
);

CREATE TABLE type (
    idt INT PRIMARY KEY AUTO_INCREMENT,
    libellet VARCHAR(50)
);

CREATE TABLE  `fournisseur` (
  `idf` int NOT NULL AUTO_INCREMENT,
  `nomf` varchar(50) NOT NULL,
  `telf` varchar(12) NOT NULL,
  PRIMARY KEY (`idf`)
);
CREATE TABLE categorie (
    idc INT PRIMARY KEY AUTO_INCREMENT,
    libellec VARCHAR(50),
    idu INT,
    FOREIGN KEY (idu) REFERENCES unite(idu)
);

CREATE TABLE produit (
    idp INT PRIMARY KEY AUTO_INCREMENT,
    libellep VARCHAR(50),
    qtestockp INT,
    idt INT,
    idc int,
    FOREIGN KEY (idc) REFERENCES categorie(idc),
    FOREIGN KEY (idt) REFERENCES type(idt)
);
CREATE TABLE approvisionnement (
    ida INT PRIMARY KEY AUTO_INCREMENT,
    datea date,
    totala INT,
    idf INT,
    FOREIGN KEY (idf) REFERENCES fournisseur(idf)
);

CREATE TABLE details (
    qted INT,
    prixAchat float,
    montantd float,
    idp INT,
    ida int,
    FOREIGN KEY (ida) REFERENCES approvisionnement(ida),
    FOREIGN KEY (idp) REFERENCES produit(idp)
);




-- Insertion des unités
INSERT INTO unite (libelleu) VALUES
('Mètre'),
('Pièce'),
('Lot'),
('yeard');

-- Insertion des types d'articles
INSERT INTO type (libellet) VALUES
('Confection'),
('Vente');

-- Insérer des données dans la table "fournisseur"
INSERT INTO `fournisseur` (`nomf`, `telf`) VALUES
('Amadou Ba', '123456678'),
('Issa Diatta', '563947302'),
('Awa Sene', '462820382'),
('Madieume Diop', '843935784');

-- Insertion des catégories d'articles de confection ou de vente
INSERT INTO categorie (libellec, idu) VALUES
('Tissus', 1),
('Boutons', 2),
('Aiguilles', 2),
('Fils', 3),
('Costume', 2),
('Robe', 2),
('Traditionnel', 2);

-- Insertion des produits
INSERT INTO produit (libellep, qtestockp, idt, idc) VALUES
('Tissus A', 100, 1, 1),
('Boutons B', 200, 1, 2),
('Aiguilles C', 300, 1, 3),
('Basin', 100, 1,1),
('Wax', 80, 1,1),
('Getzner', 200, 1,1),
('Fils D', 400, 1, 4);

-- Insertion des approvisionnements
INSERT INTO approvisionnement (datea, totala, idf) VALUES
('2024-05-01', 1500.00, 1),
('2024-05-05', 200.00, 2);

-- Insertion des détails d'approvisionnements
INSERT INTO details (qted, prixAchat, montantd, idp, ida) VALUES
(100, 10.50, 1050.00, 1, 1),
(200, 0.50, 100.00, 2, 1),
(200, 0.50, 100.00, 2, 2);

