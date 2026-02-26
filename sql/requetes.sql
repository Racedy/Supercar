/* insertion marques */
INSERT INTO marques (nom_marque) VALUES 
('Porsche'),
('Audi'),
('Mercedes');

/* insertion de plusieurs voitures dans la table voiture */
INSERT INTO voiture (modele, prix, datesortie, kilometrage, disponibilite, boite_de_vitesse, carburant, puissance, couleur, provenance, details, id_marque) VALUES 
('R8', 253454, '2024-01-01', 2500, TRUE, 'Automatique', 'Essence', 610, 'Gris Nardo', 'Allemagne', 'Description R8', 1),
('911', 253454, '2024-01-01', 2500, TRUE, 'Automatique PDK', 'Essence', 525, 'Gris Arctique', 'Allemagne', 'Description 911', 2),
('AMG GT', 253454, '2024-01-01', 2500, TRUE, 'Automatique', 'Essence', 585, 'Jaune Solarbeam', 'Allemagne', 'Description AMG GT', 3),
('R8', 253454, '2024-01-01', 2500, TRUE, 'Automatique', 'Essence', 610, 'Noir Mythic', 'Allemagne', 'Description R8', 1),
('911', 253454, '2024-01-01', 2500, TRUE, 'Automatique PDK', 'Essence', 525, 'Rouge Indien', 'Allemagne', 'Description 911', 2),
('AMG GT', 253454, '2024-01-01', 2500, TRUE, 'Automatique', 'Essence', 585, 'Bleu Brillant', 'Allemagne', 'Description AMG GT', 3);

/* insertion dans la table image */
INSERT INTO image (url_image, idvoiture) VALUES 
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 1),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 1),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 1),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 1),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 2),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 2),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 2),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 2),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 3),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 3),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 3),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 3),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 4),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 4),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 4),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 4),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 5),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 5),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 5),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 5),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 6),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 6),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 6),
('assets/images/porsche/porsche-gt3-rs-rouge.jpg', 6);