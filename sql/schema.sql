CREATE DATABASE supercar;

/* Table marques */
CREATE TABLE marques (
    id_marque INT AUTO_INCREMENT PRIMARY KEY,
    nom_marque VARCHAR(200) NOT NULL
);

/* Table Voiture */
CREATE TABLE Voiture (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    Id_Marque INT,
    prix DECIMAL(12,2),
    annee YEAR,
    kilometrage INT,
    disponibilite BOOLEAN DEFAULT TRUE,
    transmission VARCHAR(50),
    carburant VARCHAR(50),
    puissance INT,
    couleur VARCHAR(50),
    provenance VARCHAR(50),
    description TEXT,
    FOREIGN KEY (Id_Marque) REFERENCES marques(id_marque)
);

/* Table images_voiture */
CREATE TABLE images_voiture (
    id_image INT AUTO_INCREMENT PRIMARY KEY,
    id_voiture INT,
    chemin_image VARCHAR(255) NOT NULL,
    ordre INT DEFAULT 0,
    FOREIGN KEY (id_voiture) REFERENCES Voiture(Id) ON DELETE CASCADE
);

/* Table Client */
CREATE TABLE Client (
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Nom VARCHAR(100),
    Prenom VARCHAR(100),
    Mail VARCHAR(150),
    Telephone VARCHAR(20),
    Adresse VARCHAR(255),
    Mots_passe VARCHAR(255)
);

/* Table Service */
CREATE TABLE Service (
    id_service INT PRIMARY KEY AUTO_INCREMENT,
    nom_service VARCHAR(60),
    titre_service VARCHAR(100),
    description_service TEXT,
    prix_service DECIMAL(12,2),
    image_service VARCHAR(60)
);

/* Table demande_essai */
CREATE TABLE demande_essai (
    id_demande INT AUTO_INCREMENT PRIMARY KEY,
    id_client INT,
    id_voiture INT,
    date_essaye DATE,
    statut ENUM('En cours', 'Valider', 'Annuler'),
    FOREIGN KEY (id_client) REFERENCES Client(Id),
    FOREIGN KEY (id_voiture) REFERENCES Voiture(Id)
);

/* Table Contenue */
CREATE TABLE Contenue (
    id_contenue INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(200),
    texte TEXT,
    page VARCHAR(100)
);

/* Table contact */
CREATE TABLE contact (
    id_contact INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    telephone VARCHAR(20),
    message TEXT NOT NULL,
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);