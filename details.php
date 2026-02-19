<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche 911 GT3 RS - SuperCar</title>
    
    <!-- Bootstrap CSS (Local) -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons (Local) -->
    <link rel="stylesheet" href="assets/css/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/details.css">
</head>
<body>
    
    <?php include('include/header.html'); ?>

    <!-- Contenu principal -->
    <main class="container-fluid px-4 my-5">
        <div class="row gx-4 justify-content-center">
            
            <!-- COLONNE GAUCHE : Galerie d'images -->
            <div class="col-lg-5 col-xl-5 col-custom mb-4">
                
                <!-- Carousel statique -->
                <div id="carImageCarousel" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/images/porsche/main2.jpeg" class="d-block w-100" alt="Porsche 911 GT3 RS - Vue avant">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/porsche/porsche-interior.jpeg" class="d-block w-100" alt="Porsche 911 GT3 RS - Intérieur">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/porsche/porsche-siege.jpeg" class="d-block w-100" alt="Porsche 911 GT3 RS - Siège">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/images/porsche/porsche-pneu.jpeg" class="d-block w-100" alt="Porsche 911 GT3 RS - Pneu">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carImageCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Précédent</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carImageCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Suivant</span>
                    </button>

                    <!-- Miniatures (Indicateurs Bootstrap) -->
                    <!-- Elles doivent être DANS le carousel pour que la classe active se mette à jour automatiquement -->
                    <div class="carousel-indicators row g-2 justify-content-start mt-2">
                        <div class="col-2">
                            <div class="thumbnail-wrapper active" data-bs-target="#carImageCarousel" data-bs-slide-to="0" aria-label="Slide 1">
                                <img src="assets/images/porsche/porsche-gt3-rs-rouge.jpg" class="img-fluid" alt="Miniature 1">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="thumbnail-wrapper" data-bs-target="#carImageCarousel" data-bs-slide-to="1" aria-label="Slide 2">
                                <img src="assets/images/porsche/porsche-interior.jpeg" class="img-fluid" alt="Miniature 2">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="thumbnail-wrapper" data-bs-target="#carImageCarousel" data-bs-slide-to="2" aria-label="Slide 3">
                                <img src="assets/images/porsche/porsche-siege.jpeg" class="img-fluid" alt="Miniature 3">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="thumbnail-wrapper" data-bs-target="#carImageCarousel" data-bs-slide-to="3" aria-label="Slide 4">
                                <img src="assets/images/porsche/porsche-pneu.jpeg" class="img-fluid" alt="Miniature 4">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- DESCRIPTION (sur la gauche sous la galerie sur la maquette) -->
                <div class="description-card mt-4">
                    <h2 class="description-title">Description</h2>
                    <p class="description-text">
                        La Porsche 911 GT3 RS est une bête de course homologuée pour la route. Avec son moteur atmosphérique de 4.0 litres développant 525 ch, elle offre des sensations pures et une précision chirurgicale sur circuit.<br><br>
                        Le pack Weissach optionnel réduit encore le poids grâce à l'utilisation intensive de carbone visible sur le capot avant, le toit et l'aileron arrière. L'intérieur est dépouillé mais luxueux, avec des sièges baquets en carbone et un arceau de sécurité.<br><br>
                        Ce modèle est équipé de jantes en magnésium forgé et du système de levage de l'essieu avant pour faciliter les franchissements de ralentisseurs. Une véritable icône automobile qui repousse les limites de la performance.
                    </p>
                </div>
                
            </div>
            
            <!-- COLONNE DROITE : Détails du véhicule -->
            <div class="col-lg-5 col-xl-5 col-custom">
                
                <!-- UNE SEULE carte blanche pour tout -->
                <div class="vehicle-card">
                    
                    <!-- Titre et Prix -->
                    <h1 class="car-title">Porsche 911 GT3 RS</h1>
                    <p class="car-price">29 000 000 RS</p>
                    
                    <!-- Titre Caractéristiques -->
                    <h2 class="card-title">Caractéristiques</h2>
                    
                    <!-- Caractéristiques avec icônes -->
                    <div class="char-list">
                        <div class="char-item">
                            <div class="char-icon">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <div class="char-info">
                                <span class="char-label">Année</span>
                                <span class="char-value">2023</span>
                            </div>
                        </div>
                        
                        <div class="char-item">
                            <div class="char-icon">
                                <i class="bi bi-speedometer2"></i>
                            </div>
                            <div class="char-info">
                                <span class="char-label">Kilométrage</span>
                                <span class="char-value">4 500 km</span>
                            </div>
                        </div>
                        
                        <div class="char-item">
                            <div class="char-icon">
                                <i class="bi bi-fuel-pump"></i>
                            </div>
                            <div class="char-info">
                                <span class="char-label">Carburant</span>
                                <span class="char-value">Essence</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Spécifications (dans la même carte) -->
                    <div class="specs-list">
                        <div class="spec-item">
                            <span class="spec-label">Transmission</span>
                            <span class="spec-value">Automatique PDK</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Puissance</span>
                            <span class="spec-value">525 Ch</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Couleur</span>
                            <span class="spec-value">Gris Arctique</span>
                        </div>
                        <div class="spec-item">
                            <span class="spec-label">Provenance</span>
                            <span class="spec-value">Allemagne</span>
                        </div>
                    </div>
                    
                    <!-- Boutons d'action (dans la même carte) -->
                    <div class="action-buttons">
                        <button class="btn-orange-full">Demander un essai</button>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <!-- Section Véhicules similaires -->
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-10 col-xl-10 col-custom-similar">
                <h2 class="similar-title">Véhicules similaires</h2>
            </div>
        </div>
        
        <div class="row g-4 mt-2 justify-content-center">
            <div class="col-lg-10 col-xl-10 col-custom-similar">
                <div class="row g-4">
                    <!-- Similar Car 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="similar-card">
                            <div class="similar-image">
                                <img src="assets/images/porsche/porsche-911-gt3-rs-2.webp" alt="Porsche 911 GT3">
                            </div>
                            <div class="similar-body">
                                <h3 class="similar-car-name">Porsche 911 GT3</h3>
                                
                                <div class="similar-specs">
                                    <span class="similar-spec">
                                        <i class="bi bi-calendar3"></i>
                                        2022
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-speedometer2"></i>
                                        12 000 km
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        Essence
                                    </span>
                                </div>
                                
                                <div class="similar-footer">
                                    <span class="similar-price">25 000 000 RS</span>
                                    <a href="#" class="btn-see-details">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Car 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="similar-card">
                            <div class="similar-image">
                                <img src="assets/images/porsche/porsche-main.webp" alt="Porsche 718 Cayman GT4 RS">
                            </div>
                            <div class="similar-body">
                                <h3 class="similar-car-name">Porsche 718 Cayman GT4 RS</h3>
                                
                                <div class="similar-specs">
                                    <span class="similar-spec">
                                        <i class="bi bi-calendar3"></i>
                                        2023
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-speedometer2"></i>
                                        2 500 km
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        Essence
                                    </span>
                                </div>
                                
                                <div class="similar-footer">
                                    <span class="similar-price">12 000 000 RS</span>
                                    <a href="#" class="btn-see-details">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Car 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="similar-card">
                            <div class="similar-image">
                                <img src="assets/images/porsche/porsche-gt3-rs.jpg" alt="Ferrari 488 Pista">
                            </div>
                            <div class="similar-body">
                                <h3 class="similar-car-name">Ferrari 488 Pista</h3>
                                
                                <div class="similar-specs">
                                    <span class="similar-spec">
                                        <i class="bi bi-calendar3"></i>
                                        2020
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-speedometer2"></i>
                                        8 000 km
                                    </span>
                                    <span class="similar-spec">
                                        <i class="bi bi-fuel-pump"></i>
                                        Essence
                                    </span>
                                </div>
                                
                                <div class="similar-footer">
                                    <span class="similar-price">35 000 000 RS</span>
                                    <a href="#" class="btn-see-details">Voir détails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>
    
    <?php include('include/footer.html'); ?>
    
    <!-- Bootstrap JS (Local) -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>